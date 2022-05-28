@extends('sb-admin/app')
@section('title', 'Penilaian')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Penilaian</h1>

    <form action="/penilaian" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
            @error('nama')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="laporan">laporan</label>
            <input type="text" class="form-control" id="laporan" name="laporan">
            @error('laporan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="aplikasi">aplikasi</label>
            <input type="text" class="form-control" id="aplikasi" name="aplikasi">
            @error('aplikasi')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="presentasi">presentasi</label>
            <input type="text" class="form-control" id="presentasi" name="presentasi">
            @error('presentasi')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
        <a href="/jadwal" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
@endsection
