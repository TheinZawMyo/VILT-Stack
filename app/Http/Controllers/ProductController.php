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
            'price' => 'requried',
            'qty' => 'required'
        ]);

        
    }
}
