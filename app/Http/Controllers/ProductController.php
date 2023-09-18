<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Tables\Products;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class ProductController extends Controller
{
    public function index()
    {
        return view('dashboard.products.home')->with('products', Products::class);
    }

    public function create()
    {
        $form = [
            'action' => route('dashboard.product.store'),
            'submit' => 'Create',
        ];
        return view('dashboard.products.form')->with('form', $form);
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated());
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $product->media()->create([
                    'media' =>  str_replace('public/', '',$image->store('products', 'public'))
                ]);
            }
        }
        Toast::success('Product created successfully');
        return redirect()->route('dashboard.product.home');
    }

    public function edit(Product $product)
    {
        $form = [
            'action' => route('dashboard.product.update', $product),
            'submit' => 'Update',
        ];

        return view('dashboard.products.form')->with(['form' => $form, 'default' => $product]);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $product->media()->create([
                    'media' =>  str_replace('public/', '',$image->store('products', 'public'))
                ]);
            }
        }
        Toast::success('Product updated successfully');
        return redirect()->route('dashboard.product.home');
    }
}
