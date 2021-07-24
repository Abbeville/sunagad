<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.product.index', compact('products'));
    }

    public function show($product)
    {
        $product = Product::where('slug', $product)->first();
        return view('pages.product.show', compact('product'));
    }
}
