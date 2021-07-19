@extends('layouts.app')
@section('title','Pembelian')

@section('page', 'Add Pembelian')
@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>ADD PEMBELIAN</h4>
                </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="harga_beli">Harga Satuan (Rp.)</label>
                    <input type="numeric" class="form-control" placeholder="Harga barang satuan" />
                </div>
                <div class="form-group">
                    <label for="qty">Jumlah Barang</label>
                    <input type="numeric" class="form-control" placeholder="Jumlah barang yang dibeli" />
                </div>
                <div class="form-group">
                    <label for="jml_beli">Total Harga</label>
                    <input type="numeric" class="form-control" placholder="Total pembelian" />
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                <button class="btn btn-secondary" type="reset">Reset</button>
            </div>
        </div>
    </div>
</div>

@endsection