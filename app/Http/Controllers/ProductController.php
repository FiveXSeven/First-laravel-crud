<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        // RECUPERATION DES PRODUITS

        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    public function create() {
        return view('product.create');
    }

    public function store(Request $request) {
        // RECUPERATION DES DONNEES

        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'description' => 'nullable',
            'price' => 'required|numeric',
        ]);

        $newProduct = Product::create($data);

        return redirect()->route('product.index');

    }

    public function edit(Product $id) {
        return view('product.edit', ['product' => $id]);
    }

    public function update(Product $id, Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'description' => 'nullable',
            'price' => 'required|numeric',
        ]);

        $id->update($data);

        return redirect()->route('product.index');

    }

    public function delete(Product $id) {
        $id->delete();
        
        return redirect()->route('product.index');

    }
}
