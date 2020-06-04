<?php $title=' | home'; ?>
@extends('layouts.umum');

@section('style')
<style>
  .card {
    max-width: 285px;
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
@endsection

@section('nav-home') <li class="nav-item active"> @endsection
@section('nav-donasi') <li class="nav-item"> @endsection
@section('nav-relawan') <li class="nav-item"> @endsection
@section('nav-daftar') <a class="dropdown-item" href="/formRelawan">Daftar</a> @endsection
@section('nav-login') <a class="dropdown-item" href="/login">Login</a> @endsection
@section('nav-about') <li class="nav-item"> @endsection

@section('content')
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
    <center>
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
    </center>
    <center>
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
    </center>
    <center>
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
    </center>
    <center>
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
    </center>
    <center>
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
    </center>
    <center>
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
  </center>
  </div>
</div>
<div class="container" style="margin-top:250px">
  <center><h3>Asar Humanity mengajak kamu semua, untuk ambil peran dan memberikan manfaat untuk sesama</h3></center>
</div>
<div class="container-fluid" style="margin-top:450px;margin-bottom:50px">
  <div class="row">
    <div class="col-sm-4">
      <center><img src="<?php echo asset('admin/assets/asar/BERBAGI-MAKAN-1024x682.jpg') ?>" alt="" class="pic"></center>
    </div>
    <div class="col-sm-4">
      <center><img src="<?php echo asset('admin/assets/asar/MAKAN3-1024x682.jpg') ?>" alt="" class="pic"></center>
    </div>
    <div class="col-sm-4">
      <center><img src="<?php echo asset('admin/assets/asar/MAKAN4-1024x682.jpg') ?>" alt="" class="pic"></center>
    </div>
  </div>
</div>
@endsection

@section('contact') @include('layouts.includes.contact') @endsection
