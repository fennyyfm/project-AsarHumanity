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
			<th>Kontak Penerima</th>
			<th>Daerah</th>
			<th>Alamat</th>
			<th>Jumlah Paket Diterima</th>
			<th></th>
		</tr>
		@foreach($data_penerima as $penerima)
		<tr>
            <td>{{ $loop->index + 1 }}</td>
			<td>{{$penerima->nama_penerima}}</td>
			<td>{{$penerima->kontak_penerima}}</td>
			<td>{{$penerima->daerah}}</td>
			<td>{{$penerima->alamat}}</td>
			<td>{{$penerima->jumlah_menerima}}</td>
			<td>
                <a href="/penerima/{{$penerima->id_penerima}}/pilih" class="btn btn-success btn-sm">Pilih</a>
			</td>
        </tr>
        @endforeach
	</table>
</div>

@endsection
