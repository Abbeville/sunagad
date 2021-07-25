<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.admin.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages.admin.product.create', ['categories' => $categories]);
    }

    public function show(Product $product)
    {
        return view('pages.admin.product.show', compact('product'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'old_price' => 'required',
            'stock' => 'required',
            'description' => 'required',
            'short_description' => 'required',
        ]);

        $avatarName = time().'.'.request()->image->getClientOriginalExtension();

        // $request->avatar->storeAs('avatars', $avatarName);
        $image = $request->image;

        $image->move('products', $avatarName);


        $product = new Product();


        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->price = $request->price;
        $product->old_price = $request->old_price;
        $product->stock = $request->stock;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->image = $avatarName;
        $product->save();

        session()->flash('success', 'Product Added Successfully');

        return redirect()->back();
    }

    public function delete(Product $product)
    {
        $product->delete();

        session()->flash('success', 'Item Deleted');

        return redirect()->back();
    }
}
