@extends('layouts.master')

@section('content')

<div class="panel-heading">
	<h3 class="panel-title">Edit data penerima</h3>
</div>
<div class="panel-body">
	<form action="/penerima/{{$penerima->id}}/update" method="POST">
		{{csrf_field()}}
		<div class="form-group">
			<label for="nama_depan">Nama Penerima</label>
			<input type="text" class="form-control" name ="nama_penerima" value="{{$penerima->nama_penerima}}" placeholder="Nama Penerima">
		</div>
		<div class="form-group">
			<label for="alamat">Alamat</label>
			<textarea class="form-control"  name="alamat" rows="3">{{$penerima->alamat}}</textarea>
		</div>
		<div class="form-group">
			<label for="daerah">Kota</label>
			<input type="text" class="form-control" name="kota" value="{{$penerima->kota}}" placeholder="Kota">
		</div>
		<div class="form-group">
			<label for="daerah">Provinsi</label>
			<input type="text" class="form-control" name="provinsi" value="{{$penerima->provinsi}}" placeholder="Provinsi">
		</div>
		<div class="form-group">
			<label for="telah_menerima">Jumlah menerima</label>
			<input type="number" class="form-control" name="jumlah_menerima" value="{{$penerima->jumlah_menerima}}"placeholder="Telah menerima">
		</div>
		<button type="submit" class="btn btn-warning">Update</button>
	</form>
</div>

@endsection
