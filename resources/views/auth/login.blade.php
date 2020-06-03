<!DOCTYPE html>
<html lang="en">
<head>
  <title>Asar Humanity | Pendaftaran Relawan</title>
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
    .form-control {
       border-radius: 50px;
    }
  </style>
</head>
<body>
  <div class="container-fluid" style="margin-top:100px">
    <center>
      <div class="col-sm-3">
        <div class="jumbotron" style="background-color: white">
							<form class="form-auth-small" action="/postlogin" method="POST">
								{{csrf_field()}}
								<p class="lead">Login Admin</p>
								<div class="logo text-center">
									<img src="{{asset('admin/logoasar.png')}}" alt="ASAR Logo">
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
								<button type="submit" class="btn btn-success btn-block" style="border-radius:50px">LOGIN</button>
							</form>
		        </div>
		      </div>
		    </center>
		  </div>
</body>
</html>
