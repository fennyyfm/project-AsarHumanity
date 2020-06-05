<!DOCTYPE html>
<html lang="en">
<head>
  <title>Asar Humanity | Report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <style>
    body {
      background-image: url(<?php echo asset('admin/assets/asar/cb.png') ?>);
    }
    .table {
      background-color: white;
      table-layout: auto;
      margin-top: 25px;
      margin-bottom: 50px;
    }
    table.center {
      margin-left: auto;
      margin-right: auto;
    }
    .btn {
      border-radius:50px;
      color:white;
      background-color:#E3A425;
    }
  </style>
</head>
<body>
<div class="main" style="margin-top:100px">
        <div class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                              <center><h3>Detail Report</h3></center>
                                <table class="table table-hover center">
                                    <tr class="table-warning">
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Kota Penerima</th>
                                        <th>Jenis</th>
                                        <th>Jumlah</th>
                                    </tr>
                                    @foreach($report as $key)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $key->tgl_distribusi }}</td>
                                            <td>{{ $key->kota }}</td>
                                            <td>{{ $key->jenis_barang }}</td>
                                            <td>{{ $key->sum }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                                <center><a class="btn" href="/report" role="button" style="border-radius:50px;">Kembali</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
  <nav class="nav" style="margin-top:100px">
    <div class="container-fluid">
      <p class="copyright"><center>&copy; Asar Humanity 2020</center></p>
    </div>
  </nav>
</footer>
</html>
