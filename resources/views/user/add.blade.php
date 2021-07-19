@extends('layouts.app')
@section('title','User')

@section('page', 'Add User')
@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>ADD USER</h4>
                </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="full_name">Nama Lengkap</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" class="form-control" placeholder="Masukan alamat lengkap" />
                </div>
                <div class="form-group">
                    <label for="contact">No. HP</label>
                    <input type="numeric" class="form-control" placeholder="Masukan nomor WA" />
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" placholder="Masukan email" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placholder="Masukan password" />
                </div>
                <div class="form-group">
                    <label for="confpassword">Konfirmasi Password</label>
                    <input type="password" class="form-control" placholder="Masukan password" />
                </div>
                <div class="form-group">
                    <label for="level">Level User</label>
                    <select class="form-control">
                        <option>Level 1</option>
                        <option>Level 2</option>
                        <option>Level 3</option>
                    </select>
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                <button class="btn btn-secondary" type="reset">Reset</button>
            </div>
        </div>
    </div>
</div>

@endsection