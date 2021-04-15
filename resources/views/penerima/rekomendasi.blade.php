@extends('layouts.master')

@section('content')

<div class="panel-heading">
	<h3 class="panel-title">Data Penerima</h3>
</div>
<div class="panel-body">
	<table class="table table-hover">
		<tr>
      <th>No</th>
			<th>Nama Penerima</th>
			<th>Alamat</th>
			<th>Kota</th>
			<th>Provinsi</th>
			<th>Jumlah Paket Diterima</th>
			<th></th>
		</tr>
		@foreach($data_penerima as $penerima)
			<tr>
        <td>{{ $loop->index + 1 }}</td>
				<td>{{$penerima->nama_penerima}}</td>
				<td>{{$penerima->alamat}}</td>
				<td>{{$penerima->kota}}</td>
				<td>{{$penerima->provinsi}}</td>
				<td>{{$penerima->jumlah_menerima}}</td>
				<td>
					<a href="/penerima/{{$penerima->id}}/pilih" class="btn btn-warning">Pilih</a>
				</td>
	    </tr>
    @endforeach
	</table>
</div>

@endsection
