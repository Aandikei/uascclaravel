@extends('layout.app')

@section('content')
<div class="container">
    <h3>Edit Mahasiswa</h3>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>NIM</label>
            <input type="number" name="nim" class="form-control"
                value="{{ old('nim', $mahasiswa->nim) }}">
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control"
                value="{{ old('nama', $mahasiswa->nama) }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control"
                value="{{ old('email', $mahasiswa->email) }}">
        </div>

        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jk" class="form-control">
                @foreach (\App\Enums\JenisKelamin::cases() as $jk)
                    <option value="{{ $jk->value }}"
                        @selected(old('jk', $mahasiswa->jk->value) == $jk->value)>
                        {{ $jk->label() }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control">{{ old('alamat', $mahasiswa->alamat) }}</textarea>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
