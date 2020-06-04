<?php $title=' | Pendaftaran Relawan'; ?>
@extends('layouts.umum');

@section('nav-home')
<style>
  .form-control {
    border-radius: 50px;
  }
</style>
@endsection

@section('nav-home') <li class="nav-item"> @endsection
@section('nav-donasi') <li class="nav-item"> @endsection
@section('nav-relawan') <li class="nav-item active"> @endsection
@section('nav-daftar') <a class="dropdown-item active" href="/formRelawan">Daftar</a> @endsection
@section('nav-login') <a class="dropdown-item" href="/login">Login</a> @endsection
@section('nav-about') <li class="nav-item"> @endsection

@section('content')
<div class="container-fluid" style="margin-top:100px">
  <div class="row">
    <div class="col-sm-6" style="margin-top:50px;margin-left:200px">
      <h3>Syarat & Ketentuan</h3>
      <ol style="font-size:25px">
        <li></li>
        <li></li>
        <li></li>
      </ol>
    </div>
      <div class="col-sm-3">
        <div class="jumbotron" style="background-color: white">
          <form action="/addRelawan" method="POST">
            @csrf
            <fieldset>
              <legend>Formulir Pendaftaran Relawan</legend>
              <hr>
              <div class="form-group">
                <input type="text" name="nama_relawan" class="form-control" placeholder="Nama Lengkap" required>
              </div>
              <div class="form-group">
                <input type="text" name="kontak_relawan" class="form-control" placeholder="Nomor HP" required>
              </div>
              <div class="form-group">
    					  <textarea class="form-control" name="alamat" rows="3" style="border-radius:25px" required>Alamat</textarea>
    					</div>
    					<div class="form-group">
  					    <input type="text" class="form-control" name ="kota" placeholder="Kota" required>
    					</div>
    					<div class="form-group">
  					    <input type="text" class="form-control" name ="provinsi" placeholder="Provinsi" required>
    					</div>
              <br>
              <div class="form-group">
                <input type="submit" value="submit" class="btn btn-success btn-block" style="border-radius:50px" required>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
  </div>
</div>
@endsection
