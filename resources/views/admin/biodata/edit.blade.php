@extends('layouts.mainadmin')

@section('content')
<div class="container">
    <h1 class="text-center fw-bold">BIODATA SISWA</h1>
    <a href="{{ route('admin.biodata.index') }}" class="btn btn-primary btn-sm mt-5"><i class="bi bi-box-arrow-left"></i> Kembali</i></a>
    <div class="card mt-2">
        <div class="card-body">
            <form action="{{ route('admin.biodata.update', $biodata->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="nis" value="{{ $biodata->nis }}" id="floatingInput" placeholder="NIS">
                    <label for="floatingInput">NIS</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" value="{{ $biodata->name }}" id="floatingInput" placeholder="Nama">
                    <label for="floatingInput">Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="class" value="{{ $biodata->class }}" id="floatingInput" placeholder="Kelas">
                    <label for="floatingInput">Kelas</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="jurusan" value="{{ $biodata->jurusan }}" id="floatingInput" placeholder="Jurusan">
                    <label for="floatingInput">Jurusan</label>
                </div>
                <button type="submit" class="btn  btn-success btn-md float-end">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
