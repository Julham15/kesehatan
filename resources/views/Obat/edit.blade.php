@extends('layouts.master')
@section('obat')
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="display-5 fw-bold text-warning">Edit Data Obat</h1>
                        <a href="/obat"><i class="bi bi-arrow-left"></i></a>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('obat.update', $obatan->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="nama" value="{{ $obatan->nama }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="stok" class="form-label">Stok</label>
                                <input type="text" class="form-control" id="stok" name="stok" value="{{ $obatan->stok }}" required>
                            </div>
                             <div class="mb-3">
                                <label for="harga" class="form-label">harga</label>
                                <input type="text" class="form-control" id="harga" name="harga" value="{{ $obatan->harga }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $obatan->deskripsi }}" required>
                            </div>
                             <div class="mb-3">
                                <label class="from-label">Gambar Produk</label>
                                <input type="file" name="image" class="form-control"accept="image/*">
                                 @error('image')
                                <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                             @enderror
                            </div>
                            <button type="submit" class="btn btn-info w-100 py-2">
                                <i class="bi bi-save"></i> Simpan Perubahan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
        