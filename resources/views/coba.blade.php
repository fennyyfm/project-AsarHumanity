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
       <a href="#hero" class="logo mr-auto"><img src="assets/logo-asar.jpg" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
          <li><a href="/formQurban">Qurban</a></li>
          <li class="drop-down"><a href="">Relawan</a>
            <ul>
              <li><a href="/formRelawan">Relawan</a></li>
              <li><a href="#">Pelatihan</a></li>
            </ul>
          </li>
          <li><a href="#about">About Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="/formDonasi" class="get-started-btn scrollto">Donasi</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Asar Humanity</h1>
          <h2>Tebar Energi Kebaikan, Raih Lipatan Pahala</h2>
        </div>
      </div>
      <div class="text-center">
        <a href="#portfolio" class="btn-get-started scrollto">Kegiatan</a>
        <a href="/report" class="btn-get-started scrollto">Report>></a>
      </div>

      <div class="row icon-boxes owl-carousel testimonials-carousel">
        <div class="col-md-6 col-lg-12 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
          <img class="icon" src="<?php echo asset('assets/asset/new/asar/donasi-sembako-1.png') ?>" alt="" >
            <h4 class="title"><a href="">Berbagi Sembako</a></h4>
            <p class="description">Berbagi sembako untuk mereka yang masih harus bekerja di jalan ditengah wabah covid-19, untuk mereka yang di rumah dengan segala keterbatasannya</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-12 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <img class="icon" src="<?php echo asset('assets/asset/new/asar/donasi-makanan.png') ?>" alt="" >
            <h4 class="title"><a href="">Berbagi Makanan</a></h4>
            <p class="description">Berbagi makanan untuk mereka yang membutuhkan. Berikan kebahagiaan untuk mereka yang tidak #dirumahaja</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-12 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <img class="icon" src="<?php echo asset('assets/asset/new/asar/qurbann.png') ?>" alt="" >
            <h4 class="title"><a href="">Qurban</a></h4>
            <p class="description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <img class="icon" src="<?php echo asset('assets/asset/new/asar/zakat-Fitrah.png') ?>" alt="" >
            <h4 class="title"><a href="">Zakat Fitrah</a></h4>
            <p class="description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-12 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <img class="icon" src="<?php echo asset('assets/asset/new/asar/zakat-mal.png') ?>" alt="" >
            <h4 class="title"><a href="">Zakat Maal</a></h4>
            <p class="description">Some quick example text to build on the card title and make up the bulk of the card's content.s</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-12 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <img class="icon" src="<?php echo asset('assets/asset/new/asar/ambulan-asar.png') ?>" alt="" >
            <h4 class="title"><a href="">Ambulan Gratis</a></h4>
            <p class="description">Some quick example text to build on the card title and make up the bulk of the card's content.s</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-12 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
           <img class="icon" src="<?php echo asset('assets/asset/new/asar/donasi-dunia-islam-1.png') ?>" alt="" >
            <h4 class="title"><a href="">Infaq Dunia Islam</a></h4>
            <p class="description">Some quick example text to build on the card title and make up the bulk of the card's content.s</p>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Asar Humanity mengajak kamu semua, untuk ambil peran dan memberikan manfaat untuk sesama</h2>
        </div>


        <div class="row justify-content-end">
           <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">{{$data['penerima']}}</span>
              <p>Penerima</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">{{$data['riwayat_donasi']}}</span>
              <p>Donatur</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">{{$data['relawan']}}</span>
              <p>Relawan</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">{{$data['pelatihan']}}</span>
              <p>Pelatihan</p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Counts Section -->

      <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kegiatan</h2>
          <p>Dibawah ini merupakan kegiatan-kegiatan yang sudah terlaksana oleh ASAR Humanity.</p>
        </div>

     

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/asset/new/img/portfolio/portfolio-1.jpeg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Qurban</h4>
                <div class="portfolio-links">
                  <a href="{{asset('assets/asset/new/img/portfolio/portfolio-1.jpeg')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/asset/new/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <div class="portfolio-links">
                  <a href="{{asset('assets/asset/new/img/portfolio/portfolio-2.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/asset/new/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <div class="portfolio-links">
                  <a href="{{asset('assets/asset/new/img/portfolio/portfolio-3.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/asset/new/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <div class="portfolio-links">
                  <a href="{{asset('assets/asset/new/img/portfolio/portfolio-4.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/asset/new/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <div class="portfolio-links">
                  <a href="{{asset('assets/asset/new/img/portfolio/portfolio-5.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/asset/new/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <div class="portfolio-links">
                  <a href="{{asset('assets/asset/new/img/portfolio/portfolio-6.jpg')}}" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/asset/new/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <div class="portfolio-links">
                  <a href="{{asset('assets/asset/new/img/portfolio/portfolio-7.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/asset/new/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <div class="portfolio-links">
                  <a href="{{asset('assets/asset/new/img/portfolio/portfolio-8.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/asset/new/img/portfolio/portfolio-9.jpg')}}"class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <div class="portfolio-links">
                  <a href="{{asset('assets/asset/new/img/portfolio/portfolio-9.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Portfolio Section -->
    
     <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>ASAR Humanity merupakan organisasi yang bergerak dibidang sosial, kemanusiaan, dan keagamaan. ASAR Humanity hadir dalam bidang kemanusiaan khususnya kebencanaan yang terjadi di Indonesia. ASAR Humanity sudah beberapa kali hadir dalam medan bencana untuk menyalurkan bantuannya seperti bencana gempa bumi Lombok dan Palu, tsunami Banten, tragedi kemanusiaan yang terjadi di Papua dan bencana kemanusiaan lainnya.</p>
        </div>
        <div>
          <h5 style="text-align: center;">Legal Formal : </h5>
            <ul>
              <li><i class="ri-check-double-line"></i>Akta Pendirian Yayasan Asar Humanity Nomor 26 Tanggal 22 November 2018, Notaris :  Nur Qomsah Sukarno, SH</li>
              <li><i class="ri-check-double-line"></i>Keputusan Menteri Hukum dan Hak Asasi Manusia RI Nomor : AHU-0021924.AH.01.04.Tahun 2018, Tanggal 30 November 2018</li>
            </ul>
        </div>
        <div class="row content">
          
          <div class="col-lg-6">
            <h5>VISI</h5>
            <p>
              Menjadi lembaga yang bergerak dibidang kemanusiaan untuk membantu terciptanya masyarakat yang adil dan sentosa.
            </p>
            
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
             <h5>MISI</h5>
            <p>
                Bersama segenap elemen masyarakat terus bergerak bermanfaat dengan membuat program-program yang langsung dirasakan oleh masyarakat dari berbagai kebutuhan.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
   
  </main><!-- End #main -->

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