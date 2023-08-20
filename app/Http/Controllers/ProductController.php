<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
{
    $products = Product::all();
    return view('admin.products.index', compact('products'));
}

public function create()
{
    return view('admin.products.create');
}

public function store(Request $request)
{
    // Validation and storing logic
}

public function edit(Product $product)
{
    return view('admin.products.edit', compact('product'));
}

public function update(Request $request, Product $product)
{
    // Validation and updating logic
}

public function destroy(Product $product)
{
    $product->delete();
    return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully');
}
//
}
