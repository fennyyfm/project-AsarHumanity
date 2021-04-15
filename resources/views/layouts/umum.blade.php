<?php $title=' | Home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Asar Humanity</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/asset/new/asar/logo.png')}}" rel="icon">
  <link href="{{asset('assets/asset/new/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

 <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/asset/new/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/asset/new/vendor/icofont/icofont.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/asset/new/vendor/boxicons/css/boxicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/asset/new/vendor/remixicon/remixicon.css')}}">
  <link rel="stylesheet" href="{{asset('assets/asset/new/vendor/venobox/venobox.css')}}">
  <link rel="stylesheet" href="{{asset('assets/asset/new/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/asset/new/vendor/aos/aos.css')}}">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{asset('assets/asset/new/css/style.css')}}">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
       <a href="/" class="logo mr-auto"><img src="assets/logo-asar.jpg" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/formQurban">Qurban</a></li>
          <li class="drop-down"><a href="">Relawan</a>
            <ul>
              <li><a href="/formRelawan">Relawan</a></li>
              <li><a href="#">Pelatihan</a></li>
            </ul>
          </li>
          <li><a href="/#about">About Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="/formDonasi" class="get-started-btn scrollto">Donasi</a>

    </div>
  </header><!-- End Header -->
	@yield('content')
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Asar Humanity</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
         <!--  Designed by Aisyah&Fenny UPI 2020 -->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.facebook.com/asarhumanity/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/asarhumanity/" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/asset/new/vendor/jquery/jquery.min.js"></script>
  <script src="assets/asset/new/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/asset/new/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/asset/new/vendor/php-email-form/validate.js"></script>
  <script src="assets/asset/new/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/asset/new/vendor/counterup/counterup.min.js"></script>
  <script src="assets/asset/new/vendor/venobox/venobox.min.js"></script>
  <script src="assets/asset/new/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/asset/new/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/asset/new/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/asset/new/js/main.js"></script>

</body>

</html>