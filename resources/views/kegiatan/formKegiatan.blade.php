@extends('layouts.master')

@section('content')

<div class="panel-heading">
	<h3 class="panel-title">Form Tambah Kegiatan</h3>
	<p class="msg">{{ session('msg') }}</p>
</div>
<div class="panel-body">
	<form action="/tambahKegiatan" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="form-group">
			<label>Tanggal Kegiatan</label>
			<input type="date" class="form-control" name ="tgl">
		</div>
		<div class="form-group">
			<label>Nama Kegiatan</label>
			<input type="text" class="form-control" name ="nama">
		</div>
		<div class="form-group">
			<label>Waktu Kegiatan</label>
			<input type="time" class="form-control" name ="waktu">
		</div>
		<div class="form-group">
			<label>Lokasi Kegiatan</label>
			<input type="text" class="form-control" name ="lokasi">
		</div>
		<div class="form-group">
			<label>Foto Kegiatan</label>
			<input type="file" class="form-control" name ="fileToUpload" id ="fileToUpload">
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<input type="text" class="form-control" name ="keterangan">
		</div>
		<input type="submit" class="btn btn-warning" value="Submit">
	</form>
</div>

@endsection
