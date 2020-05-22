@extends('layouts.master')

@section('content')

<div class="panel-heading">
    <h3 class="panel-title">List Barang</h3>
    <div class="right">
        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr-plus-circle"></i>Tambah Jenis</button>
    </div>
</div>
<div class="panel-body">
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Jenis</th>
            <th>Jumlah</th>
            <th></th>
        </tr>
        @foreach($jenis as $key)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $key->jenis_donasi }}</td>
                <td>{{ $key->jumlah_donasi }}</td>
                <td>
                    <a href="/formStok/{{ $key->id }}" class="btn btn-warning btn-sm">Tambah Jumlah</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH JENIS BARANG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/tambahBarang" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="jenis">Jenis Barang</label>
                        <input type="text" class="form-control" name ="jenis" placeholder="Jenis Barang">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control" name=" jumlah" placeholder="Jumlah">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
                </form>
        </div>
    </div>
</div>

