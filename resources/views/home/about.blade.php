@extends('layouts.app')
@section('title', $about_data['title'])
@section('subtitle', $about_data['subtitle'])
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 ms-auto">
            <p class="lead">
                {{ $about_data['description'] }}
            </p>
        </div>
        <div class="col-lg-4 ms-auto">
            <p class="lead">
                {{ $about_data['author'] }}
            </p>
        </div>
    </div>
</div>
@endsection
