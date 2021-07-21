@extends('layouts.app')
@section('title','Transaksi')
@section('heading','Transaksi')
@section('page', 'Transaksi')
@section('content')

<div class="section-body">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h4>Transaksi List</h4>
            <div class="card-header-action">
            <a href="{{ url('/transaksi/create') }}" class="btn btn-primary"><i></i>Add Transaksi</a>
            </div>
            
        </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-md" id="table-2">
                    <thead class="thead-light" >
                        <tr>
                            <th>No</th>
                            <th>Order ID</th>
                            <th>No. Invoice</th>
                            <th>Bukti Transaksi</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksis as $transaksi )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $transaksi->order_id }}</td>
                            <td>{{ $transaksi->no_invoice }}</td>
                            <td width="150px"><img src="{{ asset('storage/buktiTF/'.$transaksi->bukti_tf) }}" width="150px"
                                class="w-48 rounded-md"></td>
                            <td style="text-align: center">
                                <a href="#" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                <form action="#" method="post" onsubmit="return confirm('Yakin hapus data?')" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
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

@push('scripts')

@endpush

