<!DOCTYPE html>
<html lang="en">
<head>
  <title>Asar Humanity | Donasi</title>
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
    .form-control {
       border-radius: 50px;
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
        <li class="nav-item">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
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
          <a class="nav-link" href="#">About Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid" style="margin-top:100px">
    <center>
      <div class="col-sm-3">
        <div class="jumbotron" style="background-color: white">
          <form action="/add" method="POST">
              @csrf
              <fieldset>
                  <legend>Formulir Donasi</legend>
                  <hr>
                    <div class="form-group">
                        <label>Nama Donatur</label>
                        <input type="text" name="nama_donatur" class="form-control" placeholder="Nama Donatur">
                    </div>
                    <div class="form-group">
                        <label>Nomor HP</label>
                        <input type="text" name="kontak_donatur" class="form-control" placeholder="Nomor HP">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Donasi</label>
                        <input type="number" name="jumlah" class="form-control" placeholder="Jumlah Donasi">
                    </div>
                    <br>
                      <div class="form-group">
                          <input type="submit" value="submit" class="btn btn-success btn-block" style="border-radius:50px">
                      </div>
              </fieldset>
          </form>
        </div>
      </div>
    </center>
  </div>
</body>
<footer>
  <nav class="navbar navbar-light bg-light fixed-bottom">
    <p class="copyright"><center>&copy; Asar Humanity 2020</center></p>
  </nav>
</footer>
</html>
