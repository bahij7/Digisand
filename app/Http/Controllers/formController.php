<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        $product->save();

        return redirect('/')->with('success', 'Product added successfully');
        
    }

    public function index()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }
}