<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galeri Wisata Dunia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="nav-left">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
        </div>
        <div class="navbar-center">
            2301010138 - L. M. ARANTA THIAR ELKANTA RIZKY ILLAHI (GENAP)
        </div>

        <div class="navbar-right">
            2301010097 - ARTHUR EMANUEL DEKKO (GANJIL)
        </div>
    </nav>
    </nav>


    <!-- MAIN CONTENT -->
    <div class="container my-5">
        <h2 class="text-center mb-4">
            Halaman ini dibuat oleh 2301010138 - L. M. ARANTA THIAR ELKANTA RIZKY ILLAHI
        </h2>

        <div class="row justify-content-center">
            @foreach ($destinasi as $item)
                <div class="col-md-4 mb-4">
                    <div class="card bg-dark text-white shadow">
                        <img src="{{ asset('images/' . $item['gambar']) }}" class="card-img-top"
                            alt="{{ $item['nama'] }}">
                        <div class="card-body text-center">
                            <h5>{{ $item['nama'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="text-center py-3 mt-5">
        © 2025 | Halaman dibuat oleh 2301010138 - L. M. ARANTA THIAR ELKANTA RIZKY ILLAHI
    </footer>
</body>

</html>
<!-- tespush -->
