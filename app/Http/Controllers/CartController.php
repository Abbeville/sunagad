<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Basket\Basket;
use App\Basket\Basket\Exceptions\QuantityExceededException;

class CartController extends Controller
{

    protected $basket;
    protected $product;

    public function __construct(Basket $basket, Product $product)
    {
        $this->basket = $basket;
        $this->product = $product;
    }

    public function index()
    {
        $this->basket->refresh();
        return view('pages.cart.index');
    }

    public function add(Request $request)
    {
        $product = $this->product->find($request->product_id);

        if (!$product) {
            session()->flash('error', 'Product not found');
            return redirect()->back();
        }

        try{

            $this->basket->add($product, $request->quantity);

        } catch (QuantityExceededException $e){

        }

        return redirect()->route('cart.index');
    }

    public function remove($product_id)
    {
        $product = Product::find($product_id);

        $this->basket->remove($product);

        return redirect()->back();
    }

    public function update(Request $request, $slug)
    {
        $product = $this->product->where('slug', $slug)->first();

        if (!$product) {
            return redirect()->back();
        }

        try {
            $this->basket->update($product, $request->quantity);
        }catch (QuantityExceededException $e)
        {

        }

        return redirect()->back();
    }
}
