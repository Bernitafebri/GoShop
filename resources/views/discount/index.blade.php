@extends('layouts.app')
@section('title','Discount')
@section('heading','Discount')
@section('page', 'Discount')
@section('content')

<div class="section-body">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h4>Discount List</h4>
            <div class="card-header-action">
            <a href="{{ url('/discount/create') }}" class="btn btn-primary"><i></i>Add Discount</a>
            </div>
            
        </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-md" id="table-2">
                    <thead class="thead-light" >
                        <tr>
                            <th>No</th>
                            <th>Name Product</th>
                            <th>Value (%) </th>
                            <th style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($discounts as $data)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $data->product->name}}</td>
                            <td>{{ $data->value}}</td>
                            <td style="text-align: center">
                                <a href="{{ url('/discount/'. $data->id .'/edit') }}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                <form action="{{ url('/discount/'.$data->id ) }}" method="post" onsubmit="return confirm('Yakin hapus data?')" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>

                                <!-- <form action="{{ url('/discount/'.$data->id ) }}" method="post"   class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" id="btn-hapus">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form> -->

                                
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        <!-- <div class="card-footer bg-whitesmoke">
        This is card footer
        </div> -->
    </div>
</div>

@endsection

@push('scripts')
{{-- Sweet Alert Hapus --}}
<script>
    // Swal.fire('Any fool can use a computer')
    $(document).on('click', '#btn-hapus', function(e){
        e.preventDefault();
        var link = $(this).attr('action');
        Swal.fire({
            title: 'Apakah Anda Yakin?',
            text: "Data akan dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#00a65a',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = link;
            }
        })
    })
</script>
@endpush

