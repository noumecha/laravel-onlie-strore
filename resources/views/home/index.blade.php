@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/images/games.jpg') }}" class="rounded" height="325" width="400" alt="">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/images/safe.jpg') }}" class="rounded" height="325" width="400" alt="">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/images/space.jpg') }}" class="rounded" height="325" width="400" alt="">
    </div>
</div>
@endsection
