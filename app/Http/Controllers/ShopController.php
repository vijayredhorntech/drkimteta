<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ShopController extends Controller
{
    public function index(Category $selectedCategory = null)
    {
        $categories = Category::all();
        if ($selectedCategory) {
            $products = $selectedCategory->products()->where('is_active', 1)->get();
        } else {
            $products = Product::where('is_active', 1)->get();
        }
        $products = $products->map(function ($product) {
            $images = [];
            foreach ($product->media as $image) {
                $images[] = asset('storage/' . $image->media);
            }
            $product->images = $images;
            return $product;
        });
        return view('shop')->with(['categories' => $categories, 'products' => $products]);
    }

    public function show(Product $product){
        return view('productDetails')->with(['product'=>$product]);
    }
}
