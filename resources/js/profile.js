// public/js/profile.js

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
            
            // Jika link internal dengan #
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