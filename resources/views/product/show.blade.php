@extends('layouts.app')
@section('title',$product_data['title'])
@section('subtitle',$product_data['subtitle'])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-6">
            <img src="{{ asset('/storage/'.$product_data["product"]->getImage()) }}" alt="" width="640" height="420" class="img-fluid rounded-start">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h4 class="card-title">
                    {{ $product_data["product"]->getName()}} <b>(XAF {{ $product_data["product"]->getPrice()}})</b>
                </h4>
                <div class="card-text">
                    {{ $product_data["product"]->getDescription()}}
                </div>
                <div class="card-text">
                    <form action="{{ route('cart.add',['id'=>$product_data['product']->getId()]) }}" method="POST">
                        <div class="row">
                            @csrf
                            <div class="col-auto">
                                <div class="input-group col-auto">
                                    <div class="input-group-text">
                                        Quantity
                                    </div>
                                    <input type="number" name="quantity" min="1" max="10" class="form-control quantity-input" value="1">
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn bg-primary text-white">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
