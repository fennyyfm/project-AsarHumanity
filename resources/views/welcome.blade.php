<!DOCTYPE html>
<html lang="en">
<head>
  <title>Asar Humanity</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    .pic {
      border-radius: 50%;
      width: 400px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="/">
      <img src="<?php echo asset('admin/logo-asar.jpg') ?>" width="100" alt="" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
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
        <li class="nav-item">
          <a class="nav-link" href="/about">About Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container" style="margin-top:100px">
    <div class="row">
      <div class="col-sm-6">
        <img src="<?php echo asset('admin/logoasar.png') ?>" width="200" alt="" loading="lazy" align='right'>
      </div>
      <div class="col-sm-6">
        <br><br>
        <h1>Asar Humanity</h1>
        <p>Tebar Energi Kebaikan, Raih Lipatan Pahala</p>
        <center>
          <a href="/reportKegiatan" class="btn btn-success" style="border-radius:50px">Kegiatan</a>
          <a href="/report" class="btn btn-success" style="border-radius:50px">Report <i class='fas fa-angle-double-right'></i></a>
        </center>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="margin-top:100px">
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="<?php echo asset('admin/assets/asar/donasi-sembako-1.png') ?>" height="200" alt="" loading="lazy">
        <div class="card-body">
          <h5 class="card-title">Berbagi Sembako</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer">
          <a href="#">read more <i class='fas fa-angle-double-right'></i></a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="<?php echo asset('admin/assets/asar/donasi-makanan.png') ?>" width="100" alt="" loading="lazy">
        <div class="card-body">
          <h5 class="card-title">Berbagi Makanan</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer">
          <a href="#">read more <i class='fas fa-angle-double-right'></i></a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="<?php echo asset('admin/assets/asar/zakat-Fitrah.png') ?>" width="100" alt="" loading="lazy">
        <div class="card-body">
          <h5 class="card-title">Zakat Fitrah</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer">
          <a href="#">read more <i class='fas fa-angle-double-right'></i></a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="<?php echo asset('admin/assets/asar/zakat-mal.png') ?>" width="100" alt="" loading="lazy">
        <div class="card-body">
          <h5 class="card-title">Zakat Maal</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer">
          <a href="#">read more <i class='fas fa-angle-double-right'></i></a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="<?php echo asset('admin/assets/asar/ambulan-asar.png') ?>" width="100" alt="" loading="lazy">
        <div class="card-body">
          <h5 class="card-title">Ambulan Gratis</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer">
          <a href="#">read more <i class='fas fa-angle-double-right'></i></a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="<?php echo asset('admin/assets/asar/donasi-dunia-islam-1.png') ?>" width="100" alt="" loading="lazy">
        <div class="card-body">
          <h5 class="card-title">Infaq Dunia Islam</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer">
          <a href="#">read more <i class='fas fa-angle-double-right'></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="margin-top:350px">
    <center><h3>Asar Humanity mengajak kamu semua, untuk ambil peran dan memberikan manfaat untuk sesama</h3></center>
  </div>
  <div class="container-fluid" style="margin-top:350px;margin-bottom:50px">
    <div class="row">
      <div class="col-sm-4">
        <img src="<?php echo asset('admin/assets/asar/BERBAGI-MAKAN-1024x682.jpg') ?>" alt="" class="pic">
      </div>
      <div class="col-sm-4">
        <img src="<?php echo asset('admin/assets/asar/MAKAN3-1024x682.jpg') ?>" alt="" class="pic">
      </div>
      <div class="col-sm-4">
        <img src="<?php echo asset('admin/assets/asar/MAKAN4-1024x682.jpg') ?>" alt="" class="pic">
      </div>
    </div>
  </div>
</body>
<footer>
  <nav class="navbar-success bg-success">
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
