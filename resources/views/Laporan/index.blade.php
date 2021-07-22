@extends('layouts.app')
@section('title','Laporan')
@section('content')

<div class="section-body">
    @if (session('status'))
        <div class="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h4>Laporan Laba Rugi</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-md" id="table-2">
                    <thead class="thead-light">
                        <tr>
                            <th width="100px">No.</th>
                            <th style="text-align: center">ID Penjualan</th>
                            <th style="text-align: center">ID Pembelian</th>
                            <th style="text-align: center">ID Diskon</th>
                            <th style="text-align: center">Jumlah Diskon</th>
                            <th style="text-align: center">Total Keuntungan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laporan as $laporan)
                        <tr>
                            <td width="100px">{{ $loop->iteration }}</td>
                            <td width="200px" style="text-align: center">{{ $laporan->jual_id }}</td>
                            <td width="200px" style="text-align: center">{{ $laporan->beli_id }}</td>
                            <td width="200px" style="text-align: center">{{ $laporan->diskon_id }}</td>
                            <td style="text-align: center">{{ $laporan->jml_jual_diskon }}</td>
                            <td width="200px" style="text-align: center">Rp.{{ $laporan->laba_rugi }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection