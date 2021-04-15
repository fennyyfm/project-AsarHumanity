@extends('layouts.master')

@section('content')
<div class="panel-heading">
    <h3 class="panel-title">Data Relawan</h3>
</div>
<div class="panel-body">
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
                        <form action="/detailRelawan/{{ $key->id }}">
                            <input type="submit" value="Lihat Detail" class="btn btn-warning"  />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
