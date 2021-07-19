@extends('layouts.app')
@section('title','User')
@section('heading','User')
@section('page', 'User')
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
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Muhammad Abdul Majid</td>
                            <td>Jepara</td>
                            <td>muhammadabdulmajid36@gmail.com</td>
                            <td>1</td>
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