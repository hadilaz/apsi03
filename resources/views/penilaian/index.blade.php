@extends('sb-admin/app')
@section('title', 'penilaian')

@section('content')
    {{-- flashdata --}}
    {!! session('sukses') !!}

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Penilaian</h1>

    <a href="/penilaian/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah</a>

    {{-- table --}}
    <table class="table mt-4 table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Laporan</th>
                <th scope="col">Aplikasi</th>
                <th scope="col">Persentasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->id_username }}</td>
                    <td>{{ $row->laporan }}</td>
                    <td>{{ $row->aplikasi }}</td>
                    <td>{{ $role->presentasi }}</td>
                    <td width="20%">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <form action="rekaptulasi/{{ $row->id }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm"><i
                                        class="fas fa-trash"></i>Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection