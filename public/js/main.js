// Search overlay toggle
document.addEventListener('DOMContentLoaded', () => {
    // ── PRELOADER ──
    const preloader = document.getElementById('preloader');
    if (preloader) {
        window.addEventListener('load', () => {
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.visibility = 'hidden';
            }, 600);
        });
        // Fallback: hide preloader after 5 seconds if load event doesn't fire
        setTimeout(() => {
            if (preloader.style.visibility !== 'hidden') {
                preloader.style.opacity = '0';
                setTimeout(() => preloader.style.visibility = 'hidden', 600);
            }
        }, 5000);
    }
    const overlay    = document.getElementById('searchOverlay');
    const searchOpen = document.getElementById('searchOpen');
    const searchClose= document.getElementById('searchClose');

    if (searchOpen && overlay) {
        searchOpen.addEventListener('click', () => {
            overlay.classList.add('active');
            overlay.querySelector('input').focus();
        });
    }

    if (searchClose && overlay) {
        searchClose.addEventListener('click', () => overlay.classList.remove('active'));
        overlay.addEventListener('click', (e) => { if (e.target === overlay) overlay.classList.remove('active'); });
    }

    document.addEventListener('keydown', (e) => { if (e.key === 'Escape') overlay && overlay.classList.remove('active'); });

    // Mobile nav toggle
    const hamburger    = document.getElementById('hamburger');
    const mobileNav    = document.getElementById('mobileNav');
    const mobileClose  = document.getElementById('mobileNavClose');

    if (hamburger && mobileNav) {
        hamburger.addEventListener('click', () => {
            const open = mobileNav.classList.toggle('open');
            hamburger.setAttribute('aria-expanded', open);
            document.body.style.overflow = open ? 'hidden' : '';
        });
    }

    if (mobileClose && mobileNav) {
        mobileClose.addEventListener('click', () => {
            mobileNav.classList.remove('open');
            if (hamburger) hamburger.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        });
    }

    // Mobile Dropdowns Toggle
    const mobileToggles = document.querySelectorAll('.mobile-nav__toggle');
    mobileToggles.forEach(btn => {
        btn.addEventListener('click', () => {
            const dropdown = btn.nextElementSibling;
            const isExpanded = btn.getAttribute('aria-expanded') === 'true';
            
            // Close others if you want only one open at a time (optional)
            /*
            mobileToggles.forEach(otherBtn => {
                if (otherBtn !== btn) {
                    otherBtn.setAttribute('aria-expanded', 'false');
                    if (otherBtn.nextElementSibling) otherBtn.nextElementSibling.classList.remove('active');
                }
            });
            */

            btn.setAttribute('aria-expanded', !isExpanded);
            if (dropdown) {
                dropdown.classList.toggle('active');
            }
        });
    });

    // Hero Carousel
    const slides = document.querySelectorAll('.hero__slide');
    const dots = document.querySelectorAll('.hero__dot');
    let currentSlide = 0;
    let slideInterval;

    const showSlide = (index) => {
        if (!slides[index]) return;
        slides.forEach(s => s.classList.remove('active'));
        dots.forEach(d => d.classList.remove('active'));
        slides[index].classList.add('active');
        if (dots[index]) dots[index].classList.add('active');
        currentSlide = index;
    };

    const nextSlide = () => {
        if (slides.length === 0) return;
        let index = (currentSlide + 1) % slides.length;
        showSlide(index);
    };

    dots.forEach((dot, idx) => {
        dot.addEventListener('click', () => {
            showSlide(idx);
            resetInterval();
        });
    });

    const resetInterval = () => {
        if (slideInterval) clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 6000);
    };

    if (slides.length > 0) {
        resetInterval();
    }

    // Scroll Reveal Observer
    const revealCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                // stop observing once revealed
                observer.unobserve(entry.target);
            }
        });
    };

    const revealObserver = new IntersectionObserver(revealCallback, {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    });

    const revealElements = document.querySelectorAll('.reveal, .reveal-stagger');
    revealElements.forEach(el => revealObserver.observe(el));
});
