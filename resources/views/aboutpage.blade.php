{{-- resources/views/profile.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar">
            <div class="nav-left">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}">About</a>
            </div>
            <div class="nav-center">
                2301010138 - L. M. ARANTA THIAR ELKANTA RIZKY ILLAHI (GENAP)
            </div>
            <div class="nav-right">
                <a href="#">2301010097 - ARTHUR EMANUEL DEKKO (GANJIL)</a>
            </div>
        </nav>

        <!-- Main Title -->
        <h1 class="main-title">
            Halaman ini dibuat oleh: 2301010097 - ARTHUR EMANUEL DEKKO (GANJIL)
        </h1>

        <!-- Profiles Container -->
        <div class="profiles-container">
            <!-- Profile 1 -->
            <div class="profile-card">
                <div class="profile-header">
                    <img src="{{ asset('images/acropolis.jpg') }}" alt="L. M. ARANTA" class="profile-image">
                    <h2 class="profile-name">L. M. ARANTA THIAR ELKANTA RIZKY ILLAHI</h2>
                    <p class="profile-id">2301010138</p>
                </div>
                <div class="bio-section">
                    <h3 class="bio-title">BIO</h3>
                    <p class="bio-text">professional back end developer and ocassionally AK47 bringer</p>
                </div>
            </div>

            <!-- Profile 2 -->
            <div class="profile-card">
                <div class="profile-header">
                    <img src="{{ asset('images/bckground.webp') }}" alt="ARTHUR DEKKO" class="profile-image">
                    <h2 class="profile-name">ARTHUR EMANUEL DEKKO</h2>
                    <p class="profile-id">2301010097</p>
                </div>
                <div class="bio-section">
                    <h3 class="bio-title">BIO</h3>
                    <p class="bio-text">Designing front-end is my passion sir 💖</p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/profile.js') }}"></script>
</body>
<<<<<<< Updated upstream
</html>
=======
</html>
<!-- more push -->
>>>>>>> Stashed changes
