@extends('layouts.master')

@section('obat')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="display-5 fw-bold text-primary">Detail Obat</h1>
    </div>

    <div class="card shadow-sm mx-auto" style="max-width: 30rem;">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">{{ $i->nama }}</h5>
        </div>

        <div class="card-body bg-light">
            <div class="text-center mb-3">
                @if ($i->image)
                    <img src="{{ asset('storage/'.$i->image) }}" 
                         alt="{{ $i->image }}" 
                         class="img-fluid rounded" 
                         style="max-height: 200px; object-fit: cover;">
                @else
                    <p class="text-danger">GAMBAR TIDAK ADA!</p>
                @endif
            </div>

            <ul class="list-group list-group-flush">
                 <li class="list-group-item"><strong>Stok:</strong> {{ $i->stok }}</li>
                <li class="list-group-item"><strong>Harga:</strong> Rp {{ number_format($i->harga, 0, ',', '.') }}</li>
                <li class="list-group-item"><strong>Deskripsi:</strong> {{ $i->deskripsi}}</li>
               
            </ul>
        </div>

        <div class="card-footer text-end ">
            <a href="{{ url('/obat') }}" class="btn btn-danger">
                <i class="bi bi-arrow-left-circle"></i> Kembali
            </a>
        </div>
    </div>
</div>
@endsection
