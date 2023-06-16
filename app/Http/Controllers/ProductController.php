<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static $products = [
        ["id"=>1, "name"=>"High Camera", "description"=>"Pro photography tools", "image"=>"camera.jpg", "price"=>"500000"],
        ["id"=>2, "name"=>"PSP Console", "description"=>"The last ship Konsole for gamers", "image"=>"Konsole.jpg", "price"=>"300000"],
        ["id"=>3, "name"=>"Graphic Tablet", "description"=>"Pro Designer Graphic tools", "image"=>"graphics.jpg", "price"=>"250000"],
        ["id"=>4, "name"=>"Dark Alien Laptop", "description"=>"Laptop for Hackers-Gamers pro", "image"=>"dark_pc.jpg", "price"=>"600000"],
        ["id"=>5, "name"=>"High Tech glasses", "description"=>"See the start en enjoy", "image"=>"optic_glasses.jpg", "price"=>"200000"],
        ["id"=>6, "name"=>"IA Watch", "description"=>"Automate AI watch", "image"=>"ai_watch.jpg", "price"=>"100000"],
        ["id"=>7, "name"=>"Spy Drone", "description"=>"Special spy drone", "image"=>"spy_drone.jpg", "price"=>"100000"],
        ["id"=>8, "name"=>"Futurist phone", "description"=>"Futurist phone for enjoying tech", "image"=>"phone.jpg", "price"=>"100000"],
    ];

    public function index()
    {
        $product_data = [];
        $product_data['title'] = "Online Store - Products";
        $product_data['subtitle'] = "List of Products";
        $product_data['products'] = ProductController::$products;
        return view('product.index')->with('product_data', $product_data);
    }

    public function show($id)
    {
        $product_data = [];
        $product = ProductController::$products[$id-1];
        $product_data['title'] = "Online Store - ".$product['name'];
        $product_data['subtitle'] = "Product information - ".$product['name'];
        $product_data['product'] = $product;
        return view('product.show')->with('product_data', $product_data);
    }
}
