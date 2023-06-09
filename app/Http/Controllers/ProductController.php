<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static $products = [
        ["id"=>"1", "name"=>"High Camera", "description"=>"Pro photography tools", "image"=>"camera.png", "price"=>"500000"],
        ["id"=>"2", "name"=>"PSP Console", "description"=>"The last ship Konsole for gamers", "image"=>"Konsole.png", "price"=>"300000"],
        ["id"=>"3", "name"=>"Graphic Tablet", "description"=>"Pro Designer Graphic tools", "image"=>"graphics.png", "price"=>"250000"],
        ["id"=>"4", "name"=>"Dark Alien Laptop", "description"=>"Laptop for Hackers-Gamers pro", "image"=>"dark_pc.png", "price"=>"600000"],
        ["id"=>"5", "name"=>"Optic glaces", "description"=>"See the start en enjoy", "image"=>"optic_glaces.png", "price"=>"200000"],
        ["id"=>"6", "name"=>"IA Watch", "description"=>"Automate AI watch", "image"=>"ai_watch.png", "price"=>"100000"],
    ];

    public function index() {
        $products_data = [];
        $products_data['title'] = "Online Store - Products";
        $products_data['subtitle'] = "List of Products";
        $products_data['products'] = ProductController::$products;
        return view('product.index')->with('products_data', $products_data);
    }

    public function show($id) {
        $product_data = [];
        $product = ProductController::$products[$id-1];
        $product_data['title'] = "Online Store - ".$product['name'];
        $product_data['subtitle'] = "Product information - ".$product['name'];
        $product_data['product'] = $product;
        return view('product.show')->with('product_data', $product_data);
    }
}
