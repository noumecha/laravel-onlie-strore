<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller {

    public function index(Request $request) {
        $total = 0;
        $productsInCart = [];

        $productsInSession = $request->session()->get('products');
        if($productsInSession) {
            $productsInCart = Product::findMany(array_keys($productsInSession));
            $total = Product::sumPricesByQuantities($productsInCart, $productsInSession);
        }

        $cart_data = [];
        $cart_data['title'] = 'Cart-Online Store';
        $cart_data['subtitle'] = 'Shopping Cart';
        $cart_data['total'] = $total;
        $cart_data['products'] = $productsInCart;

        return view('cart.index')->with('cart_data', $cart_data);
    }

    public function add(Request $request, $id) {
        $products = $request->session()->get('products');
        $products[$id] = $request->input('quantity');
        $request->session()->put('products', $products);

        return redirect()->route('cart.index');
    }

    public function delete(Request $request) {
        $request->session()->forget('products');
        return back();
    }

}
