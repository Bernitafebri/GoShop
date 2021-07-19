@extends('layouts.app')
@section('title','index | products')
@section('content')
<div class="section-body">
    <div class="section-header">
        <h1>Products</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Products</a></div>
            <div class="breadcrumb-item"><a>Index</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Products List</h4>
                    <div class="card-header-action">
                        <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0 ">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Show</th>
                                    <th>Description</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product )
                                <tr>
                                    <td width="150px">{{ $product->name }}</td>
                                    <td width="200px"><img src="{{ asset('storage/products/'.$product->image) }}" width="200px"
                                            class="w-48 rounded-md"></td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->status }}</td>
                                    <td>{{ $product->show }}</td>
                                    <td width="200px">{{ $product->description }}</td>
                                    <td style="text-align: center">
                                        
                                        <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                                            <a href="{{ route ('product.edit' , $product->id) }}"
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
    </div>
</div>
@endsection