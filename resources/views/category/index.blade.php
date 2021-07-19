@extends('layouts.app')
@section('title','index | Category')
@section('content')
<div class="section-body">
    <div class="section-header">
        <h1>Category</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Category</a></div>
            <div class="breadcrumb-item"><a>Index</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Category List</h4>
                    <div class="card-header-action">
                        <a href="{{ route('category.create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0 ">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $categories )
                                <tr>
                                    <td width="200px">{{ $categories->name }}</td>
                                    <td width="500px">{{ $categories->description }}</td>
                                    <td style="text-align: center">
                                        
                                        <form action="{{ route('category.destroy',$categories->id) }}" method="POST">
                                            <a href="{{ route ('category.edit' , $categories->id) }}"
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