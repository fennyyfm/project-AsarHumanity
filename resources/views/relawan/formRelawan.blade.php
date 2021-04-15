<?php $title=' | Pendaftaran Relawan'; ?>
@extends('layouts.umum')

@section('content')
<div class="container" data-aos="fade-up">
  <div class="row">
    <div class="col-sm-6" style="margin-top:150px;">
      <center>
        <h3>Syarat & Ketentuan</h3>
        <ol style="font-size:25px">
          <li></li>
          <li></li>
          <li></li>
        </ol>
      </center>
    </div>
    <div class="col-sm-6">
      <center>
        <div class="jumbotron" style="background-color: white;max-width:400px; margin-top:50px;">
          <form action="/addRelawan" method="POST">
            @csrf
            <fieldset>
              <legend>Formulir Pendaftaran Relawan</legend>
              <hr>
              <div class="form-group">
                <select name="kategori" class="form-control" style="border-radius:50px;" required>
                  <option>-- Pilih Kategori --</option>
                  <option value='relawan'>-- Relawan --</option>
                  <option value='pelatihan'>-- Pelatihan --</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" name="nama_relawan" class="form-control" placeholder="Nama Lengkap" style="border-radius:50px" required>
              </div>
              <div class="form-group">
                <input type="text" name="kontak_relawan" class="form-control" placeholder="Nomor HP" style="border-radius:50px" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="alamat" rows="3" style="border-radius:25px" placeholder="Alamat" required></textarea>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name ="kota" placeholder="Kota" style="border-radius:50px" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name ="provinsi" placeholder="Provinsi" style="border-radius:50px" required>
              </div>
              <br>
              <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-block btn-warning">
              </div>
            </fieldset>
          </form>
        </div>
      </center>
    </div>
  </div>
</div>
@endsection
