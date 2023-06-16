@extends('layouts.app');
@section('title',$product_data['title'])
@section('subtitle',$product_data['subtitle'])
@section('content')
<div class="row">
    <h2 class="title">Our Best Collection</h2>
    @foreach ($product_data['products'] as $product)
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
            <img src="{{ asset('/images/products/'.$product["image"]) }}" alt="" class="card-img-top img-card">
            <div class="card-body text-center">
                <a href="{{ route('product.show', ['id'=> $product["id"]]) }}" class="btn bg-primary text-white">
                    {{ $product["name"] }}
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
