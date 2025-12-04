<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;

class BrandController extends Controller
{
  public function addBrand()
  {
    $categories = Category::orderBy('id', 'desc')->where('status', 1)->get();
      return view('backend.admin.brand.add', compact('categories'));
  }
    public function manageBrand()
    {
        $brands = Brand::all();
        return view('backend.admin.brand.manage', compact('brands'));
    }
    public function storeBrand(Request $request)
    {
       $request->validate([
           'category_id' => 'required|exists:categories,id',
           'name' => 'required|string|max:255',
           'status' => 'required|in:0,1',
       ]);

       $brand = new Brand();
       $brand->category_id = $request->category_id;
       $brand->name = $request->name;
       $brand->slug = str_replace(' ', '-', strtolower($request->name));
       $brand->status = $request->status;
       $brand->save();

       return redirect()->back()->with('success', 'Brand created successfully.');
    }
    public function editBrand($id)
    {
        $brand = Brand::findOrFail($id);
        return view('backend.admin.brand.edit', compact('brand'));
    }
    public function updateBrand(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'status' => 'required|in:0,1',
        ]);

        $brand = Brand::findOrFail($id);
        $brand->category_id = $request->category_id;
        $brand->name = $request->name;
        $brand->slug = str_replace(' ', '-', strtolower($request->name));
        $brand->status = $request->status;
        $brand->save();

        return redirect()->route('brand.manage')->with('success', 'Brand updated successfully.');
    }
    public function activeBrand($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->status = !$brand->status; // Toggle status
        $brand->save();
        return redirect()->back()->with('success', 'Brand status updated successfully.');
    }
    public function inactiveBrand($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->status = !$brand->status; // Toggle status
        $brand->save();
        return redirect()->back()->with('success', 'Brand status updated successfully.');
    }
    public function deleteBrand($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect()->back()->with('success', 'Brand deleted successfully.');
    }
    
}
