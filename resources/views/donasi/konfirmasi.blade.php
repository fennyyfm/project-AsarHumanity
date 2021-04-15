<?php $title=' | Report'; ?>
@extends('layouts.umum')

@section('style')
<style>
  .table {
    background-color: white;
    table-layout: auto;
  }
  .btn {
    border-radius:50px;
    color:white;
    background-color:#E3A425;
  }
</style>
@endsection

@section('nav-home') <li class="nav-item"> @endsection
@section('nav-donasi') <li class="nav-item"> @endsection
@section('nav-relawan') <li class="nav-item dropdown"> @endsection
@section('nav-daftar') <a class="dropdown-item" href="/formRelawan">Daftar</a> @endsection
@section('nav-login') <a class="dropdown-item" href="/login">Login</a> @endsection
@section('nav-about') <li class="nav-item"> @endsection

@section('content')
<div class="container" style="margin-top:100px;">
  <div class="jumbotron justify-content-center">
    <h2>Silahkan Konfirmasi Melalui Whatsapp 081290559351</h2>
  </div>
</div>
@endsection
