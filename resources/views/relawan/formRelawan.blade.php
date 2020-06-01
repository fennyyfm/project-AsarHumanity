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

<form action="/addRelawan" method="POST">
    @csrf
    <fieldset>
        <legend>FORM RELAWAN</legend>
        <hr>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Nama Relawan</label>
                <input type="text" name="nama_relawan" class="form-control">
            </div>
            <div class="form-group">
                <label>Nomor HP</label>
                <input type="text" name="kontak_relawan" class="form-control">
            </div>
            <div class="form-group">
  						<label for="alamat">Alamat</label>
  					   	<textarea class="form-control" name="alamat" rows="3"></textarea>
  					</div>
  					<div class="form-group">
  					   	<label for="kota">Kota</label>
  					    <input type="text" class="form-control" name ="kota" placeholder="Kota">
  					</div>
  					<div class="form-group">
  					   	<label for="provinsi">Provinsi</label>
  					    <input type="text" class="form-control" name ="provinsi" placeholder="Provinsi">
  					</div>
            <div class="form-group">
                <input type="submit" value="submit" class="btn btn-dark">
            </div>
        </div>
    </fieldset>
</form>
</body>
</html>
