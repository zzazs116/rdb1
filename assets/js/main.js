/* ============================================
   MAS CLINIC - Premium 3D Website JavaScript
   ============================================ */

document.addEventListener('DOMContentLoaded', function() {

    // ============================================
    // PRELOADER
    // ============================================
    const preloader = document.getElementById('preloader');
    window.addEventListener('load', function() {
        setTimeout(function() {
            preloader.classList.add('hidden');
            document.body.style.overflow = '';
            initAnimations();
        }, 1500);
    });
    // Fallback
    setTimeout(function() {
        if (!preloader.classList.contains('hidden')) {
            preloader.classList.add('hidden');
            document.body.style.overflow = '';
            initAnimations();
        }
    }, 4000);

    // ============================================
    // HEADER SCROLL EFFECT
    // ============================================
    const header = document.getElementById('header');
    const scrollTop = document.getElementById('scrollTop');
    
    function handleScroll() {
        const scrollY = window.scrollY;
        if (scrollY > 80) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        if (scrollY > 400) {
            scrollTop.classList.add('visible');
        } else {
            scrollTop.classList.remove('visible');
        }
    }
    window.addEventListener('scroll', handleScroll);
    handleScroll();

    // ============================================
    // SCROLL TO TOP
    // ============================================
    scrollTop.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // ============================================
    // MOBILE MENU
    // ============================================
    const mobileToggle = document.getElementById('mobileToggle');
    const mainNav = document.getElementById('mainNav');
    const navOverlay = document.getElementById('navOverlay');

    function toggleMenu() {
        mobileToggle.classList.toggle('active');
        mainNav.classList.toggle('active');
        navOverlay.classList.toggle('active');
        document.body.style.overflow = mainNav.classList.contains('active') ? 'hidden' : '';
    }

    mobileToggle.addEventListener('click', toggleMenu);
    navOverlay.addEventListener('click', toggleMenu);

    // Close menu on nav link click
    document.querySelectorAll('.main-nav a').forEach(function(link) {
        link.addEventListener('click', function() {
            if (mainNav.classList.contains('active')) {
                toggleMenu();
            }
        });
    });

    // ============================================
    // SMOOTH SCROLL
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            var targetId = this.getAttribute('href');
            if (targetId === '#') return;
            var target = document.querySelector(targetId);
            if (target) {
                var offset = header.offsetHeight + 20;
                var top = target.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top: top, behavior: 'smooth' });
            }
        });
    });

    // ============================================
    // ACTIVE NAV LINK ON SCROLL
    // ============================================
    var sections = document.querySelectorAll('section[id]');
    window.addEventListener('scroll', function() {
        var scrollY = window.scrollY + 200;
        sections.forEach(function(section) {
            var top = section.offsetTop;
            var height = section.offsetHeight;
            var id = section.getAttribute('id');
            if (scrollY >= top && scrollY < top + height) {
                document.querySelectorAll('.main-nav a').forEach(function(a) {
                    a.classList.remove('active');
                    if (a.getAttribute('href') === '#' + id) {
                        a.classList.add('active');
                    }
                });
            }
        });
    });

    // ============================================
    // INTERSECTION OBSERVER ANIMATIONS
    // ============================================
    function initAnimations() {
        var animElements = document.querySelectorAll('[data-animate]');
        
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var el = entry.target;
                    var delay = parseInt(el.getAttribute('data-delay')) || 0;
                    setTimeout(function() {
                        el.classList.add('animated');
                    }, delay);
                    observer.unobserve(el);
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        });

        animElements.forEach(function(el) {
            observer.observe(el);
        });
    }

    // ============================================
    // COUNTER ANIMATION
    // ============================================
    var counters = document.querySelectorAll('.stat-number');
    var counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                var el = entry.target;
                var target = parseInt(el.getAttribute('data-target'));
                animateCounter(el, target);
                counterObserver.unobserve(el);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(function(counter) {
        counterObserver.observe(counter);
    });

    function animateCounter(el, target) {
        var duration = 2000;
        var startTime = null;
        var startValue = 0;

        function update(timestamp) {
            if (!startTime) startTime = timestamp;
            var progress = Math.min((timestamp - startTime) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3);
            var current = Math.floor(startValue + (target - startValue) * eased);
            el.textContent = current.toLocaleString();
            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                el.textContent = target.toLocaleString();
            }
        }
        requestAnimationFrame(update);
    }

    // ============================================
    // 3D TILT EFFECT
    // ============================================
    var tiltCards = document.querySelectorAll('[data-tilt]');
    tiltCards.forEach(function(card) {
        card.addEventListener('mousemove', function(e) {
            var rect = card.getBoundingClientRect();
            var x = e.clientX - rect.left;
            var y = e.clientY - rect.top;
            var centerX = rect.width / 2;
            var centerY = rect.height / 2;
            var rotateX = (y - centerY) / centerY * -8;
            var rotateY = (x - centerX) / centerX * 8;
            
            card.style.transform = 'perspective(1000px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) scale3d(1.02, 1.02, 1.02)';
        });

        card.addEventListener('mouseleave', function() {
            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
        });
    });

    // ============================================
    // PARALLAX EFFECT
    // ============================================
    var parallaxElements = document.querySelectorAll('[data-parallax]');
    window.addEventListener('scroll', function() {
        var scrollY = window.scrollY;
        parallaxElements.forEach(function(el) {
            var rect = el.getBoundingClientRect();
            var speed = 0.3;
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                var offset = (scrollY - el.offsetTop) * speed;
                var videos = el.querySelectorAll('video');
                videos.forEach(function(video) {
                    video.style.transform = 'translateY(' + offset * 0.5 + 'px) scale(1.1)';
                });
            }
        });
    });

    // ============================================
    // VIDEO BACKGROUND HANDLING
    // ============================================
    var videos = document.querySelectorAll('video');
    videos.forEach(function(video) {
        video.setAttribute('playsinline', '');
        video.setAttribute('muted', '');
        video.muted = true;
        
        var playPromise = video.play();
        if (playPromise !== undefined) {
            playPromise.catch(function() {
                // Auto-play was prevented, try on interaction
                document.addEventListener('click', function handler() {
                    video.play();
                    document.removeEventListener('click', handler);
                }, { once: true });
            });
        }
    });

    // Pause videos when not in viewport for performance
    var videoObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            var video = entry.target;
            if (entry.isIntersecting) {
                video.play().catch(function() {});
            } else {
                video.pause();
            }
        });
    }, { threshold: 0.1 });

    videos.forEach(function(video) {
        videoObserver.observe(video);
    });

    // ============================================
    // BOOKING FORM - API SUBMISSION
    // ============================================
    var bookingForm = document.getElementById('bookingForm');
    var submitBtn = document.getElementById('submitBtn');
    var formStatus = document.getElementById('formStatus');

    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault();

            var btnText = submitBtn.querySelector('.btn-text');
            var btnLoader = submitBtn.querySelector('.btn-loader');
            
            // Show loader
            btnText.style.display = 'none';
            btnLoader.style.display = 'inline-block';
            submitBtn.disabled = true;

            // Collect form data
            var formData = new FormData(bookingForm);
            var data = {};
            formData.forEach(function(value, key) {
                data[key] = value;
            });

            // Send API request
            fetch('process/api-booking.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(result) {
                formStatus.style.display = 'block';
                if (result.success) {
                    formStatus.className = 'form-status success';
                    formStatus.innerHTML = '<i class="fas fa-check-circle"></i> ' + result.message;
                    bookingForm.reset();
                } else {
                    formStatus.className = 'form-status error';
                    formStatus.innerHTML = '<i class="fas fa-exclamation-circle"></i> ' + result.message;
                }
            })
            .catch(function(error) {
                formStatus.style.display = 'block';
                formStatus.className = 'form-status error';
                formStatus.innerHTML = '<i class="fas fa-exclamation-circle"></i> \u062d\u062f\u062b \u062e\u0637\u0623\u060c \u064a\u0631\u062c\u0649 \u0627\u0644\u0645\u062d\u0627\u0648\u0644\u0629 \u0645\u0631\u0629 \u0623\u062e\u0631\u0649';
            })
            .finally(function() {
                btnText.style.display = 'inline';
                btnLoader.style.display = 'none';
                submitBtn.disabled = false;
                
                // Hide status after 5 seconds
                setTimeout(function() {
                    formStatus.style.display = 'none';
                }, 5000);
            });
        });
    }

    // ============================================
    // FLOATING ELEMENTS MOUSE PARALLAX
    // ============================================
    var hero = document.querySelector('.hero');
    if (hero) {
        hero.addEventListener('mousemove', function(e) {
            var rect = hero.getBoundingClientRect();
            var x = (e.clientX - rect.left) / rect.width - 0.5;
            var y = (e.clientY - rect.top) / rect.height - 0.5;

            var circles = hero.querySelectorAll('.floating-circle');
            circles.forEach(function(circle, i) {
                var speed = (i + 1) * 15;
                circle.style.transform = 'translate(' + (x * speed) + 'px, ' + (y * speed) + 'px)';
            });

            var particles = hero.querySelectorAll('.floating-particle');
            particles.forEach(function(particle, i) {
                var speed = (i + 1) * 8;
                particle.style.transform = 'translate(' + (x * speed) + 'px, ' + (y * speed) + 'px)';
            });
        });
    }

});
