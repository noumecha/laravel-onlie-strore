@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/images/games.jpg') }}" class="img-fluid rounded" alt="">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/images/safe.jpg') }}" class="img-fluid rounded" alt="">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/images/space.jpg') }}" class="img-fluid rounded" alt="">
    </div>
</div>
@endsection
