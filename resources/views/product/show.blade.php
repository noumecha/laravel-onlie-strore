@extends('layouts.app')
@section('title',$product_data['title'])
@section('subtitle',$product_data['subtitle'])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-6">
            <img src="{{ asset('/images/products/'.$product_data["product"]["image"]) }}" alt="" class="img-fluid rounded-start">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h4 class="card-title">
                    {{ $product_data["product"]["name"]}} (XAF{{ $product_data["product"]["price"]}})
                </h4>
                <div class="card-text">
                    {{ $product_data["product"]["description"]}}
                </div>
                <div class="card-text">
                    <small class="text-muted">
                        Add to Cart
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
