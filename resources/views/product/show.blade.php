@extends('layouts.app')
@section('title',$product_data['title'])
@section('subtitle',$product_data['subtitle'])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-6">
            <img src="{{ asset('/images/products/'.$product_data["product"]->getImage()) }}" alt="" width="640" height="420" class="img-fluid rounded-start">
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
                    <a class="btn btn-secondary btn-lg mt-3 text-white" href="#">
                        Add to Cart
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
