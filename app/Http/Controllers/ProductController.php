<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $product_data = [];
        $product_data['title'] = "Online Store - Products";
        $product_data['subtitle'] = "List of Products";
        $product_data['products'] = Product::all();
        return view('product.index')->with('product_data', $product_data);
    }

    public function show($id)
    {
        $product_data = [];
        //$product = ProductController::$products[$id-1];
        $product = Product::findOrFail($id);
        $product_data['title'] = "Online Store - ".$product['name'];
        $product_data['subtitle'] = "Product information - ".$product['name'];
        $product_data['product'] = $product;
        return view('product.show')->with('product_data', $product_data);
    }
}
