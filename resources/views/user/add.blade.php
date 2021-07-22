@extends('layouts.app')
@section('title','User | Tambah User')
@section('content')

<div class="section-body">
    <div class="section-header">
        <h1>User</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('user.index') }}">User</a></div>
            <div class="breadcrumb-item active"><a>Tambah User</a></div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah User</h4>
                </div>
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lengkap</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="name" placeholder="Isikan nama lengkap anda" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <div class="invalid-feedback p-2 shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Level User</label>
                        <div class="col-sm-12 col-md-7">
                            <select name="level" class="form-control selectric @error('level') is-invalid @enderror">
                            @error('level')
                            <div class="invalid-feedback p-2 shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                            <option value="" disabled selected>Pilih Level User</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                        <div class="col-sm-12 col-md-7">
                            <input id="email" type="email" name="email" placeholder="Isikan email anda" autocomplete="new-email" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <div class="invalid-feedback p-2 shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Konfirmasi Email</label>
                        <div class="col-sm-12 col-md-7">
                            <input id="email-confirm" type="email" name="email_confirmation" placeholder="Masukkan email anda kembali" autocomplete="new-email" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <div class="invalid-feedback p-2 shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                        <div class="col-sm-12 col-md-7">
                            <input id="password" type="password" name="password" placeholder="Minimal 8 karakter" autocomplete="new-password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                            <div class="invalid-feedback p-2 shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Konfirmasi Password</label>
                        <div class="col-sm-12 col-md-7">
                            <input id="password-confirm" type="password" name="password_confirmation" placeholder="Masukkan password anda kembali" autocomplete="new-password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                            <div class="invalid-feedback p-2 shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No HP</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="numeric" name="contact" placeholder="Isikan hanya angka" class="form-control @error('contact') is-invalid @enderror">
                            @error('contact')
                            <div class="invalid-feedback p-2 shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea name="address" class="form-control @error('address') is-invalid @enderror"></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <a href="{{ route('user.index') }}" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>        
        </div>
    </div>
</div>

@endsection