@extends('layouts.app')
@section('title','User | Data User')
@section('content')

<div class="section-body">
    @if (session('status'))
        <div class="alert">
            {{ session('status') }}
        </div>
    @endif
    
    <div class="card">
        <div class="card-header">
            <h4>Data User</h4>
            <div class="card-header-action">
                <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah User</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-md" id="table-2">
                    <thead class="thead-light">
                        <tr>
                            <th width="100px">No.</th>
                            <th width="200px" style="text-align: center">Nama</th>
                            <th width="100px" style="text-align: center">Level</th>
                            <th style="text-align: center">Alamat</th>
                            <th style="text-align: center">No HP</th>
                            <th style="text-align: center">Email</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $user)
                        <tr>
                            <td width="100px">{{ $loop->iteration }}</td>
                            <td width="200px" style="text-align: center">{{ $user->name }}</td>
                            <td width="100px" style="text-align: center">{{ $user->level }}</td>
                            <td width="500px">{{ $user->address }}</td>
                            <td width="200px" style="text-align: center">{{ $user->contact }}</td>
                            <td width="200px" style="text-align: center">{{ $user->email }}</td>
                            <td style="text-align: center">
                                <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                    <a href="{{ route ('user.edit' , $user->id) }}"
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

@endsection