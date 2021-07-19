@extends('layouts.app')
@section('title','Laporan')
@section('heading','Laporan')
@section('page', 'Laporan')
@section('content')

<div class="section-body">
    <!-- <h2 class="section-title">This is Example Page</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p> -->
    <div class="card">
        <div class="card-header">
            <a href="#" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Add Discount</a>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-md">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Penjualan</th>
                            <th scope="col">ID Pembelian</th>
                            <th scope="col">ID Diskon</th>
                            <th scope="col">Jumlah Diskon</th>
                            <th scope="col">Total Keuntungan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>J1</td>
                            <td>B2</td>
                            <td>D12</td>
                            <td>20.000</td>
                            <td>50.000</td>
                        </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        <div class="card-footer bg-whitesmoke">
        This is card footer
        </div>
    </div>
</div>

@endsection