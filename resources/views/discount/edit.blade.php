@extends('layouts.app')
@section('title','Discount')

@section('page', 'Edit Discount')
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
                    <h4>EDIT DISCOUNT</h4>
                </div>
                <form action="{{ url('/discount/'.$discount->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select Product</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="product_id" class="form-control selectric">
                                        <option value="">--Pilih--</option>
                                        @foreach ($products as $data)
                                        <option value="{{ $data->id }}"
                                        {{(($discount->product_id==$data->id )? 'selected':'')}}>
                                        {{ $data->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Value (1-100)</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="number" name="value" class="form-control" value="{{ $discount->value }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7 text-md-right">
                                <a href="{{ url('/discount') }}" class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>

@endsection