<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        Product::validate($request);

        $newProduct = new Product();

        $newProduct->setName($request->input('name'));
        $newProduct->setDescription($request->input('description'));
        $newProduct->setPrice($request->input('price'));
        $newProduct->setImage("games.jpg");
        $newProduct->save();

        if($request->hasFile('image')) {
            $imageName = $newProduct->getId().".".$request->file('image')->getExtension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newProduct->setImage($imageName);
            $newProduct->save();
        }

        return back();
    }

    public function delete($id) {
        Product::destroy($id);
        return back();
    }

    public function edit($id) {
        $admin_data = [];

        $admin_data['title'] = 'Admin Page - Edit Product - Online Store';
        $admin_data['products'] = Product::findOrFail($id);

        return view('admin.product.edit')->with('admin_data', $admin_data);
    }

    public function update(Request $request, $id) {

        Product::validate($request);

        $product = Product::findOrFail($id);
        $product->setName($request->input('name'));
        $product->setDescription($request->input('description'));
        $product->setPrice($request->input('price'));

        if($request->hasFile('image')) {
            $imageName = $product->getId().".".$request->file('image')->getExtension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $product->setImage($imageName);
        }

        $product->save();
        return redirect()->route('admin.product.index');

    }

}
