@extends('layout.app')

@section('content')
<div class="container">
    <h3>Edit Inventory</h3>

    <form action="{{ route('inventory.update', $inventory->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control"
                value="{{ old('nama', $inventory->nama) }}">
        </div>

        <div class="mb-3">
            <label>Kode</label>
            <input type="text" name="kode" class="form-control"
                value="{{ old('kode', $inventory->kode) }}">
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control"
                value="{{ old('stok', $inventory->stok) }}">
        </div>

        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control"
                value="{{ old('lokasi', $inventory->lokasi) }}">
        </div>

        <div class="mb-3">
            <label>Kondisi</label>
            <select name="kondisi" class="form-control">
                @foreach (\App\Enums\Kondisi::cases() as $k)
                    <option value="{{ $k->value }}"
                        @selected(old('kondisi', $inventory->kondisi->value) == $k->value)>
                        {{ $k->label() }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Petugas</label>
            <input type="text" name="petugas" class="form-control"
                value="{{ old('petugas', $inventory->petugas) }}">
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('inventory.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
