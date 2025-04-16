<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KasirQ - Welcome </title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('')}}homepage/img/favicon.png" rel="icon">
  <link href="{{asset('')}}homepage/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('')}}homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('')}}homepage/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('')}}homepage/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('')}}homepage/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('')}}homepage/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('')}}homepage/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{asset('')}}homepage/img/logo.webp" alt=""> -->
        <h1 class="sitename">KasirQ</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{route('login')}}">Login</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>KasirQ – Solusi Kasir Modern untuk Bisnis Anda.</h1>
            <p>Kelola penjualan, stok, dan laporan keuangan dengan lebih mudah, cepat, dan efisien.
Aplikasi kasir berbasis web yang siap mendukung perkembangan usahamu.</p>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('')}}homepage/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('')}}homepage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('')}}homepage/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('')}}homepage/vendor/aos/aos.js"></script>
  <script src="{{asset('')}}homepage/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('')}}homepage/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('')}}homepage/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{asset('')}}homepage/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{asset('')}}homepage/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="{{asset('')}}homepage/js/main.js"></script>

</body>

</html>