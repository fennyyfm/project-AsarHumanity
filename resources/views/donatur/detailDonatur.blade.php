@extends('layouts.master')

@section('content')

<div class="panel-heading">
    <h3 class="panel-title">Data Donatur</h3>
    <div class="panel-body">
        <table class="table table-hover">
            <tr>
                <td>Nama Donatur</td>
                <td>{{ $donatur[0]->nama_donatur }}</td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td>{{ $donatur[0]->kontak_donatur }}</td>
            </tr>
            <tr>
                <td>Tanggal Donasi</td>
                <td>{{ $donatur[0]->tgl_donasi }}</td>
            </tr>
            <tr>
                <td>Jenis Donasi</td>
                <td>{{ $donatur[0]->jenis_donasi }}</td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>{{ $donatur[0]->jumlah }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{ $donatur[0]->status }}</td>
            </tr>
        </table>
        <button class="btn btn-dark"><a href="/riwayatDonasi">Kembali</a></button>
        @if ($donatur[0]->status == 'menunggu konfirmasi')
            <button class="btn btn-dark"><a href="/updateStatus/{{ $donatur[0]->id }}">Update Status</a></button>
        @endif
    </div>
</div>

@endsection
