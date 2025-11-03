@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Daftar Promo & Diskon</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('promo.create') }}" class="btn btn-primary mb-3">+ Tambah Promo</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Promo</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Berakhir</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($promos as $promo)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $promo->nama_promo }}</td>
                    <td>{{ $promo->tanggal_mulai }}</td>
                    <td>{{ $promo->tanggal_berakhir }}</td>
                    <td>{{ $promo->status ? 'Aktif' : 'Nonaktif' }}</td>
                    <td>
                        <a href="{{ route('promo.edit', $promo->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('promo.destroy', $promo->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus promo ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
