@extends('layouts.app')
@section('Products | Tambah', 'title')
@section('content')
<div class="section-body">
    <div class="section-header">
        <h1>Products</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Products</a></div>
            <div class="breadcrumb-item active"><a href="#">Index</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Products List</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0 ">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Show</th>
                                    <th>Description</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>hello</td>
                                    <td>hello</td>
                                    <td>hello</td>
                                    <td>hello</td>
                                    <td>hello</td>
                                    <td width="300px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure ut ipsam alias, provident ipsa accusamus.</td>
                                    <td style="text-align: center">
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                            data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                            data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection