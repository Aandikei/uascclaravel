@extends('layouts.admin')

@section('title', 'Data Inventory')

@section('content')
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">Data Inventory</h4>
                <a href="{{ route('inventory.create') }}" class="btn btn-primary">
                    + Tambah Inventory
                </a>
            </div>

            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Stok</th>
                        <th>Lokasi</th>
                        <th>Kondisi</th>
                        <th>Petugas</th>
                        <th width="120">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inventory as $inv)
                        <tr>
                            <td>{{ $inv->nama }}</td>
                            <td>{{ $inv->kode }}</td>
                            <td>{{ $inv->stok }}</td>
                            <td>{{ $inv->lokasi }}</td>
                            <td>{{ $inv->kondisi }}</td>
                            <td>{{ $inv->petugas }}</td>
                            <td class="d-flex gap-1">
                                <a href="{{ route('inventory.edit', $inv->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                <form method="POST" action="{{ route('inventory.destroy', $inv->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
