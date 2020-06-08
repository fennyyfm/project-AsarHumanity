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
	@yield('style')
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
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

      </ul>
    </div>
    <div class="container-fluid">
      <div class="navbar-btn">
        <button type="button" class="btn-toggle-fullwidth" data-toggle="collapse" data-target="#sidebar-nav"><i class="fa fa-circle"></i></button>
      </div>
      <form class="navbar-form navbar-left">

      </form>
      <div id="navbar-menu">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="lnr lnr-user"></span><span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
            <ul class="dropdown-menu">
            <!--	<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
              <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
              <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li> !-->
              <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="sidebar-nav" class="sidebar">
  	<div class="sidebar-scroll">
  		<nav>
  			<ul class="nav" id="side">
  				<li><a href="/dashboard" class="bar active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
  				<li><a href="/penerima" class="bar"><i class="lnr lnr-download"></i> <span>Penerima</span></a></li>
  				<li><a href="/listBarang" class="bar"><i class="fa fa-shopping-bag"></i> <span>Barang</span></a></li>
  				<!--<li><a href="/konfirmasiDonasi" class="bar"><i class="lnr lnr-star"></i> <span>Konfirmasi Donasi</span></a></li>!-->
  				<li><a href="/riwayatDonasi" class="bar"><i class="lnr lnr-history"></i> <span>Riwayat Donasi</span></a></li>
  				<li><a href="/rekomendasi" class="bar"><i class="lnr lnr-bullhorn"></i> <span>Distribusi</span></a></li>
  				<li><a href="/listRelawan" class="bar"><i class="fa fa-group"></i> <span>Relawan</span></a></li>
  				<li><a href="/listPelatihan" class="bar"><i class="fa fa-group"></i> <span>Pelatihan</span></a></li>
  				<li><a href="/formKegiatan" class="bar"><i class="fa fa-book"></i> <span> Form Tambah Kegiatan</span></a></li>
  			</ul>
  		</nav>
  	</div>
  </div>

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
