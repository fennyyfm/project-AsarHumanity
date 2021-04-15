@extends('layouts.master')

@section('content')

<div class="panel-heading">
    <form action="/tambahStokKategori/{{ $jenis[0]->id }}" method="POST">
        @csrf
        <fieldset>
            <legend>FORM TAMBAH JUMLAH KATEGORI</legend>
            <div class=" col-lg-5">
                <table class="table table-hover">
                    <tr>
                        <td>Kategori</td>
                        <td>{{ $jenis[0]->kategori }}</td>
                    </tr>
                    <tr>
                        <td>Jumlah Tersedia</td>
                        <td>{{ $jenis[0]->jumlah_uang }}</td>
                    </tr>
                    <tr>
                        <td>Tambah Jumlah</td>
                        <td><input type="number" name="jumlah" class="form-control"></td>
                    </tr>
                </table>
                <div class="form-group">
                    <input type="Submit" value="submit" class="btn btn-warning">
                </div>
            </div>
        </fieldset>
    </form>
</div>

@endsection
