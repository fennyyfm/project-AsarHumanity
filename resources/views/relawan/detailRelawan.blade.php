@extends('layouts.master')

@section('content')

<div class="panel-heading">
    <h3 class="panel-title">Data Relawan</h3>
    <div class="panel-body">
        <table class="table table-hover">
            <tr>
                <td>Nama Relawan</td>
                <td>{{ $relawan[0]->nama_relawan }}</td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td>{{ $relawan[0]->kontak_relawan }}</td>
            </tr>
            <tr>
                <td>Tanggal Donasi</td>
                <td>{{ $relawan[0]->tgl_daftar }}</td>
            </tr>
            <tr>
                <td>Jenis Donasi</td>
                <td>{{ $relawan[0]->alamat }}</td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>{{ $relawan[0]->kota }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{ $relawan[0]->provinsi }}</td>
            </tr>
        </table>
        <button class="btn btn-dark"><a href="/listRelawan">Kembali</a></button>
    </div>
</div>

@endsection
