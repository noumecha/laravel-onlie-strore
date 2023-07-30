<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $admin_data = [];
        $admin_data['title'] = 'Admin Page - Products - Online Store';
        $admin_data['products'] = Product::all();

        return view('admin.product.index')->with('admin_data', $admin_data);
    }

    public function store(Request $request) {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "picture" => "required|numeric|gt:0",
            "image" => 'image'
        ]);

        $newProduct = new Product();

        $newProduct->setName($request->input('name'));
        $newProduct->setDescription($request->input('description'));
        $newProduct->setPrice($request->input('price'));
        $newProduct->setImage("games.jpg");
        $newProduct->save();

        return back();
    }
}
