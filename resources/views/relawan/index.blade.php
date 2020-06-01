@extends('layouts.master')

@section('content')

<div class="panel-heading">
    <h3 class="panel-title">Daftar Relawan</h3>
        <table class="table table-hover">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kota</th>
                <th></th>
            </tr>
            @foreach($relawan as $key)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $key->nama_relawan }}</td>
                    <td>{{ $key->kota }}</td>
                    <td>
                        <button class='btn btn-warning'><a href="/detailRelawan/{{ $key->id }}">Lihat Detail</a></button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
