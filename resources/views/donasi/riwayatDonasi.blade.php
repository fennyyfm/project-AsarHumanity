@extends('layouts.master')

@section('content')

<div class="panel-heading">
    <h3 class="panel-title">Riwayat Donasi</h3>
</div>
<div class="panel-body">
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
                    <a href="/detailDonatur/{{ $key->id }}" class="btn btn-warning">Lihat Detail</a>
                    @if ($key->status == 'menunggu konfirmasi')
                        <a href="/updateStatus/{{ $key->id }}" class="btn btn-warning">Update Status</a>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection
