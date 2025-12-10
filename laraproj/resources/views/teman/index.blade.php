@extends('layouts.app')

@section('judulpage','Data Teman') 

@section('konten')
<div class="container">
    
    <div class="konten">
        <h3>Daftar Teman</h3>
        <a href="{{ route('teman.create') }}" class="btn btn-primary btn-sm">Tambah Teman</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($dt as $t)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $t->nama }}</td>
                    <td>
                        <a href="{{ route('teman.edit',$t->id) }}" class="btn btn-warning btn-sm">Edit</a> 
                        <form method="POST" action="{{ route('teman.destroy',$t->id) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus Data?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</div>
@endsection