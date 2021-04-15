@extends('layouts.master')

@section('content')

<div class="panel-heading">
    <h2 class="panel-title">Daftar Pelatihan</h2>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kota</th>
                <th></th>
            </tr>
            @foreach($pelatihan as $key)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $key->nama_pelatihan }}</td>
                    <td>{{ $key->kota }}</td>
                    <td>
                        <a href="/detailPelatihan/{{ $key->id }}" class="btn btn-warning">Lihat Detail</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
