@extends('layout.app')

@section('content')
<div class="container">
    <h3>Tambah Inventory</h3>

    <form action="{{ route('inventory.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
            @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Kode</label>
            <input type="text" name="kode" class="form-control" value="{{ old('kode') }}">
            @error('kode') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="{{ old('stok') }}">
            @error('stok') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control" value="{{ old('lokasi') }}">
            @error('lokasi') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Kondisi</label>
            <select name="kondisi" class="form-control">
                <option value="">-- Pilih --</option>
                @foreach (\App\Enums\Kondisi::cases() as $k)
                    <option value="{{ $k->value }}" @selected(old('kondisi') == $k->value)>
                        {{ $k->label() }}
                    </option>
                @endforeach
            </select>
            @error('kondisi') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Petugas</label>
            <input type="text" name="petugas" class="form-control" value="{{ old('petugas') }}">
            @error('petugas') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('inventory.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
