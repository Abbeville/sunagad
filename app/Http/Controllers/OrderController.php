<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basket\Basket;
use App\Models\Customer;
use App\Models\Address;
use Braintree;
use App\Events\OrderWasCreated;
use App\Events\OrderFailed;
use App\Models\Order;

class OrderController extends Controller
{

    protected $basket;

    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }

    public function index()
    {

        $this->basket->refresh();

        if(!$this->basket->subTotal()){
            return redirect()->route('cart.index');
        }
        return view('pages.order.index');
    }

    public function show($hash, Order $order)
    {
        $order = Order::with(['address', 'products'])->where('hash', $hash)->first();

        if (!$order) {
            return redirect()->back();
        }

        return view('pages.order.show', compact('order'));
    }

    public function create(Request $request)
    {
        $this->basket->refresh();

        if (!$this->basket->subTotal()) {
            return redirect()->route('cart.index');
        }

        if(!$request->payment_method_nonce) {
            return redirect()->route('order.index');
        }

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'state' => 'required'
        ]);

        $hash = bin2hex(random_bytes(32));

        $customer = Customer::firstOrCreate([
            'email' => $request->email,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'companyname' => $request->companyname,
            'phone' => $request->phone,
        ]);

        $address = Address::firstOrCreate([
            'address' => $request->address,
            'city' => $request->city,
            'zipcode' => $request->zipcode,
            'state' => $request->state,
            'country' => $request->country,
        ]);

        $order = $customer->orders()->create([
            'hash' => $hash,
            'paid' => false,
            'total' => $this->basket->subTotal() + $this->basket->shippingFee(),
            'address_id' => $address->id
        ]);

        $allItems = $this->basket->all();

        $order->products()->saveMany(
            $allItems,
            $this->getQuantities($allItems)
        );

        $result = Braintree\Transaction::sale([
            'amount' => $this->basket->subTotal() + $this->basket->shippingFee(),
            'paymentMethodNonce' => $request->payment_method_nonce,
            'options' => [
                'submitForSettlement' => true,
            ]
        ]);

        if (!$result->success) {
           event(new OrderFailed($order));

            return redirect()->back();
        }

        event(new OrderWasCreated($order, $this->basket, $result->transaction->id));

        return redirect()->route('order.show', $hash);
    }

    protected function getQuantities($items)
    {
        $quantities = [];

        foreach($items as $item) {
            $quantities[] = ['quantity' => $item->quantity];
        }

        return $quantities;
    }
}
