{{-- resources/views/profile.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('{{ asset("images/bckground.webp") }}') center/cover no-repeat fixed;
            min-height: 100vh;
            position: relative;
        }

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

        .navbar {
            background: rgba(44, 62, 80, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .nav-left, .nav-right {
            display: flex;
            gap: 2rem;
        }

        .nav-left a, .nav-right a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.3s;
        }

        .nav-left a:hover, .nav-right a:hover {
            color: #3498db;
        }

        .nav-center {
            color: white;
            font-size: 0.85rem;
            font-weight: 400;
        }

        .main-title {
            text-align: center;
            color: white;
            padding: 3rem 2rem;
            font-size: 2.5rem;
            font-weight: 600;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4);
        }

        .profiles-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 3rem;
            padding: 2rem 3rem 4rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .profile-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 3rem 2.5rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .profile-image {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            margin-bottom: 1.5rem;
        }

        .profile-name {
            color: white;
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
        }

        .profile-id {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            font-weight: 400;
        }

        .bio-section {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .bio-title {
            color: white;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .bio-text {
            color: white;
            font-size: 1rem;
            line-height: 1.6;
        }

        @media (max-width: 1200px) {
            .profiles-container {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }

            .nav-center {
                order: -1;
            }

            .main-title {
                font-size: 1.8rem;
                padding: 2rem 1rem;
            }

            .profiles-container {
                padding: 1rem;
                grid-template-columns: 1fr;
            }

            .profile-card {
                padding: 2rem 1.5rem;
            }
        }
    </style>
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