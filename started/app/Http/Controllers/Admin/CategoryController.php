<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('backend.category.add');
    }

    public function manageCategory()
    {
        $categories = Category::all();
        return view('backend.category.manage', compact('categories'));
    }
    public function storeCategory(Request $request)
    {
       $request->validate([
           'name' => 'required|string|max:255',
           'status' => 'required|in:0,1',
       ]);

       $category = new Category();
       $category->name = $request->name;
       $category->slug = str_replace(' ', '-', strtolower($request->name));
       $category->status = $request->status;
       $category->save();

       return redirect()->back()->with('success', 'Category created successfully.');
    }
}
