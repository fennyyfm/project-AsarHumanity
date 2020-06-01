@extends('layouts.master')

@section('content')

<div class="panel-heading">
    <h3 class="panel-title">Data Relawan</h3>
    <div class="panel-body">
        <table class="table table-hover">
            <tr>
                <td>Nama Relawan</td>
                <td>{{ $relawan['data'][0]->nama_relawan }}</td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td>{{ $relawan['data'][0]->kontak_relawan }}</td>
            </tr>
            <tr>
                <td>Tanggal Donasi</td>
                <td>{{ $relawan['data'][0]->tgl_daftar }}</td>
            </tr>
            <tr>
                <td>Jenis Donasi</td>
                <td>{{ $relawan['data'][0]->alamat }}</td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>{{ $relawan['data'][0]->kota }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{ $relawan['data'][0]->provinsi }}</td>
            </tr>
        </table>
        <hr>
        <div>
          <center><h4>Absensi</h4></center>
          <table class="table">
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Aktivitas</th>
              <th>keterangan</th>
            </tr>
            @foreach($relawan['absensi'] as $key)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $key->tgl_absensi }}</td>
                    <td>{{ $key->aktivitas }}</td>
                    <td>{{ $key->keterangan }}</td>
                </tr>
            @endforeach
          </table>
        </div>
        <br>
        <center><button class="btn btn-dark"><a href="/listRelawan">Kembali</a></button></center>
    </div>
</div>

@endsection
