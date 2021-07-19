@extends('layouts.app')
@section('title','Products | Tambah')
@section('content')
<div class="section-body">
    <div class="section-header">
        <h1>Products</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('product.index') }}">Product</a></div>
            <div class="breadcrumb-item active"><a>Tambah Product</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Product</h4>
                </div>
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="category"
                                    class="form-control selectric @error('name') is-invalid @enderror">
                                    @error('category')
                                    <div class="invalid-feedback p-2 shadow-sm rounded mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                            <option value="">--Select Category--</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Product</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <div class="invalid-feedback p-2 shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar Product</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                                id="formFileMultiple">
                            @error('image')
                            <div class="invalid-feedback shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Product</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror">
                            @error('price')
                            <div class="invalid-feedback shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi
                            Product</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea name="description"
                                class="form-control @error('description') is-invalid @enderror"></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <label class="custom-switch mt-2">
                            <input type="checkbox" checked name="status" class="custom-switch-input">
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">Product Tersedia!!</span>
                        </label>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tampikan</label>
                        <label class="custom-switch mt-2">
                            <input type="checkbox" checked name="show" class="custom-switch-input">
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">Product Ditampilkan!!</span>
                        </label>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <a href="{{ route('product.index') }}" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-primary">Publish</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection