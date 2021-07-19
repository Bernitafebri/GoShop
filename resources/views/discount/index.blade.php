@extends('layouts.app')
@section('title','Discount')
@section('heading','Discount')
@section('page', 'Discount')
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
                            <th scope="col">Name Product</th>
                            <th scope="col">Value</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <a href="#" class="btn btn-icon btn-warning"><i class="far fa-edit"></i></a>
                                <a href="#" class="btn btn-icon btn-danger"><i class="far fa-trash-alt"></i></a>
                            </td>
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