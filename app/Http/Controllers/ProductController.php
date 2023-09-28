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
        $default = [
            'name' => $product->name,
            'price' => $product->price,
            'discount' => $product->discount,
            'description' => $product->description,
            'ingredients' => $product->ingredients,
            'dosage' => $product->dosage,
            'origin' => $product->origin,
            'quantity' => $product->quantity,
            'is_active' => $product->is_active,
            'category_id' => $product->category_id,
            'benefits' => $product->benefits,
            'images' => $product->media->map(function ($media) {
                return asset('storage/'.$media->media);
            })->toArray(),
        ];
        return view('dashboard.products.form')->with(['form' => $form, 'default' => $default]);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        if ($request->hasFile('images')) {

            foreach ($request->file('images') as $image) {
                // check if media with same name exists
                $media = $product->media()->where('media', str_replace('storage/', '',$image->store('products', 'public')))->first();
                if ($media) {
                    $media->update([
                        'media' => str_replace('storage/', '',$image->store('products', 'public'))
                    ]);
                } else {
                    $product->media()->create([
                        'media' => str_replace('storage/', '',$image->store('products', 'public'))
                    ]);
                }
            }
        }
        Toast::success('Product updated successfully');
        return redirect()->route('dashboard.product.home');
    }
}
