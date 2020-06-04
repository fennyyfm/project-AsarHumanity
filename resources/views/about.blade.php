<!DOCTYPE html>
<html lang="en">
<head>
  <title>Asar Humanity</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <style>
    body {
      background-image: url(<?php echo asset('admin/assets/asar/cb.png') ?>);
    }
    .card {
      max-width: 300px;
      min-width: 250px;
    }
    .card-img-top {
      margin: 10px 10px 10px 10px;
      height: 200px;
      width: 200px;
      align-self: center;
    }
    .card-footer {
      text-align: right;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="/">
      <img src="<?php echo asset('admin/logo-asar.jpg') ?>" width="100" alt="" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/formDonasi">Donasi</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Relawan
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/formRelawan">Daftar</a>
            <a class="dropdown-item" href="/login">Login</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/about">About Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container" style="margin-top:100px">
    <center>
      <h1>Asar Humanity</h1>
      <h3>Organisasi Non Profit Yang Bergerak Di Bidang Sosial, Kemanusiaan Dan Keagamaan</h3>
    </center>
  </div>
  <div class="container-fluid" style="margin-top:100px;margin-left:50px;margin-right:50px">
    <div class="row">
      <div class="col-sm-6">
        <center>
          <div class="col-sm-6">
            <h3>VISI</h3>
            <h5>Menjadi lembaga yang bergerak dibidang kemanusiaan untuk membantu terciptanya masyarakat yang adil dan sentosa.</h5>
          </div>
        </center>
      </div>
      <div class="col-sm-6">
        <center>
          <div class="col-sm-6">
            <h3>MISI</h3>
            <h5>Bersama segenap elemen masyarakat terus bergerak bermanfaat dengan membuat program-program yang langsung dirasakan oleh masyarakat dari berbagai kebutuhan.</h5>
          </div>
        </center>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="container-fluid" style="margin-top:150px;">
      <img src="<?php echo asset('admin/logoasar.png') ?>" width="250" alt="" loading="lazy">
      <div class="row" style="margin-top:50px;margin-bottom:50px">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <center><h3>Legal Formal</h3></center><br>
          <h5>
            <ol>
              <li>Akta Pendirian Yayasan Asar Humanity Nomor 26 Tanggal 22 November 2018, Notaris :  Nur Qomsah Sukarno, SH</li>
              <li>Keputusan Menteri Hukum dan Hak Asasi Manusia RI Nomor : AHU-0021924.AH.01.04.Tahun 2018, Tanggal 30 November 2018</li>
            </ol>
          </h5>
        </div>
      </div>
      <img src="<?php echo asset('admin/logoasar.png') ?>" width="250" alt="" loading="lazy" align='right'>
    </div>
  </div>
</body>
<footer>
  <nav class="navbar-success bg-success" style="margin-top:150px">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3" align='center'>
          <img src="<?php echo asset('admin/logoasar.png') ?>" width="150" alt="" loading="lazy">
        </div>
        <div class="col-sm-6" style="margin-top:25px">
          <center>
            <h5>Alamat</h5>
            <br>
            <i class='fas fa-map-marker-alt' style='font-size:30px'></i>
            <p>Graha Asar : JL.Raya Tapos No.17A Tapos, Kota Depok,Jawa Barat</p>
          </center>
        </div>
        <div class="col-sm-3" style="margin-top:50px">
          <center>
            <h5>Contact Us</h5>
            <a href="https://www.facebook.com/asarhumanity/" class='btn fab fa-facebook-square' style='font-size:35px'></a>
            <a href="https://www.instagram.com/asarhumanity/" class='btn fab fa-instagram' style='font-size:35px'></a>
            <a href="https://www.youtube.com/channel/UCNFDeFczw7IwAL3EXCuVE9A" class='btn fab fa-youtube' style='font-size:35px'></a>
          </center>
        </div>
      </div>
    </div>
    <p class="copyright"><center>&copy; Asar Humanity 2020</center></p>
  </nav>
</footer>
</html>
