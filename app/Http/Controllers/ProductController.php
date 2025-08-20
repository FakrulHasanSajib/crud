<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Ensure you import the Product model

class ProductController extends Controller
{
    public function index()
    {
        function index()
        {
            // Logic to retrieve and display a list of products
            // For example, you might fetch products from the database and return a view
            $products = Product::all();
            return view('products.index', compact('products'));
        }
    }

    public function create()
    {
        // Logic to show the form for creating a new product
    }

    public function store(Request $request)
    {
          $data = $request->validate([
            'name' => ['required','string','max:255'],
            'description' => ['required','string'],
        ]);

        Product::create($data);
        return redirect()->route('products.index')->with('status', 'Product created.');
    }

    public function show($id)
    {
        // Logic to display a single product by its ID
    }

    public function edit($id)
    {
         return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
          $data = $request->validate([
            'name' => ['required','string','max:255'],
            'description' => ['required','string'],
        ]);

        $product = Product::findOrFail($id);
        $product->update($data);
        return redirect()->route('products.index')->with('status', 'Product updated.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('status', 'Product deleted.');
    }
    }
// This controller handles CRUD operations for products.
// It includes methods for listing products, showing a form to create a new product, storing a new product, showing a single product, editing a product, updating a product, and deleting a product
// Ensure you have the necessary views created for each method (e.g., index, create, edit, etc.)
// You may also need to adjust the routes in your web.php file to point to these methods correctly
// Make sure to import the Product model at the top of this file
// You can also add validation rules for the product data in the store and update methods                           