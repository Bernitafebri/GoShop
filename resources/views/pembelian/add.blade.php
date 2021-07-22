@extends('layouts.app')
@section('title','Pembelian | Tambah Data')
@section('content')

<div class="section-body">
    <div class="section-header">
        <h1>Pembelian</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('pembelian.index') }}">Pembelian</a></div>
            <div class="breadcrumb-item active"><a>Tambah Data Pembelian</a></div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Data Pembelian</h4>
                </div>
                <form action="{{ route('pembelian.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Barang</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="nama_barang" placeholder="Harga barang satuan" class="form-control @error('nama_barang') is-invalid @enderror">
                            @error('nama_barang')
                            <div class="invalid-feedback p-2 shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Satuan (Rp.)</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="numeric" name="harga_beli" placeholder="Harga barang satuan" class="form-control @error('harga_beli') is-invalid @enderror">
                            @error('harga_beli')
                            <div class="invalid-feedback p-2 shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah Barang</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="numeric" name="qty" placeholder="Jumlah barang yang dibeli" class="form-control @error('qty') is-invalid @enderror">
                            @error('qty')
                            <div class="invalid-feedback p-2 shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Total Harga</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="numeric" name="jml_beli" placeholder="Harga total pembelian" class="form-control @error('jml_beli') is-invalid @enderror">
                            @error('jml_beli')
                            <div class="invalid-feedback p-2 shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <a href="{{ route('pembelian.index') }}" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection