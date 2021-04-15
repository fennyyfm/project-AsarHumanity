@extends('layouts.master')

@section('content')

<div class="panel-heading">
	<h3 class="panel-title">Data Penerima</h3>
	<div class="right">
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Tambah data penerima</button>
	</div>

</div>
<div class="panel-body">
	<table class="table table-hover">
		<tr>
			<th>Nama Penerima</th>
			<th>Kota</th>
			<th>Provinsi</th>
			<th>Jumlah Menerima</th>
			<th></th>
		</tr>
		@foreach($data_penerima as $penerima)
		<tr>
			<td>{{$penerima->nama_penerima}}</td>
			<td>{{$penerima->kota}}</td>
			<td>{{$penerima->provinsi}}</td>
			<td>{{$penerima->jumlah_menerima}}</td>
			<td>
				<a href="/penerima/{{$penerima->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
				<!-- <a href="/penerima/printpenerimaid/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a> !-->
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="/penerima/create" method="POST">
				    {{csrf_field()}}
				    <div class="form-group">
					   	<label for="nama_penerima">Nama Penerima</label>
					    <input type="text" class="form-control" name ="nama_penerima" placeholder="Nama Penerima">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
					   	<textarea class="form-control" name="alamat" rows="3"placeholder="Alamat Lengkap"></textarea>
					</div>
					<div class="form-group">
					   	<label for="kota">Kota</label>
					    <input type="text" class="form-control" name ="kota" placeholder="Kota">
					</div>
					<div class="form-group">
					   	<label for="provinsi">Provinsi</label>
					    <input type="text" class="form-control" name ="provinsi" placeholder="Provinsi">
					</div>
					<div class="form-group">
					    <label for="jumlah_menerima">Jumlah menerima</label>
					    <input type="number" class="form-control" name="jumlah_menerima" placeholder="Berapa kali?">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-success">Submit</button>
			</div>
				</form>
		</div>
	</div>
</div>
