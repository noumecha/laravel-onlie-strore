@extends('layouts.app')
@section('title',$product_data['title'])
@section('subtitle',$product_data['subtitle'])
@section('content')
<div class="card mb-3">
    <div class="col-md-4">
        <img src="{{ asset('/images/products/'.$product_data["product"]["image"]) }}" alt="" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">
                {{ $product_data["product"]["name"]}} (XAF{{ $product_data["product"]["price"]}})
            </h5>
            <p class="card-text">
                {{ $product_data["product"]["description"]}}
            </p>
            <p class="card-text">
                <small class="text-muted">
                    Add to Cart
                </small>
            </p>
        </div>
    </div>
</div>
@endsection
