@extends('layouts.admin')
@section('tile', $admin_data['title'])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Create Products
        </div>
        <div class="card-body">
            @if($errors->any())
            <ul class="alert alert-danger list-unstyled">
                @foreach($errors->all() as $e)
                    <li>-{{ $e }} </li>
                @endforeach
            </ul>
            @endif
            <form method="POST" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="name" class="col-lg-2 col-md-6 col-sm-12 col-form-label">
                                Name :
                            </label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="price" class="col-lg-2 col-md-6 col-sm-12 col-form-label">
                                Price :
                            </label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input type="number" class="form-control" name="price" value="{{ old('price') }}">
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
                    <textarea name="description" class="form-control">
                        {{ old('description') }}
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
                <!-- /div -->
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Manage Products
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admin_data['products'] as $product)
                        <tr>
                            <td>{{ $product->getId() }}</td>
                            <td>{{ $product->getName() }}</td>
                            <td>
                                <div class="btn btn-primary">
                                    <a class="btn btn-primary" href="{{ route('admin.product.edit', ['id' => $product->getId()]) }}">
                                        <i class="bi-pencil"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('admin.product.delete', $product->getId()) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
