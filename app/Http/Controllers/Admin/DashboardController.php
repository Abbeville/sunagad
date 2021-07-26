<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $total_sales = Payment::where('failed', false)->count();
        $customers = Customer::all();
        $thisMonth = Order::sum('paid');
        return view('pages.admin.dashboard', get_defined_vars());
    }
}
