@extends('layouts.app')
@section('Products | Tambah', 'title')
@section('content')
< class="section-body">
    <div class="section-header">
        <h1>Category</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('category.index') }}">Category</a></div>
            <div class="breadcrumb-item active"><a>Tambah Category</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Product</h4>
                </div>
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Category</label>
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
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi
                            Product</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea name="description"
                                class="form-control @error('description') is-invalid @enderror"></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <a href="{{ route('product.index') }}" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-primary">Publish</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
@endsection