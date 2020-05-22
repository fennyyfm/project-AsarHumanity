@extends('layouts.master')

@section('content')

<div class="panel-heading">
    <h3 class="panel-title">Daftar Donasi Menunggu Konfirmasi</h3>
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
                        <button class='btn btn-warning'><a href="/detailDonatur/{{ $key->id }}">Lihat Detail</a></button>
                        <button class='btn btn-success'><a href="/updateStatus/{{ $key->id }}">Update Status</a></button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
