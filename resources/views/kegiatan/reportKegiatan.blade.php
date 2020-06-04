<?php $title=' | Report Kegiatan'; ?>
@extends('layouts.umum');

@section('style')
<style>
  .table {
    background-color: white;
    width: auto;
  }
  .table-respponsive-sm {
    table-layout: auto;
    width: auto;
  }
  table.center {
    margin-left: auto;
    margin-right: auto;
  }
</style>
@endsection



@section('content')
<div class="main" style="margin-top:100px">
  <div class="main-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <center><h3 class="panel-title">Report</h3></center>
              <div style="margin-top:25px">
                <table class="table table-responsive-sm table-hover center">
                  <tr class="table-success">
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Kegiatan</th>
                    <th>Lokasi</th>
                    <th>Waktu</th>
                    <th>Foto</th>
                    <th>Jumlah Penerima</th>
                    <th>Keterangan</th>
                </tr>
                  @foreach($kegiatan as $key)
                    <tr>
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $key->tgl_kegiatan }}</td>
                      <td>{{ $key->nama_kegiatan }}</td>
                      <td>{{ $key->lokasi_kegiatan }}</td>
                      <td>{{ $key->waktu_kegiatan }}</td>
                      <td><img src="<?php echo asset('images/'.$key->image) ?>" alt="foto" style="max-width:500px; max-height:300px"></td>
                      <td>{{ $key->count }}</td>
                      <td>{{ $key->keterangan }}</td>
                    </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
