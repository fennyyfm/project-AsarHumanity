<?php $title=' | Donasi'; ?>
@extends('layouts.umum');

@section('nav-home') <li class="nav-item"> @endsection
@section('nav-donasi') <li class="nav-item active"> @endsection
@section('nav-relawan') <li class="nav-item"> @endsection
@section('nav-daftar') <a class="dropdown-item" href="/formRelawan">Daftar</a> @endsection
@section('nav-login') <a class="dropdown-item" href="/login">Login</a> @endsection
@section('nav-about') <li class="nav-item"> @endsection

@section('content')
<div class="container" style="margin-top:100px;margin-bottom:50px;">
  <div class="row">
    <div class="col-sm-6">
      <center>
          <div class="jumbotron" style="background-color: white;max-width:400px">
            <form action="/add" method="POST">
                @csrf
                <fieldset>
                    <legend>Formulir Donasi</legend>
                    <hr>
                      <div class="form-group">
                        <input type="text" name="nama_donatur" class="form-control" placeholder="Nama Donatur" style="border-radius:50px" required>
                      </div>
                      <div class="form-group">
                        <input type="text" name="kontak_donatur" class="form-control" placeholder="Nomor HP" style="border-radius:50px" required>
                      </div>
                      <div class="form-group">
                        <input type="number" name="jumlah" class="form-control" placeholder="Jumlah Donasi" style="border-radius:50px" required>
                      </div>
                      <div class="form-group">
            					  <textarea class="form-control" name="alamat" rows="3" style="border-radius:25px" placeholder="Do'a Khusus"></textarea>
            					</div>
                      <br>
                        <div class="form-group">
                            <input type="submit" value="submit" class="btn btn-success btn-block" style="border-radius:50px">
                        </div>
                </fieldset>
            </form>
        </div>
      </center>
    </div>
    <div class="col-sm-6" style="margin-top:150px;">
      <center>
        <div class="col-sm-8">

            <h2>Sudah Donasi?</h2><br>
            <button class="btn btn-success btn-block btn-lg" type="button" name="button" style="border-radius: 50px;max-width:250px">Konfirmasi Yuk!</button>
        </div>
      </center>
    </div>
  </div>
</div>
@endsection
