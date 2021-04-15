<?php $title=' | Donasi'; ?>
@extends('layouts.umum')


@section('content')
<div class="container" style="margin-top:100px;margin-bottom:50px; " data-aos="fade-up">
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
                <select name="kategori" class="form-control" style="border-radius:50px;" required>
                  <option>-- Pilih Kategori --</option>
                  @foreach ($kategori as $key)
                  	<option value="{{ $key->id }}">{{ $key->kategori }}</option>
          				@endforeach
                </select>
              </div>
              <div class="form-group">
                <input type="number" name="jumlah" class="form-control" placeholder="Jumlah Donasi" style="border-radius:50px;" required>
              </div>
              <div class="form-group">
                <input type="text" name="nama_donatur" class="form-control" placeholder="Nama Donatur" style="border-radius:50px;" required>
              </div>
              <div class="form-group">
                <input type="text" name="kontak_donatur" class="form-control" placeholder="Nomor HP" style="border-radius:50px;" required>
              </div>
              <div class="form-group">
    					  <textarea class="form-control" name="alamat" rows="3" style="border-radius:25px;" placeholder="Do'a Khusus"></textarea>
    					</div>
              <br>
              <div class="form-group">
                  <input type="submit" value="Submit" class="btn btn-block btn-warning" data-toggle="modal" data-target="#exampleModal">
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
            <a href='/konfirmasi' class="btn btn-block btn-warning" type="button" name="button" style="max-width:250px">Konfirmasi Yuk!</a>
        </div>
      </center>
    </div>
  </div>
</div>
@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Pembayaran</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Silahkan transfer ke BNI Syariah 8634448885 atas nama ASAR Humanity.</p>
			</div>
		</div>
	</div>
</div>
