<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LaporBanjir BPBD')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('form') }}">LaporBanjir</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('form') }}">Form Pelaporan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('daftar') }}">Daftar Laporan</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container min-vh-100">
        @yield('content')
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <small>&copy; 2026 BPBD Kabupaten Bandung</small>
    </footer>
</body>
</html>

