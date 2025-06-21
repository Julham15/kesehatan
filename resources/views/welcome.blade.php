<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obat - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">OBAT</a>
            <div>
                <a href="{{ route('login') }}" class="btn btn-primary me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
            </div>
        </div>
    </nav>
    <div class="container d-flex flex-column align-items-center justify-content-center" style="min-height: 80vh;">
        <div class="text-center">
            <h1 class="display-5 fw-bold text-primary mb-3">Selamat Datang</h1>
            <p class="lead text-secondary mb-4">
                Aplikasi manajemen kesehatan untuk pencatatan obat.<br>
                Silakan login atau daftar untuk mulai menggunakan aplikasi.
            </p>
    <footer class="text-center py-3 text-muted small bg-white">
        &copy; {{ date('Y') }} KesehatanApp. All rights reserved.
    </footer>
</body>
</html>