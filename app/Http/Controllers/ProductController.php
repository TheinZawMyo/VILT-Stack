<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProducts() 
    {
        $products = Product::all();

        return Inertia::render('Home', [
            'products' => $products
        ]);
    }

    public function create() 
    {
        return Inertia::render('ProductCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => "required|string|max:255",
            'price' => 'required',
            'quantity' => 'required'
        ]);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity
        ]);

        return redirect()->route('get#products')->with('success', 'Product created successfully');
    }



    public function edit(Product $product) 
    {
        return Inertia::render('ProductEdit', [
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product) 
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => "required|string|max:255",
            'price' => 'required',
            'quantity' => 'required'
        ]);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity
        ]);

        return redirect()->route('get#products')->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product) 
    {
        $product->delete();
        return redirect()->route('get#products')->with('success', 'Product deleted successfully');
    }

    

}

