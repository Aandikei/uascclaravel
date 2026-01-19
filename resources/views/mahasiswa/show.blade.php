@extends('layout.app')

@section('content')
<div class="container">
    <h3>Detail Mahasiswa</h3>

    <table class="table">
        <tr>
            <th>NIM</th>
            <td>{{ $mahasiswa->nim }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $mahasiswa->nama }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $mahasiswa->email }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $mahasiswa->jk->label() }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $mahasiswa->alamat }}</td>
        </tr>
    </table>

    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
