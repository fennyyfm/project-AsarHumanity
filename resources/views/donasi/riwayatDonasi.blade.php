@extends('layouts.master')

@section('content')

<div class="panel-heading">
    <h3 class="panel-title">Riwayat Donasi</h3>

    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Status</th>
            <th></th>
        </tr>
        @foreach($donatur as $key)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $key->tgl_donasi }}</td>
                <td>{{ $key->nama_donatur }}</td>
                <td>{{ $key->status }}</td>
                <td>
                    <button type="button"class="btn btn-warning btn-sm"><a href="/detailDonatur/{{ $key->id }}">Lihat Detail</a></button>
                    @if ($key->status == 'menunggu konfirmasi')
                    <button type="button" class="btn btn-success btn-sm"><a href="/updateStatus/{{ $key->id }}">Update Status</a></button>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection
