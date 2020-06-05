<?php $title=' | About Us'; ?>
@extends('layouts.umum');

@section('nav-home') <li class="nav-item"> @endsection
@section('nav-donasi') <li class="nav-item"> @endsection
@section('nav-relawan') <li class="nav-item"> @endsection
@section('nav-daftar') <a class="dropdown-item" href="/formRelawan">Daftar</a> @endsection
@section('nav-login') <a class="dropdown-item" href="/login">Login</a> @endsection
@section('nav-about') <li class="nav-item active"> @endsection

@section('content')
<div class="container" style="margin-top:100px">
  <center>
    <h1>Asar Humanity</h1>
    <h3>Organisasi Non Profit Yang Bergerak Di Bidang Sosial, Kemanusiaan Dan Keagamaan</h3>
  </center>
</div>
<div class="container-fluid" style="margin-top:100px;">
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
@endsection

@section('contact') @include('layouts.includes.contact') @endsection
