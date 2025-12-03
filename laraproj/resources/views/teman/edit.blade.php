@extends('layouts.app')

@section('judulpage','Ubah Data Teman') 

@section('konten')
<div class="container">

    <h2>Ubah Data Teman</h2>

    <form action="{{ route('teman.update', $dt->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" value="{{ old('nama', $dt->nama ?? '' ) }}" name="nama" class="form-control" required>
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
