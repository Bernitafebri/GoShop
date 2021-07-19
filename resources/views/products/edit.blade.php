@extends('layouts.app')
@section('title','Products | Edit')
@section('content')
<div class="section-body">
    <div class="section-header">
        <h1>Products</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('product.index') }}">Product</a></div>
            <div class="breadcrumb-item active"><a>Edit Product</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Product</h4>
                </div>
                <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="gambar">
                            <center>
                                <img src="{{ asset('storage/products/'.$product->image) }}" width="350px">
                            </center>
                        </div>
                        <div class="form-group row my-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="category" class="form-control selectric">
                                    <option value="">--Select Category--</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{(($product->categories_id==$category->id)? 'selected':'')}}>
                                        {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Product</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                                @error('name')
                                <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar Product</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="file" name="image" class="form-control" value="{{ $product->image }}">
                                @error('image')
                                <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Product</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                                @error('price')
                                <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi
                                Product</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                            <label class="custom-switch mt-2">
                                <input type="checkbox" checked name="status" class="custom-switch-input"
                                    {{ $product->status == 'ready' ? 'checked' : '' }}>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Product Tersedia!!</span>
                            </label>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tampikan</label>
                            <label class="custom-switch mt-2">
                                <input type="checkbox" checked name="show" class="custom-switch-input"
                                    {{ $product->show == 'ya' ? 'checked' : '' }}>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Product Ditampilkan!!</span>
                            </label>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <a href="{{ route('product.index') }}" class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection