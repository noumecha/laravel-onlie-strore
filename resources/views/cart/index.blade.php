@extends('layouts.app')
@section('title', $cart_data['title'])
@section('subtitle', $cart_data['subtitle'])
@section('content')
<div class="card">
    <div class="card-header">
        Product in Cart
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart_data['products'] as $product)
                <tr>
                    <td>{{ $product->getId() }}</td>
                    <td>{{ $product->getName() }}</td>
                    <td>{{ $product->getPrice() }} </td>
                    <td>{{ session('products')[$product->getId()] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="text-end">
                <a href="" class="btn btn-outline-secondary mb-2">
                    <b>Total to pay</b> XAF{{ $cart_data['total'] }}
                </a>
                <a href="#" class="btn text-white mb-2 btn-primary">
                    Purchase
                </a>
                <a href="{{ route('cart.delete') }}">
                    <button class="btn btn-danger mb-2">
                        Remove all products from cart
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
