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
}
