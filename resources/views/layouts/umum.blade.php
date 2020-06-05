<!DOCTYPE html>
<html lang="en">
<head>
  <title>Asar Humanity<?php echo $title; ?></title>
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
  </style>
	@yield('style');
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
				@yield('nav-home')
			    <a class="nav-link" href="/">Home</a>
			  </li>
			  @yield('nav-donasi')
			    <a class="nav-link" href="/formDonasi">Donasi</a>
			  </li>
			  @yield('nav-relawan')
			    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			      Relawan
			    </a>
			    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			      @yield('nav-daftar')
			      @yield('nav-login')
			    </div>
			  </li>
			  @yield('nav-about')
			    <a class="nav-link" href="/about">About Us</a>
			  </li>

      </ul>
    </div>
  </nav>
	@yield('content')
</body>
<footer>
  <nav class="nav">
    <div class="container-fluid">
      @yield('contact')
      <p class="copyright"><center>&copy; Asar Humanity 2020</center></p>
    </div>
  </nav>
</footer>
</html>
