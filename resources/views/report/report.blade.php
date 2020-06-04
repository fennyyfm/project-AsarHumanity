<?php $title=' | Report'; ?>
@extends('layouts.umum');

@section('style')
<style>
  .table {
    background-color: white;
    table-layout: auto;
  }
  .btn {
    border-radius:50px;
  }
</style>
@endsection

@section('nav-home') <li class="nav-item"> @endsection
@section('nav-donasi') <li class="nav-item"> @endsection
@section('nav-relawan') <li class="nav-item"> @endsection
@section('nav-daftar') <a class="dropdown-item" href="/formRelawan">Daftar</a> @endsection
@section('nav-login') <a class="dropdown-item" href="/login">Login</a> @endsection
@section('nav-about') <li class="nav-item"> @endsection

@section('content')
<div class="main" style="margin-top:100px;">
  <div class="main-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Report</h3>
                <div class="col-md-3" style="margin-bottom:50px;margin-top:10px;">
                  <select  id='kategori' class="form-control" name="laporan" onchange="return showReport();" style="border-radius:50px">
                    <option value="">- Pilih Kategori Report -</option>
                    <option value="tanggal">Berdasarkan Tanggal</option>
                    <option value="jenis">Berdasarkan Jenis</option>
                  </select>
                </div>
                <div id='tgl'>
                  <table class="table table-hover">
                    <thead class="table-success">
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Jumlah Penerima</th>
                        <th></th>
                      </tr>
                    </thead>
                    @foreach($report['tgl'] as $key)
                      <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $key->tgl_distribusi }}</td>
                        <td>{{ $key->count }}</td>
                        <td>
                          <a class="btn btn-success" href="/detailReport/{{ $key->tgl_distribusi }}" role="button">Lihat Detail</a>
                        </td>
                      </tr>
                    @endforeach
                  </table>
                </div>
                <div id='jns' style='display:none;'>
                  <table class="table">
                    <tr>
                      <th>No</th>
                      <th>Jenis</th>
                      <th>Jumlah</th>
                      <th></th>
                  </tr>
                  @foreach($report['jenis'] as $key)
                    <tr>
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $key->jenis_barang }}</td>
                      <td>{{ $key->sum }}</td>
                      <td>
                        <a class="btn btn-success" href="/detailReport/{{ $key->jenis_barang }}" role="button">Lihat Detail</a>
                      </td>
                    </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
  function showReport() {
    var selectBox = document.getElementById('kategori');
    var pilihKategori = selectBox.options[selectBox.selectedIndex].value;

    if (pilihKategori == "jenis") {
      document.getElementById('jns').style.display = 'block';
      document.getElementById('tgl').style.display = 'none';
    }

    if (pilihKategori == "tanggal") {
      document.getElementById('jns').style.display = 'none';
      document.getElementById('tgl').style.display = 'block';
    }
  }
</script>
@endsection
