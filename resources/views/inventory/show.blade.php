@extends('layout.app')

@section('content')
<div class="container">
    <h3>Detail Inventory</h3>

    <table class="table">
        <tr>
            <th>Nama</th>
            <td>{{ $inventory->nama }}</td>
        </tr>
        <tr>
            <th>Kode</th>
            <td>{{ $inventory->kode }}</td>
        </tr>
        <tr>
            <th>Stok</th>
            <td>{{ $inventory->stok }}</td>
        </tr>
        <tr>
            <th>Lokasi</th>
            <td>{{ $inventory->lokasi }}</td>
        </tr>
        <tr>
            <th>Kondisi</th>
            <td>{{ $inventory->k->label() }}</td>
        </tr>
        <tr>
            <th>Petugas</th>
            <td>{{ $inventory->petugas }}</td>
        </tr>
    </table>

    <a href="{{ route('inventory.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
