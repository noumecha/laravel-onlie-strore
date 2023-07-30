@extends('layouts.admin')
@section('title', $admin_data['title'])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Edit Product
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $e)
            <li>- {{ $e }}</li>
            @endforeach
        </ul>
        @endif

        <form action="{{ route('admin.product.update',['id'=>$admin_data['products']->getId()]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="name" class="col-lg-2 col-md-6 col-sm-12 col-form-label">
                            Name :
                        </label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input type="text" name="name" value="{{$admin_data['products']->getName()}}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label for="price" class="col-lg-2 col-md-6 col-sm-12 col-form-label">
                            Price :
                        </label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input type="number" name="price" value="{{$admin_data['products']->getPrice()}}" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="image" class="col-lg-2 col-md-6 col-sm-12 col-form-label">
                            Image :
                        </label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    &nbsp;
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">
                    Description :
                </label>
                <textarea name="description" class="form-control" rows="3">
                    {{ $admin_data['products']->getDescription() }}
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">
                Edit
            </button>
        </form>
    </div>
</div>
@endsection
