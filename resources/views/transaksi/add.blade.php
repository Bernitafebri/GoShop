@extends('layouts.app')
@section('title','Transaksi')

@section('page', 'Add Transaksi')
@section('content')

<div class="section-body">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Transaksi</h4>
                </div>
                <form action="{{ url('/transaksi') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select Order ID</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="order_id"
                                        class="form-control selectric @error('name') is-invalid @enderror">
                                        @error('order_id')
                                        <div class="invalid-feedback p-2 shadow-sm rounded mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <option value="">--Pilih--</option>
                                        @foreach ($orders as $data)
                                        <option value="{{ $data->id }}">{{$data->id}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No. Invoice</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="number" name="no_invoice" class="form-control @error('no_invoice') is-invalid @enderror">
                                    @error('no_invoice')
                                    <div class="invalid-feedback p-2 shadow-sm rounded mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bukti Transfer</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="file" name="bukti_tf" class="form-control @error('bukti_tf') is-invalid @enderror"
                                id="formFileMultiple">
                                @error('bukti_tf')
                                <div class="invalid-feedback shadow-sm rounded mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7 text-md-right">
                                <a href="{{ url('/transaksi') }}" class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>

@endsection