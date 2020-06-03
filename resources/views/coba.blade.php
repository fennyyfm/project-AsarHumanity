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
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Donasi</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Relawan
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Daftar</a>
            <a class="dropdown-item" href="#">Login</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <img src="<?php echo asset('admin/assets/asar/logo-asar-humanity2-1-300x300.png') ?>" width="200" alt="" loading="lazy" align='right'>
      </div>
      <div class="col-sm-6">
        <br>
        <h1>Asar Humanity</h1>
        <p>Tebar Energi Kebaikan, Raih Lipatan Pahala</p>
        <center>
          <button class="btn btn-success" type="button" name="button" style="border-radius:50px">Kegiatan</button>
          <button class="btn btn-success" type="button" name="button" style="border-radius:50px">Report <i class='fas fa-angle-double-right'></i></button>
        </center>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="margin-top:150px">
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
  <div class="container" style="margin-top:300px">
    <center><h3>Asar Humanity mengajak kamu semua, untuk ambil peran dan memberikan manfaat untuk sesama.</h3></center>
  </div>

</body>
</html>
