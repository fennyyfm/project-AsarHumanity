<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Login | Admin ASAR Humanity</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
</head>

<body>
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3>Detail Report</h3>
                                <table class="table table-hover">
                                    <tr>
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
                                <center><button class='btn btn-dark'><a href="/report">Kembali</a></button></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
