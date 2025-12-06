<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Http\Requests\ProductRequest;
use App\Models\ProductDetail;

class ProductController extends Controller
{
    public function addProduct()
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('backend.product.add', compact('categories', 'brands'));
    }

    public function manageProduct()
    {
       $products = Product::with('category','brand')->orderBy('created_at', 'desc')->get();
       return view('backend.product.manage', compact('products'));
    }

    public function storeProduct(ProductRequest $request)
    {
        // Single Image Upload
        $imagename = null;
        if ($request->hasFile('image')) {
            $imagename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/product/'), $imagename);
        }

        // Save Product
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->name = $request->name;
        $product->slug = strtolower(str_replace(' ', '-', $request->name));
        $product->price = $request->price;
        $product->discounted_price = $request->discounted_price;
        $product->qty = $request->qty;
        $product->color = $request->color;
        $product->size = $request->size;
        $product->short_discription = $request->short_discription;
        $product->long_discription = $request->long_discription;
        $product->status = $request->status;
        $product->image = $imagename;
        $product->save();

        // Multiple Images Upload
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $galleryimage) {
                $imagesname = uniqid() . '.' . $galleryimage->extension();
                $galleryimage->move(public_path('images/product/'), $imagesname);

                $productImages = new ProductDetail();
                $productImages->product_id = $product->id;
                $productImages->images = $imagesname;
                $productImages->save();
            }
        }

        return redirect()->route('product.manage')->with('success', 'Product added successfully');
    }

    public function inactiveProduct($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->status = 0;
            $product->save();
            return redirect()->route('product.manage')->with('success', 'Product marked as inactive successfully');
        }
        return redirect()->route('product.manage')->with('error', 'Product not found');
    }
      public function activeProduct($id)
      {
         $product = Product::find($id);
         if ($product) {
               $product->status = 1;
               $product->save();
               return redirect()->route('product.manage')->with('success', 'Product marked as active successfully');
         }
         return redirect()->route('product.manage')->with('error', 'Product not found');
      }
      
}
