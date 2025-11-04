{{-- resources/views/profile.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
                    <img src="{{ asset('images/TiarModeSatir.jpg') }}" alt="L. M. ARANTA" class="profile-image">
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
                    <img src="{{ asset('images/ArthurModeSatir.jpg') }}" alt="ARTHUR DEKKO" class="profile-image">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animasi fade in untuk profile cards
            const profileCards = document.querySelectorAll('.profile-card');

            profileCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    card.style.transition = 'all 0.6s ease';

                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 100);
                }, index * 200);
            });

            // Smooth scroll untuk navigation
            const navLinks = document.querySelectorAll('.nav-left a, .nav-right a');

            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');

                    if (href.startsWith('#')) {
                        e.preventDefault();
                        const target = document.querySelector(href);

                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    }
                });
            });

            // Parallax effect untuk background
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const parallax = document.querySelector('body');

                if (parallax) {
                    parallax.style.backgroundPositionY = scrolled * 0.5 + 'px';
                }
            });
        });
    </script>
</body>
</html>
