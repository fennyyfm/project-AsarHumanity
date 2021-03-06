@extends('layouts.master')

@section('content')

<div class="panel-heading">
	<h3 class="panel-title">Edit data penerima</h3>
</div>
<div class="panel-body">
	<form action="/editBarang/{{ $jenis[0]->id }}" method="POST">
		{{csrf_field()}}
		<div class="form-group">
			<label for="jenis_barang">Jenis Barang</label>
			<input type="text" class="form-control" name ="jenis_barang" value="{{$jenis[0]->jenis_barang}}">
		</div>
		<div class="form-group">
			<label for="jumlah_barang">Jumlah Barang</label>
			<input type="text" class="form-control" name ="jumlah_barang" value="{{$jenis[0]->jumlah_barang}}">
		</div>
		<button type="submit" class="btn btn-warning">Update</button>
	</form>
</div>

@endsection
