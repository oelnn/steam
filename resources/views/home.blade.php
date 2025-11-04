<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galeri Wisata Dunia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: url('{{ asset('images/bckground.webp') }}') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }

        .card img {
            height: 200px;
            object-fit: cover;
        }

        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.7);
        }

        footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
        }
    </style>
</head>

<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <a class="navbar-brand" href="{{ url('/about') }}">About</a>
    </div>
</nav>


    <!-- MAIN CONTENT -->
    <div class="container my-5">
        <h2 class="text-center mb-4">
            Halaman ini dibuat oleh 2301010138 - L. M. ARANTA THIAR ELKANTA RIZKY ILLAHI
        </h2>

        <div class="row justify-content-center">
            @foreach($destinasi as $item)
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white shadow">
                    <img src="{{ asset('images/' . $item['gambar']) }}" class="card-img-top" alt="{{ $item['nama'] }}">
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
