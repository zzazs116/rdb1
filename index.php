<?php require_once 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> | &#1593;&#1610;&#1575;&#1583;&#1577; &#1605;&#1575;&#1587; &#1604;&#1604;&#1578;&#1580;&#1605;&#1610;&#1604;</title>
    <meta name="description" content="<?php echo $site_description; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&family=Tajawal:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="preloader-logo">
                <svg viewBox="0 0 100 85" xmlns="http://www.w3.org/2000/svg">
                    <text x="10" y="55" font-family="'Times New Roman', serif" font-size="58" font-weight="bold" fill="#ffffff" font-style="italic">MS</text>
                    <line x1="10" y1="62" x2="90" y2="62" stroke="rgba(255,255,255,0.5)" stroke-width="1"/>
                    <text x="18" y="78" font-family="'Arial', sans-serif" font-size="16" fill="rgba(255,255,255,0.8)" letter-spacing="8">CLINIC</text>
                </svg>
            </div>
            <div class="preloader-spinner"></div>
        </div>
    </div>

    <header class="main-header" id="header">
        <div class="container">
            <div class="header-inner">
                <div class="logo">
                    <a href="index.php">
                        <svg class="logo-svg" viewBox="0 0 100 85" xmlns="http://www.w3.org/2000/svg">
                            <text x="10" y="55" font-family="'Times New Roman', serif" font-size="58" font-weight="bold" fill="#1B3A5C" font-style="italic">MS</text>
                            <line x1="10" y1="62" x2="90" y2="62" stroke="#1B3A5C" stroke-width="1"/>
                            <text x="18" y="78" font-family="'Arial', sans-serif" font-size="16" fill="#1B3A5C" letter-spacing="8">CLINIC</text>
                        </svg>
                    </a>
                </div>
                <nav class="main-nav" id="mainNav">
                    <ul>
                        <li><a href="#home" class="active">الرئيسية</a></li>
                        <li><a href="#about">من نحن</a></li>
                        <li><a href="#services">الخدمات</a></li>
                        <li><a href="#clinic">العيادة</a></li>
                        <li><a href="#blog">المدونة</a></li>
                        <li><a href="#contact">تواصل معنا</a></li>
                    </ul>
                </nav>
                <div class="header-cta">
                    <a href="#contact" class="btn btn-primary btn-book"><i class="far fa-calendar-alt"></i> احجز موعدك الآن</a>
                </div>
                <button class="mobile-toggle" id="mobileToggle" aria-label="فتح القائمة"><span></span><span></span><span></span></button>
            </div>
        </div>
    </header>

    <section class="hero" id="home">
        <div class="hero-video-bg">
            <video autoplay muted loop playsinline id="heroVideo">
                <source src="https://cdn.pixabay.com/video/2024/02/14/200712-912908192_large.mp4" type="video/mp4">
            </video>
            <div class="hero-video-overlay"></div>
        </div>
        <div class="hero-3d-elements">
            <div class="floating-circle circle-1"></div>
            <div class="floating-circle circle-2"></div>
            <div class="floating-circle circle-3"></div>
            <div class="floating-particle p1"></div>
            <div class="floating-particle p2"></div>
            <div class="floating-particle p3"></div>
            <div class="floating-particle p4"></div>
            <div class="floating-particle p5"></div>
        </div>
        <div class="container">
            <div class="hero-inner">
                <div class="hero-content" data-animate="fade-right">
                    <h1>
                        <span class="hero-title-line1">جمالك الطبيعي</span>
                        <span class="hero-title-line2">هو سر ثقتك</span>
                    </h1>
                    <p class="hero-desc">في ماس كلينيك نُبرز جمالك بأحدث تقنيات الفيلر، البوتوكس، والعناية بالبشرة لتظهري بأفضل نسخة منك.</p>
                    <div class="hero-buttons">
                        <a href="#contact" class="btn btn-primary btn-glow">احجز استشارتك الآن</a>
                        <a href="#services" class="btn btn-outline btn-glass">تعرف على خدماتنا</a>
                    </div>
                </div>
                <div class="hero-image" data-animate="fade-left">
                    <div class="hero-image-wrapper">
                        <div class="hero-image-glow"></div>
                        <img src="https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?w=600&h=700&fit=crop&crop=face" alt="ماس كلينيك" loading="eager">
                        <div class="hero-image-ring ring-1"></div>
                        <div class="hero-image-ring ring-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-scroll-indicator"><div class="mouse"><div class="mouse-wheel"></div></div></div>
    </section>

    <section class="features-strip" id="about">
        <div class="container">
            <div class="features-grid">
                <div class="feature-item glass-card" data-animate="fade-up" data-delay="0">
                    <div class="feature-icon-3d"><div class="icon-sphere"><i class="fas fa-user-md"></i></div></div>
                    <h3>أطباء متخصصون</h3>
                    <p>خبرة عالية في التجميل والعناية</p>
                </div>
                <div class="feature-item glass-card" data-animate="fade-up" data-delay="200">
                    <div class="feature-icon-3d"><div class="icon-sphere"><i class="fas fa-microscope"></i></div></div>
                    <h3>تقنيات حديثة</h3>
                    <p>أحدث الأجهزة والتقنيات العالمية</p>
                </div>
                <div class="feature-item glass-card" data-animate="fade-up" data-delay="400">
                    <div class="feature-icon-3d"><div class="icon-sphere"><i class="fas fa-heart"></i></div></div>
                    <h3>نتائج طبيعية وآمنة</h3>
                    <p>جمال طبيعي مع أعلى معايير الأمان</p>
                </div>
            </div>
        </div>
    </section>

    <section class="statistics" data-parallax>
        <div class="stats-video-bg">
            <video autoplay muted loop playsinline>
                <source src="https://cdn.pixabay.com/video/2020/07/30/45299-445599780_large.mp4" type="video/mp4">
            </video>
            <div class="stats-video-overlay"></div>
        </div>
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card glass-card-dark" data-animate="zoom-in" data-delay="0">
                    <div class="stat-number-wrapper"><span class="stat-number" data-target="98">0</span><span class="stat-suffix">%</span></div>
                    <span class="stat-label">نسبة رضا العملاء</span>
                    <div class="stat-glow"></div>
                </div>
                <div class="stat-card glass-card-dark" data-animate="zoom-in" data-delay="150">
                    <div class="stat-number-wrapper"><span class="stat-prefix">+</span><span class="stat-number" data-target="15">0</span></div>
                    <span class="stat-label">أخصائي تجميل</span>
                    <div class="stat-glow"></div>
                </div>
                <div class="stat-card glass-card-dark" data-animate="zoom-in" data-delay="300">
                    <div class="stat-number-wrapper"><span class="stat-prefix">+</span><span class="stat-number" data-target="10">0</span></div>
                    <span class="stat-label">سنوات خبرة</span>
                    <div class="stat-glow"></div>
                </div>
                <div class="stat-card glass-card-dark" data-animate="zoom-in" data-delay="450">
                    <div class="stat-number-wrapper"><span class="stat-prefix">+</span><span class="stat-number" data-target="5000">0</span></div>
                    <span class="stat-label">عميل سعيد</span>
                    <div class="stat-glow"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="services-bg-pattern"></div>
        <div class="container">
            <div class="section-header" data-animate="fade-up">
                <span class="section-subtitle">خدماتنا</span>
                <h2 class="section-title">مصممة من أجلك</h2>
                <p class="section-desc">نقدم مجموعة متكاملة من خدمات التجميل والعناية لتلبية احتياجاتك وتحقيق أفضل النتائج.</p>
            </div>
            <div class="services-grid">
                <div class="service-card card-3d" data-animate="fade-up" data-delay="0" data-tilt>
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper"><div class="service-icon-bg"></div><i class="fas fa-syringe"></i></div>
                        <h3>ميزوثيرابي</h3>
                        <p>تغذية البشرة وتحفيز الكولاجين</p>
                        <div class="service-card-shine"></div>
                    </div>
                </div>
                <div class="service-card card-3d" data-animate="fade-up" data-delay="100" data-tilt>
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper"><div class="service-icon-bg"></div><i class="fas fa-magic"></i></div>
                        <h3>البوتوكس</h3>
                        <p>إزالة التجاعيد والخطوط التعبيرية</p>
                        <div class="service-card-shine"></div>
                    </div>
                </div>
                <div class="service-card card-3d" data-animate="fade-up" data-delay="200" data-tilt>
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper"><div class="service-icon-bg"></div><i class="fas fa-fill-drip"></i></div>
                        <h3>الفيلر</h3>
                        <p>إبراز الملامح وملء التجاعيد</p>
                        <div class="service-card-shine"></div>
                    </div>
                </div>
                <div class="service-card card-3d" data-animate="fade-up" data-delay="300" data-tilt>
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper"><div class="service-icon-bg"></div><i class="fas fa-bolt"></i></div>
                        <h3>الليزر</h3>
                        <p>إزالة الشعر وتجديد نضارة البشرة</p>
                        <div class="service-card-shine"></div>
                    </div>
                </div>
                <div class="service-card card-3d" data-animate="fade-up" data-delay="400" data-tilt>
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper"><div class="service-icon-bg"></div><i class="fas fa-spa"></i></div>
                        <h3>علاج البشرة</h3>
                        <p>جلسات تنظيف وتقشير وتجديد البشرة</p>
                        <div class="service-card-shine"></div>
                    </div>
                </div>
            </div>
            <div class="services-cta" data-animate="fade-up"><a href="#services" class="btn btn-outline btn-glass">عرض جميع الخدمات</a></div>
        </div>
    </section>

    <section class="why-us" id="clinic">
        <div class="why-us-video-bg">
            <video autoplay muted loop playsinline>
                <source src="https://cdn.pixabay.com/video/2021/04/04/69655-532800498_large.mp4" type="video/mp4">
            </video>
            <div class="why-us-video-overlay"></div>
        </div>
        <div class="container">
            <div class="why-us-inner">
                <div class="why-us-content" data-animate="fade-right">
                    <h2>لماذا ماس كلينيك؟</h2>
                    <ul class="why-us-list">
                        <li data-animate="fade-right" data-delay="100"><span class="check-icon-3d"><i class="fas fa-check-circle"></i></span><span>فريق طبي متخصص وذو خبرة</span></li>
                        <li data-animate="fade-right" data-delay="200"><span class="check-icon-3d"><i class="fas fa-check-circle"></i></span><span>أحدث الأجهزة والتقنيات العالمية</span></li>
                        <li data-animate="fade-right" data-delay="300"><span class="check-icon-3d"><i class="fas fa-check-circle"></i></span><span>خطط علاجية مخصصة لكل عميل</span></li>
                        <li data-animate="fade-right" data-delay="400"><span class="check-icon-3d"><i class="fas fa-check-circle"></i></span><span>نتائج طبيعية وآمنة</span></li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-glow">احجز استشارتك الآن</a>
                </div>
                <div class="why-us-image" data-animate="fade-left">
                    <div class="why-us-image-wrapper glass-card">
                        <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?w=600&h=400&fit=crop" alt="عيادة ماس كلينيك" loading="lazy">
                        <div class="why-us-logo-overlay">
                            <svg viewBox="0 0 100 85" xmlns="http://www.w3.org/2000/svg">
                                <text x="10" y="55" font-family="'Times New Roman', serif" font-size="58" font-weight="bold" fill="#ffffff" font-style="italic">MS</text>
                                <line x1="10" y1="62" x2="90" y2="62" stroke="rgba(255,255,255,0.5)" stroke-width="1"/>
                                <text x="18" y="78" font-family="'Arial', sans-serif" font-size="16" fill="rgba(255,255,255,0.8)" letter-spacing="8">CLINIC</text>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-teaser" id="blog">
        <div class="container">
            <div class="section-header" data-animate="fade-up">
                <span class="section-subtitle">المدونة</span>
                <h2 class="section-title">آخر المقالات والنصائح</h2>
            </div>
            <div class="blog-grid">
                <div class="blog-card card-3d" data-animate="fade-up" data-delay="0" data-tilt>
                    <div class="blog-card-inner glass-card">
                        <div class="blog-img"><img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?w=400&h=250&fit=crop" alt="العناية بالبشرة" loading="lazy"><div class="blog-category">العناية بالبشرة</div></div>
                        <div class="blog-content"><h3>أفضل 5 نصائح للعناية بالبشرة في الصيف</h3><p>تعرفي على أهم النصائح للحفاظ على نضارة بشرتك...</p><span class="blog-date"><i class="far fa-calendar"></i> 15 مايو 2024</span></div>
                    </div>
                </div>
                <div class="blog-card card-3d" data-animate="fade-up" data-delay="150" data-tilt>
                    <div class="blog-card-inner glass-card">
                        <div class="blog-img"><img src="https://images.unsplash.com/photo-1512290923902-8a9f81dc236c?w=400&h=250&fit=crop" alt="فيلر الشفاه" loading="lazy"><div class="blog-category">الفيلر</div></div>
                        <div class="blog-content"><h3>كل ما تحتاجين معرفته عن فيلر الشفاه</h3><p>دليلك الشامل لعملية فيلر الشفاه والنتائج المتوقعة...</p><span class="blog-date"><i class="far fa-calendar"></i> 10 مايو 2024</span></div>
                    </div>
                </div>
                <div class="blog-card card-3d" data-animate="fade-up" data-delay="300" data-tilt>
                    <div class="blog-card-inner glass-card">
                        <div class="blog-img"><img src="https://images.unsplash.com/photo-1559056199-641a0ac8b55e?w=400&h=250&fit=crop" alt="البوتوكس" loading="lazy"><div class="blog-category">البوتوكس</div></div>
                        <div class="blog-content"><h3>البوتوكس: الأسئلة الشائعة والإجابات</h3><p>إجابات على أكثر الأسئلة شيوعاً حول حقن البوتوكس...</p><span class="blog-date"><i class="far fa-calendar"></i> 5 مايو 2024</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section" id="contact">
        <div class="contact-bg-gradient"></div>
        <div class="container">
            <div class="contact-inner">
                <div class="contact-info" data-animate="fade-right">
                    <div class="contact-logo">
                        <svg viewBox="0 0 100 85" xmlns="http://www.w3.org/2000/svg">
                            <text x="10" y="55" font-family="'Times New Roman', serif" font-size="58" font-weight="bold" fill="#ffffff" font-style="italic">MS</text>
                            <line x1="10" y1="62" x2="90" y2="62" stroke="rgba(255,255,255,0.5)" stroke-width="1"/>
                            <text x="18" y="78" font-family="'Arial', sans-serif" font-size="16" fill="rgba(255,255,255,0.8)" letter-spacing="8">CLINIC</text>
                        </svg>
                    </div>
                    <h2>رحلتك نحو الجمال<br>تبدأ من هنا</h2>
                    <p>احجزي استشارتك الآن ودعينا نساعدك في الوصول لأفضل نسخة منك.</p>
                    <div class="contact-details">
                        <div class="contact-detail-item"><i class="fas fa-map-marker-alt"></i><span><?php echo $address; ?></span></div>
                        <div class="contact-detail-item"><i class="fas fa-phone-alt"></i><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></div>
                    </div>
                </div>
                <div class="contact-form-wrapper glass-card-form" data-animate="fade-left">
                    <form class="contact-form" id="bookingForm">
                        <div class="form-row">
                            <div class="form-group"><input type="text" name="name" placeholder="الاسم" required><div class="form-line"></div></div>
                            <div class="form-group"><input type="tel" name="phone" placeholder="رقم الجوال" required><div class="form-line"></div></div>
                        </div>
                        <div class="form-group">
                            <select name="service" required>
                                <option value="" disabled selected>الخدمة المطلوبة</option>
                                <option value="mesotherapy">ميزوثيرابي</option>
                                <option value="botox">البوتوكس</option>
                                <option value="filler">الفيلر</option>
                                <option value="laser">الليزر</option>
                                <option value="skin">علاج البشرة</option>
                                <option value="hifu">HiFU 12D</option>
                                <option value="oxygeno">جلسة الاكسجينو</option>
                                <option value="head-spa">Japanese Head Spa</option>
                                <option value="peeling">تقشير للوجه والجسم</option>
                                <option value="collagen">محفزات الكولاجين</option>
                                <option value="exosome">أكسوزوم للشعر</option>
                                <option value="cleaning">تنظيف البشرة الطبي</option>
                            </select>
                            <div class="form-line"></div>
                        </div>
                        <div class="form-group"><textarea name="message" placeholder="رسالتك" rows="4"></textarea><div class="form-line"></div></div>
                        <button type="submit" class="btn btn-submit btn-3d" id="submitBtn"><span class="btn-text">احجز موعدك الآن</span><span class="btn-loader" style="display:none;"><i class="fas fa-spinner fa-spin"></i></span></button>
                        <div class="form-status" id="formStatus" style="display:none;"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="main-footer">
        <div class="container">
            <div class="footer-bottom">
                <div class="footer-copyright">جميع الحقوق محفوظة &copy; <?php echo date('Y'); ?> ماس كلينيك</div>
                <div class="footer-links"><a href="#">سياسة الخصوصية</a><a href="#">الشروط والأحكام</a></div>
                <div class="footer-social">
                    <a href="<?php echo $instagram; ?>" target="_blank" aria-label="Instagram" class="social-icon-3d"><i class="fab fa-instagram"></i></a>
                    <a href="<?php echo $snapchat; ?>" target="_blank" aria-label="Snapchat" class="social-icon-3d"><i class="fab fa-snapchat-ghost"></i></a>
                    <a href="<?php echo $tiktok; ?>" target="_blank" aria-label="TikTok" class="social-icon-3d"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <button class="scroll-top" id="scrollTop" aria-label="العودة للأعلى"><i class="fas fa-chevron-up"></i></button>
    <div class="nav-overlay" id="navOverlay"></div>
    <script src="assets/js/main.js"></script>
</body>
</html>