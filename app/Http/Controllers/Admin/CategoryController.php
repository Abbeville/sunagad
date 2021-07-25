<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('pages.admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('pages.admin.category.create');
    }

    public function show(Category $category)
    {
        return view('pages.admin.category.show', compact('category'));
    }

    public function store(Request $request)
    {
        // dd($request->title);
        $request->validate([
            'title' => 'required'
        ]);


        $category = new Category();


        $category->name = $request->title;
        $category->description = $request->description;
        $category->save();

        session()->flash('success', 'Category Added Successfully');

        return redirect()->back();
    }

    public function delete(Category $category)
    {
        $category->delete();

        session()->flash('success', 'Item Deleted');

        return redirect()->back();
    }
}
