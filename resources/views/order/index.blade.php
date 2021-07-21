@extends('layouts.app')
@section('title','Order')
@section('heading','Order')
@section('page', 'Order')
@section('content')

<div class="section-body">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h4>Order List</h4>
            <div class="card-header-action">
            <a href="#" class="btn btn-primary"><i></i>Add Order</a>
            </div>
            
        </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-md" id="table-2">
                    <thead class="thead-light" >
                        <tr>
                            <th>No</th>
                            <th>Name User</th>
                            <th>Nama Product</th>
                            <th>Jumlah Product</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Desc</th>
                            <th>Image</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->product->name }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->jml_harga }}</td>
                            <td>{{ $order->status }}</td>
                            <td>{{ $order->desc_order }}</td>
                            <td width="100px"><img src="{{ asset('storage/products/'.$order->product->image) }}" width="100px"
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

