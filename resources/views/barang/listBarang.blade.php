@extends('layouts.master')

@section('content')

<div class="panel-heading">
  <h3 class="panel-title">List Barang</h3>
  <div class="right">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalJenis">Tambah Jenis Barang</button>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalKategori">Tambah Kategori Donasi</button>
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
    <?php $i = 1 ?>
    @foreach($jenis['kategori'] as $key)
      <tr>
        <td>{{ $i }}</td>
        <td>{{ $key->kategori }}</td>
        <td>Rp{{ $key->jumlah_uang }}</td>
        <td>
            
            <a href="/formStokKategori/{{ $key->id }}" class="btn btn-warning">Tambah Jumlah</a>
          <a href="/formEditKategori/{{ $key->id }}" class="btn btn-warning">Edit</a>
        </td>
      </tr>
      <?php $i++; ?>
    @endforeach
    @foreach($jenis['barang'] as $key)
      <tr>
        <td>{{ $i }}</td>
        <td>{{ $key->jenis_barang }}</td>
        <td>{{ $key->jumlah_barang }}</td>
        <td>
          <a href="/formStok/{{ $key->id }}" class="btn btn-warning">Tambah Jumlah</a>
          <a href="/formEdit/{{ $key->id }}" class="btn btn-warning">Edit</a>
        </td>
      </tr>
      <?php $i++; ?>
    @endforeach
  </table>
</div>

@endsection


<!-- Modal -->
<div class="modal fade" id="exampleModalJenis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH KATEGORI DONASI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/tambahKategori" method="POST">
          {{csrf_field()}}
          <div class="form-group">
              <label for="jenis">Kategori</label>
              <input type="text" class="form-control" name ="kategori" placeholder="Kategori">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
        </form>
    </div>
  </div>
</div>
