@extends('layouts.master')

@section('content')

<div class="panel-heading">
    <form action="/tambahStok/{{ $jenis[0]->id }}" method="POST">
        @csrf
        <fieldset>
            <legend>FORM TAMBAH STOK BARANG</legend>
            <div class=" col-lg-5">
                <table class="table table-hover">
                    <tr>
                        <td>Jenis Barang</td>
                        <td>{{ $jenis[0]->jenis_barang }}</td>
                    </tr>
                    <tr>
                        <td>jumlah Tersedia</td>
                        <td>{{ $jenis[0]->jumlah_barang }}</td>
                    </tr>
                    <tr>
                        <td>Tambah Jumlah</td>
                        <td><input type="number" name="jumlah" class="form-control"></td>
                    </tr>
                </table>
                <div class="form-group">
                    <input type="submit" value="submit" class="btn btn-dark">
                </div>
            </div>
        </fieldset>
    </form>
</div>

@endsection
