<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galeri Wisata Dunia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('{{ asset('images/bckground.webp') }}') center/cover no-repeat fixed;
            min-height: 100vh;
            color: white;
            position: relative;
        }

        /* Overlay gradasi transparan di atas background */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(52, 152, 219, 0.7), rgba(41, 128, 185, 0.8));
            z-index: 1;
        }

        .container {
            position: relative;
            z-index: 2;
        }

        /* === NAVBAR GAYA PERTAMA (DITERAPKAN DI SINI) === */
        .navbar {
            background: linear-gradient(90deg, #2c3e50, #4a6572);
            backdrop-filter: blur(10px);
            padding: 0.8rem 2.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 3;
        }

        .nav-left,
        .nav-right {
            display: flex;
            align-items: center;
            gap: 1.8rem;
        }

        .nav-left a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: color 0.3s;
        }

        .nav-left a:hover {
            color: #3498db;
        }

        .nav-center {
            flex: 1;
            text-align: center;
            color: white;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .nav-right {
            color: white;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        /* === CARD & FOOTER STYLING DARI KODE KEDUA === */
        .card img {
            height: 200px;
            object-fit: cover;
        }

        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }

        footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            text-align: center;
            padding: 1rem;
            position: relative;
            z-index: 2;
        }
    </style>
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
