@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Edit Promo</h3>

    <form action="{{ route('promo.update', $promo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Promo</label>
            <input type="text" name="nama_promo" value="{{ $promo->nama_promo }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $promo->deskripsi }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Tanggal Mulai</label>
                <input type="date" name="tanggal_mulai" value="{{ $promo->tanggal_mulai }}" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Tanggal Berakhir</label>
                <input type="date" name="tanggal_berakhir" value="{{ $promo->tanggal_berakhir }}" class="form-control" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('promo.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
