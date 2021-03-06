<!DOCTYPE html>
<html lang="en">
<head>
  <title>Asar Humanity | Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <style>
    body {
      background-image: url(<?php echo asset('assets/asset/asar/bg.jpg') ?>);
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
    .form-control {
      border-radius: 50px;
      border-color:#E3A425;
    }
    .btn {
      border-radius:50px;
      color:white;
      background-color:#E3A425;
    }
  </style>
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/asset/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/asset/img/favicon.png')}}">
</head>
<body>
  <div class="container-fluid" style="margin-top:100px">
    <center>
      <div class="col-sm-6" style="max-width:400px;">
        <div class="jumbotron" style="background-color: white">
					<form class="form-auth-small" action="/postlogin" method="POST">
						{{csrf_field()}}
						<p class="lead">Login Admin</p>
						<div class="logo text-center">
							<img src="{{asset('assets/logoasar.png')}}" alt="ASAR Logo">
						</div>
						<div class="form-group">
							<label for="signin-email" class="control-label sr-only" >Email</label>
							<input name="email" type="email" class="form-control" id="signin-email"  placeholder="Email">
						</div>
						<div class="form-group">
							<label for="signin-password" class="control-label sr-only">Password</label>
							<input name="password" type="password" class="form-control" id="signin-password" placeholder="Password">
						</div>
						<br>
						<button type="submit" class="btn btn-block">LOGIN</button>
					</form>
        </div>
      </div>
    </center>
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
