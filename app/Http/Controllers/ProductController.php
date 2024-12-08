<?php

namespace App\Http\Controllers;

use App\Models\Product; // Import the Product model
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display all products
    public function index()
    {
        $products = Product::all(); // Get all products
        return view('products', compact('products')); // Pass products to the view
    }

    // Show the form for creating a new product
    public function create()
    {
        return view('create');
    }

    // Store a newly created product in storage
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'nullable|numeric',
        ]);

        // Create a new product using the validated data
        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    // Show the form for editing the specified product
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit', compact('product'));
    }

    // Update the specified product in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'nullable|numeric',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // Remove the specified product from storage
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
