@extends('layouts.master')

@section('content')

<div class="panel-heading">
    <h3 class="panel-title">Data Pelatihan</h3>
    <div class="panel-body">
        <table class="table table-hover">
            <tr>
                <td>Nama Pelatihan</td>
                <td>{{ $pelatihan[0]->nama_pelatihan }}</td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td>{{ $pelatihan[0]->kontak_pelatihan }}</td>
            </tr>
            <tr>
                <td>Tanggal Donasi</td>
                <td>{{ $pelatihan[0]->tgl_daftar }}</td>
            </tr>
            <tr>
                <td>Jenis Donasi</td>
                <td>{{ $pelatihan[0]->alamat }}</td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>{{ $pelatihan[0]->kota }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{ $pelatihan[0]->provinsi }}</td>
            </tr>
        </table>
        <button class="btn btn-dark"><a href="/listPelatihan">Kembali</a></button>
    </div>
</div>

@endsection
