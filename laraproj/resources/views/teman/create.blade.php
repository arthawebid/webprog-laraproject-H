@extends('layouts.app')

@section('judulpage','Tambah Data Teman') 

@section('konten')
<div class="container">

    <h2>Tambah Data Teman</h2>

    <form action="{{ route('teman.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="kota" class="form-label">Kota</label>
            <input type="text" name="kota" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="wa" class="form-label">No. WA</label>
            <input type="text" name="wa" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('teman.index') }}" class="btn btn-secondary">Kembali</a>

    </form>

</div>
@endsection
