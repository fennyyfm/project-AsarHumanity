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
                <td>Kategori</td>
                <td>{{ $donatur[0]->kategori }}</td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>{{ $donatur[0]->jumlah }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{ $donatur[0]->status }}</td>
            </tr>
            @if ($donatur[0]->status == 'sudah konfirmasi')
              <tr>
                  <td>Tanggal Konfirmasi</td>
                  <td>{{ $donatur[0]->tgl_konfirmasi }}</td>
              </tr>
            @endif
        </table>
        <a href="/riwayatDonasi" class="btn btn-success">Kembali</a>
        @if ($donatur[0]->status == 'menunggu konfirmasi')
            <a href="/updateStatus/{{ $donatur[0]->id }}" class="btn btn-warning">Update Status</a>
        @endif
    </div>
</div>

@endsection
