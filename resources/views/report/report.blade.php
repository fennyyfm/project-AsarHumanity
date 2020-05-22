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
                                <h3 class="panel-title">Report</h3>
                                <div class="col-md-2">
                                    <select  id='kategori' class="form-control" name="laporan" onchange="return showReport();">
                                        <option value="">- Pilih Kategori Report -</option>
                                        <option value="tanggal">Berdasarkan Tanggal</option>
                                        <option value="jenis">Berdasarkan Jenis</option>
                                    </select>
                                </div>
                                <div id='tgl'>
                                    <table class="table">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Jenis</th>
                                            <th>Jumlah</th>
                                            <th></th>
                                        </tr>
                                        @foreach($report['tgl'] as $key)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $key->tgl_distribusi }}</td>
                                                <td>{{ $key->jenis_donasi }}</td>
                                                <td>{{ $key->sum }}</td>
                                                <td>
                                                    <button class='btn btn-dark'><a href="/detailReport/{{ $key->tgl_distribusi }}/{{ $key->jenis_donasi }}">Lihat Detail</a></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div id='jns' style='display:none;'>
                                    <table class="table">
                                        <tr>
                                            <td>No</td>
                                            <td>Jenis</td>
                                            <td>Jumlah</td>
                                            <td></td>
                                        </tr>
                                        @foreach($report['jenis'] as $key)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $key->jenis_donasi }}</td>
                                                <td>{{ $key->sum }}</td>
                                                <td>
                                                    <button class='btn btn-dark'><a href="/detailReport/{{ $key->jenis_donasi }}">Lihat Detail</a></button>
                                                </td>
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
</body>
<footer>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function showReport() {
            var selectBox = document.getElementById('kategori');
            var pilihKategori = selectBox.options[selectBox.selectedIndex].value;

            if (pilihKategori == "jenis") {
                document.getElementById('jns').style.display = 'block';
                document.getElementById('tgl').style.display = 'none';
            }
        }
    </script>
</footer>
</html>
