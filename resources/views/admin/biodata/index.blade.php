@extends('layouts.mainadmin')

@section('content')
<div class="container">
    <h1 class="text-center fw-bold">BIODATA SISWA</h1>
    <a href="{{ route('admin.biodata.create') }}" class="btn btn-success btn-sm mt-5">Tambah Data <i class="bi bi-plus-square"></i></a>
    <div class="card mt-2">
        @if(session('Success'))
            <div class="alert alert-success">
                {{session('Success')}}
            </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <th class="text-center">No</th>
                        <th class="text-center">NIS</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Kelas</th>
                        <th class="text-center">Jurusan</th>
                        <th class="text-center">Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($biodata as $biodata)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $biodata->nis }}</td>
                                <td class="text-center">{{ $biodata->name }}</td>
                                <td class="text-center">{{ $biodata->class }}</td>
                                <td class="text-center">{{ $biodata->jurusan }}</td>
                                <td class="text-center">
                                    <form action="{{ route('admin.biodata.destroy', $biodata->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('admin.biodata.edit', $biodata->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
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
