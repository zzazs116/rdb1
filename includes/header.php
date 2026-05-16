<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> | عيادة ماس للتجميل - العناية والجمال</title>
    <meta name="description" content="<?php echo $site_description; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&family=Tajawal:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="main-header" id="header">
        <div class="container">
            <div class="header-inner">
                <div class="logo">
                    <a href="index.php">
                        <svg class="logo-svg" viewBox="0 0 80 70" xmlns="http://www.w3.org/2000/svg">
                            <text x="5" y="45" font-family="serif" font-size="48" font-weight="bold" fill="#1B3A5C" font-style="italic">MS</text>
                            <line x1="5" y1="52" x2="75" y2="52" stroke="#1B3A5C" stroke-width="1"/>
                            <text x="12" y="66" font-family="sans-serif" font-size="14" fill="#1B3A5C" letter-spacing="6">CLINIC</text>
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
                    <a href="#contact" class="btn btn-primary btn-book">
                        <i class="far fa-calendar-alt"></i>
                        احجز موعدك الآن
                    </a>
                </div>
                <button class="mobile-toggle" id="mobileToggle" aria-label="فتح القائمة">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>
