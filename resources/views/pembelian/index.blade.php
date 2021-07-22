@extends('layouts.app')
@section('title','Pembelian | Data Pembelian')
@section('content')

<div class="section-body">
    @if (session('status'))
        <div class="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h4>Data Pembelian</h4>
            <div class="card-header-action">
                <a href="{{ route('pembelian.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-md" id="table-2">
                    <thead class="thead-light" >
                        <tr>
                            <th width="100px">No.</th>
                            <th width="200px" style="text-align: center">Nama Barang</th>
                            <th style="text-align: center">Harga Satuan</th>
                            <th style="text-align: center">Jumlah Barang</th>
                            <th style="text-align: center">Total Harga</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembelian as $pembelian)
                        <tr>
                            <td width="100px">{{ $loop->iteration }}</td>
                            <td width="200px" style="text-align: center">{{ $pembelian->nama_barang }}</td>
                            <td width="200px" style="text-align: right">Rp.{{ $pembelian->harga_beli }}</td>
                            <td style="text-align: center">{{ $pembelian->qty }}</td>
                            <td width="200px" style="text-align: right">Rp.{{ $pembelian->jml_beli }}</td>
                            <td style="text-align: center">
                                <form action="{{ route('pembelian.destroy',$pembelian->id) }}" method="POST">
                                    <a href="{{ route ('pembelian.edit' , $pembelian->id) }}"
                                        class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                        title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        class="btn btn-danger btn-action mr-1"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" ><i title="Hapus" class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection