<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body class="bg-danger">
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-5 fw-bold text-light">Daftar Obat</h1>
            <a href="{{ route('obat.create') }}" class="btn btn-success">
                <i class="bi bi-plus-lg"></i> Tambah Data
            </a>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <form action="{{ url('/obat') }}" method="GET" class="row g-3">
                    <div class="col-md-10">
                        <input type="text" name="search" class="form-control" 
                               placeholder="Cari nama Obat..." value="{{ request('search') }}">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-info w-100">
                            <i class="bi bi-search"></i> Cari
                        </button>
                    </div>
                </form>
            </div>
        </div>

        @if ($obatan->count() > 0)
            <div class="card shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Nama</th>
                                    <th>Stok</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th class="text-end"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($obatan as $data)
                                <tr>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->stok }}</td>
                                    <td><span class="badge bg-info">{{ $data->harga}}</span></td>
                                     <td>{{ $data->gambar }}</td>
                                    <td class="text-end">
                                        <div class="d-flex gap-2 justify-content-end">
                                            <a href="{{ route('obat.edit', $data->id) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <form action="{{ route('obat.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus?')">
                                                    <i class="bi bi-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @else
            <div class="card shadow-sm text-center py-5">
                <div class="card-body">
                    <i class="bi bi-search display-1 text-muted"></i>
                    <h3 class="mt-3">Data tidak ada</h3>
                    <p class="text-muted">Coba dengan kata kunci lain atau tambahkan data baru</p>
                    <a href="{{ route('obat.create') }}" class="btn btn-success mt-3">
                        <i class="bi bi-plus-lg"></i> Tambah Obat
                    </a>
                </div>
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>