<?php

namespace App\Http\Controllers;

use App\Models\Product; // <-- 1. PASTIKAN BARIS INI ADA
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = Product::all(); // <-- 2. PASTIKAN MENGGUNAKAN Product::all()
        
        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id); // <-- 3. PASTIKAN MENGGUNAKAN FindOrFail
        $viewData["title"] = $product->getName()." - Online Store";
        $viewData["subtitle"] =  $product->getName()." - Product information";
        $viewData["product"] = $product;
        
        return view('product.show')->with("viewData", $viewData);
    }
}