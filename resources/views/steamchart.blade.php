<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Steam Chart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #1b2838;
            color: white;
        }
    </style>
</head>

<body>
    {{-- =================== NAVBAR =================== --}}
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(65, 64, 64);">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center">
                <div class="d-flex align-items-center mx-auto">
                    <img src="{{ asset('images/logo_steam.svg') }}" alt="Logo Steam"
                        style="height: 40px; margin-right: 20px;">
                    <ul class="navbar-nav d-flex flex-row">
                        <li class="nav-item mx-2"><a class="nav-link active" href="#">Store</a></li>
                        <li class="nav-item mx-2"><a class="nav-link active" href="#">About us</a></li>
                        <li class="nav-item mx-2"><a class="nav-link active" href="#">Community</a></li>
                        <li class="nav-item mx-2"><a class="nav-link active" href="#">Support</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    {{-- =================== MAIN CONTENT =================== --}}
    <div class="container-fluid">
        <div style="padding-left: 5rem;">
            <div class="row">
                {{-- SIDEBAR --}}
                <div class="col-md-2 p-0">
                    <div class="d-flex flex-column h-50 p-1 text-white"
                        style="background-image: url('{{ asset('images/sidebarreversed.jpg') }}');
                               background-size: cover; background-position: center;">
                        <div style="padding: 1rem;">
                            <h5 class="fw-bold mb-3">🏠 BERANDA CHART</h5>
                            <hr class="border-white">
                            <p>▶️ <strong>TERLARIS HARI INI</strong></p>
                            <p>📅 <strong>TERLARIS PER BULAN</strong></p>
                            <ul class="list-unstyled ms-3">
                                <li>🗓️ MARET 2024</li>
                                <li>🗓️ DESEMBER 2023</li>
                            </ul>
                            <hr class="border-white">
                            <p>📁 LIHAT ARSIP</p>
                            <p>⏳ SERING ANDA MAINKAN</p>
                            <hr class="border-white">
                            <div class="d-flex align-items-center mt-3">
                                <img src="{{ asset('images/kim.webp') }}" alt="Avatar" class="rounded-circle me-2"
                                    style="width: 35px; height: 35px;">
                                <p>(THIAR ELKANTA)</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- MAIN CONTENT --}}
                <div class="col-md-9 text-white p-4">
                    <h4 class="fw-bold" style="margin-left: 87px;">GAMES PALING TOPS HITS</h4>
                    <small style="margin-left: 87px;">Games Gratis Maupun Berbayar (Server Global)</small>

                    <div class="row mt-4 justify-content-center">
                        {{-- Game Gratis --}}
                        <div class="col-md-5 mb-3 mx-2">
                            <h5 class="text-center mb-3">Game Gratis Populer</h5>
                            <div class="card bg-dark text-white" style="width: 100%;">
                                <img src="{{ asset('images/dotas.jpg') }}" class="card-img-top" alt="Dota 2">
                                <div class="card-body">
                                    <h5 class="card-title">Dota 2</h5>
                                    <p class="card-text">Current Players (2301010138)
                                        <span class="text-success">●</span>
                                    </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-dark text-white">2. Counter Strike</li>
                                    <li class="list-group-item bg-dark text-white">3. Apex Legend</li>
                                    <li class="list-group-item bg-dark text-white">4. Destiny 2</li>
                                    <li class="list-group-item bg-dark text-white">5. PUBG: BATTLEGROUND</li>
                                </ul>
                                <div class="card-body">
                                    <button class="btn btn-warning w-100 mt-3">(LALU MOCHAMMAD ARANTA THIAR ELKANTA
                                        RIZKY ILLAHI)</button>
                                </div>
                            </div>
                        </div>

                        {{-- Game Berbayar --}}
                        <div class="col-md-5 mb-3 mx-2">
                            <h5 class="text-center mb-3">Game Berbayar Populer</h5>
                            <div class="card bg-dark text-white" style="width: 100%;">
                                <img src="{{ asset('images/thehell.jpg') }}" class="card-img-top" alt="Helldivers 2">
                                <div class="card-body">
                                    <h5 class="card-title">Helldivers 2</h5>
                                    <p class="card-text">Current Players (2301010138)
                                        <span class="text-success">●</span>
                                    </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-dark text-white">2. Path of Exile 2</li>
                                    <li class="list-group-item bg-dark text-white">3. Rust</li>
                                    <li class="list-group-item bg-dark text-white">4. GTA V</li>
                                    <li class="list-group-item bg-dark text-white">5. Monster Hunter Wilds</li>
                                </ul>
                                <div class="card-body">
                                    <button class="btn btn-warning w-100 mt-3">(LALU MOCHAMMAD ARANTA THIAR ELKANTA
                                        RIZKY ILLAHI)</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Banner bawah --}}
                    <div class="mt-5">
                        <img src="{{ asset('images/TAHUNLALU.png') }}" class="img-fluid" alt="Best of 2023"
                            style="height: 150px; width:2000px">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- =================== FOOTER =================== --}}
    <div class="container-fluid">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top text-white">
            <p class="col-md-4 mb-0 text-center text-md-start">
                © Properti UTS SKILL ISSUE Kelas A, B, C
            </p>
            <div class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0">
                <span>SOSIAL MEDIA KAMI</span>
                <a href="#" class="ms-3 text-white"><i class="bi bi-facebook"></i></a>
                <a href="#" class="ms-3 text-white"><i class="bi bi-instagram"></i></a>
                <a href="#" class="ms-3 text-white"><i class="bi bi-twitter"></i></a>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0">
                <span>SOSIAL MEDIA KAMI</span>
                <a href="#" class="ms-3 text-white"><i class="bi bi-facebook"></i></a>
                <a href="#" class="ms-3 text-white"><i class="bi bi-instagram"></i></a>
                <a href="#" class="ms-3 text-white"><i class="bi bi-twitter"></i></a>
            </div>
            <p class="col-md-4 mb-0 text-center text-md-end">
                (2301010138) Jobs (LALU MOCHAMMAD ARANTA THIAR ELKANTA RIZKY ILLAHI)
            </p>
        </footer>
    </div>

</body>

</html>
