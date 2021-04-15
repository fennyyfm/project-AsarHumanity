@extends('layouts.master')

@section('content')

<div class="panel-heading">
	<h3 class="panel-title">Edit Kategori</h3>
</div>
<div class="panel-body">
	<form action="/editKategori/{{ $jenis[0]->id }}" method="POST">
		{{csrf_field()}}
		<div class="form-group">
			<label for="jenis_barang">Kategori</label>
			<input type="text" class="form-control" name ="kategori" value="{{$jenis[0]->kategori}}">
		</div>
		<div class="form-group">
			<label for="jumlah_barang">Jumlah</label>
			<input type="text" class="form-control" name ="jumlah_uang" value="{{$jenis[0]->jumlah_uang}}">
		</div>
		<button type="submit" class="btn btn-warning">Update</button>
	</form>
</div>

@endsection
