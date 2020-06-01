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
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content" id='chart' onload="tampil()">
							<h3>Donasi Yuk!</h3>
							<a href="/formDonatur" class="btn btn-warning btn-sm">Donasi</a>
							<a href="/formRelawan" class="btn btn-warning btn-sm">Daftar Relawan</a>
							<a href="/formPelatihan" class="btn btn-warning btn-sm">Daftar Pelatihan</a>
							<br>
							<br>
							<a href="/formAbsensiRelawan" class="btn btn-warning btn-sm">Absensi Relawan</a>
							<div>
								<a href="/login" >Login Admin</a> |
								<a href="/report" >Report</a>
              </div>
							<br>
							<p class="msg">{{ session('msg') }}</p>
						</div>

					</div>
					<div class="right">


					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
		['Tanggal Konfirmasi', 'Donatur'],
		@foreach($data as $key)
			@php echo '["'.$key->tgl_konfirmasi.'",'.$key->count.'],';
      @endphp
      @endforeach
	]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Grafik Donasi Harian', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.LineChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

<script type="text/javascript">
	function tampil() {
    if ($data != []) {
      document.getElementById('exampleModal').style.display = 'block';
    }
	}
</script>

<script type="text/javascript">
	function tutup() {
		document.getElementById('exampleModal').style.display = 'none';
	}
</script>
</html>
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display:block">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="tutup()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="piechart"></div>
		</div>
	</div>
</div>
