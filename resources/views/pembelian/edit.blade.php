@extends('layouts.app')
@section('title','Pembelian | Edit Data')
@section('content')

<div class="section-body">
    <div class="section-header">
        <h1>Pembelian</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('pembelian.index') }}">Pembelian</a></div>
            <div class="breadcrumb-item active"><a>Edit Data Pembelian</a></div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Data Pembelian</h4>
                </div>
                <form action="{{ route('pembelian.update',$pembelian->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Barang</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nama_barang" value="{{ $pembelian->nama_barang }}" class="form-control @error('nama_barang') is-invalid @enderror">
                                @error('nama_barang')
                                <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Satuan (Rp.)</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="numeric" name="harga_beli" value="{{ $pembelian->harga_beli }}" class="form-control @error('harga_beli') is-invalid @enderror">
                                @error('harga_beli')
                                <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah Barang</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="numeric" name="qty" value="{{ $pembelian->qty }}" class="form-control @error('qty') is-invalid @enderror">
                                @error('qty')
                                <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Total Harga</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="numeric" name="jml_beli" value="{{ $pembelian->jml_beli }}" class="form-control @error('jml_beli') is-invalid @enderror">
                                @error('jml_beli')
                                <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <a href="{{ route('pembelian.index') }}" class="btn btn-danger">Cancel</a>
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