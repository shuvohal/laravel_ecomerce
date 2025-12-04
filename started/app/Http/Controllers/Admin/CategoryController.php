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
    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }
    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:0,1',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = str_replace(' ', '-', strtolower($request->name));
        $category->status = $request->status;
        $category->save();

        return redirect()->route('category.manage')->with('success', 'Category updated successfully.');
    }
    public function activeCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->status = !$category->status; // Toggle status
        $category->save();

        return redirect()->route('category.manage')->with('success', 'Category status updated successfully.');
    }
    public function inactiveCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->status = !$category->status; // Toggle status
        $category->save();

        return redirect()->route('category.manage')->with('success', 'Category status updated successfully.');
    }
    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.manage')->with('success', 'Category deleted successfully.');
    }
}
