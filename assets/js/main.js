document.addEventListener('DOMContentLoaded', function () {
    // --- Header scroll effect ---
    const header = document.getElementById('header');
    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        handleScrollTop();
    });

    // --- Mobile navigation ---
    const mobileToggle = document.getElementById('mobileToggle');
    const mainNav = document.getElementById('mainNav');
    let overlay = document.createElement('div');
    overlay.className = 'nav-overlay';
    document.body.appendChild(overlay);

    function toggleNav() {
        mobileToggle.classList.toggle('active');
        mainNav.classList.toggle('active');
        overlay.classList.toggle('active');
        document.body.style.overflow = mainNav.classList.contains('active') ? 'hidden' : '';
    }

    mobileToggle.addEventListener('click', toggleNav);
    overlay.addEventListener('click', toggleNav);

    // Close nav on link click
    document.querySelectorAll('.main-nav a').forEach(function (link) {
        link.addEventListener('click', function () {
            if (mainNav.classList.contains('active')) {
                toggleNav();
            }
        });
    });

    // --- Smooth scroll for anchor links ---
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            var target = document.querySelector(this.getAttribute('href'));
            if (target) {
                var headerHeight = header.offsetHeight;
                var targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // --- Active nav link on scroll ---
    var sections = document.querySelectorAll('section[id]');
    window.addEventListener('scroll', function () {
        var scrollPos = window.scrollY + 200;
        sections.forEach(function (section) {
            var top = section.offsetTop - 100;
            var bottom = top + section.offsetHeight;
            var id = section.getAttribute('id');
            var navLink = document.querySelector('.main-nav a[href="#' + id + '"]');
            if (navLink) {
                if (scrollPos >= top && scrollPos < bottom) {
                    document.querySelectorAll('.main-nav a').forEach(function (a) { a.classList.remove('active'); });
                    navLink.classList.add('active');
                }
            }
        });
    });

    // --- Animate on scroll ---
    var animElements = document.querySelectorAll('.stat-card, .service-card, .feature-item, .why-us-image, .why-us-content');
    animElements.forEach(function (el) {
        el.classList.add('animate-on-scroll');
    });

    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    animElements.forEach(function (el) {
        observer.observe(el);
    });

    // --- Counter animation ---
    var statNumbers = document.querySelectorAll('.stat-number');
    var statsObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                statsObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    statNumbers.forEach(function (el) {
        statsObserver.observe(el);
    });

    function animateCounter(el) {
        var target = parseInt(el.getAttribute('data-target'));
        var text = el.textContent;
        var prefix = text.match(/^[^\d]*/)[0];
        var suffix = text.match(/[^\d]*$/)[0];
        var duration = 2000;
        var step = Math.ceil(target / (duration / 16));
        var current = 0;

        function update() {
            current += step;
            if (current >= target) {
                current = target;
                el.textContent = prefix + current + suffix;
                return;
            }
            el.textContent = prefix + current + suffix;
            requestAnimationFrame(update);
        }

        update();
    }

    // --- Scroll to top button ---
    var scrollTopBtn = document.createElement('button');
    scrollTopBtn.className = 'scroll-top';
    scrollTopBtn.innerHTML = '<i class="fas fa-chevron-up"></i>';
    scrollTopBtn.setAttribute('aria-label', 'العودة للأعلى');
    document.body.appendChild(scrollTopBtn);

    scrollTopBtn.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    function handleScrollTop() {
        if (window.scrollY > 400) {
            scrollTopBtn.classList.add('visible');
        } else {
            scrollTopBtn.classList.remove('visible');
        }
    }

    // --- Form handling ---
    var bookingForm = document.getElementById('bookingForm');
    if (bookingForm) {
        bookingForm.addEventListener('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(bookingForm);

            fetch(bookingForm.action, {
                method: 'POST',
                body: formData
            })
            .then(function (response) { return response.json(); })
            .then(function (data) {
                if (data.success) {
                    bookingForm.innerHTML = '<div class="form-success">' + data.message + '</div>';
                } else {
                    var errorMsg = data.errors ? data.errors.join('، ') : 'حدث خطأ، يرجى المحاولة مرة أخرى.';
                    alert(errorMsg);
                }
            })
            .catch(function () {
                alert('حدث خطأ في الاتصال، يرجى المحاولة مرة أخرى.');
            });
        });
    }
});
