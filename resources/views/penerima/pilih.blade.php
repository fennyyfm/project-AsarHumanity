@extends('layouts.master')

@section('content')

<div class="panel-heading">
	<h3 class="panel-title">Pilih Paket</h3>
</div>
<div class="panel-body">
	<form action="/penerima/{{$penerima->id}}/kirim" method="POST">
		{{csrf_field()}}
		<div class="form-group">
            <label>Jenis Paket</label>
            <select name="jenis" class="form-control">
                <option>-- Pilih Jenis Paket --</option>
                @foreach ($jenis as $key)
										@if ($key->jumlah_barang > 0)
                    	<option value="{{ $key->id }}">{{ $key->jenis_barang }}</option>
										@endif
								@endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" placeholder="Jumlah Paket yang Diberikan">
        </div>
		<button type="submit" class="btn btn-warning">Kirim</button>
	</form>
</div>

@endsection
