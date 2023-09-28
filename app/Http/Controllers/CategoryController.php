<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = SpladeTable::for(Category::class)
            ->column('name')
            ->column('image')
            ->column('products','Products')
            ->paginate(10);
        return view('dashboard.categories.home')->with('categories', $categories);
    }

    public function create()
    {
        $form = [
            'action' => route('dashboard.category.store'),
            'title' => 'Create Category',
            'method' => 'POST',
        ];
        return view('dashboard.categories.form')->with('form', $form);
    }

    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->validated());
        $category->update(['image' => $request->file('image')->store('categories', 'public')]);
        Toast::success('Category created successfully');
        return redirect()->back();
    }

    public function edit(Category $category)
    {
        $form = [
            'action' => route('dashboard.category.update', $category),
            'title' => 'Update Category',
            'method' => 'PUT',
        ];
        $default = [
            'name' => $category->name,
            'image' => asset('storage/'.$category->image),
        ];
        return view('dashboard.categories.form')->with(['form' => $form, 'default' => $default]);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        if ($request->hasFile('image')) {
            $category->update(['image' => $request->file('image')->store('categories', 'public')]);
        }
        Toast::success('Category updated successfully');
        return redirect()->back();
    }

    public function destroy(Category $category)
    {
        $category->delete();
        Toast::success('Category deleted successfully');
        return redirect()->back();
    }
}
