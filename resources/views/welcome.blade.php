<?php $title=' | home'; ?>
@extends('layouts.umum');

@section('style')
<style>
  .card-img-top {
    margin: 10px 10px 10px 10px;
    max-height: 200px;
    max-width: 200px;
    align-self: center;
  }
  .card-footer {
    text-align: right;
  }
  .pic {
    border-radius: 50%;
    width: 80%;
  }
</style>
@endsection

@section('nav-home') <li class="nav-item active"> @endsection
@section('nav-donasi') <li class="nav-item"> @endsection
@section('nav-relawan') <li class="nav-item"> @endsection
@section('nav-daftar') <a class="dropdown-item" href="/formRelawan">Daftar</a> @endsection
@section('nav-login') <a class="dropdown-item" href="/login">Login</a> @endsection
@section('nav-about') <li class="nav-item"> @endsection

@section('content')
<div class="container-fluid" style="margin-top:50px" data-toggle="modal" data-target=".bd-example-modal-lg">
  <div class="row">
    <div class="col-sm-6"></div>
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-3">
          <img src="<?php echo asset('admin/logoasar.png') ?>" width="200" alt="" loading="lazy" align='center'>
        </div>
        <div class="col-sm-6" style="margin-top:25px">
          <h1>Asar Humanity</h1>
          <p>Tebar Energi Kebaikan, Raih Lipatan Pahala</p>
          <center>
            <a href="/reportKegiatan" class="btn btn-success" style="border-radius:50px">Kegiatan</a>
            <a href="/report" class="btn btn-success" style="border-radius:50px">Report <i class='fas fa-angle-double-right'></i></a>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid" style="margin-top:100px">
  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="<?php echo asset('admin/assets/asar/donasi-sembako-1.png') ?>" alt="" loading="lazy">
      <div class="card-body">
        <h5 class="card-title">Berbagi Sembako</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <div class="card-footer">
        <a href="#">read more <i class='fas fa-angle-double-right'></i></a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="<?php echo asset('admin/assets/asar/donasi-makanan.png') ?>" alt="" loading="lazy">
      <div class="card-body">
        <h5 class="card-title">Berbagi Makanan</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <div class="card-footer">
        <a href="#">read more <i class='fas fa-angle-double-right'></i></a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="<?php echo asset('admin/assets/asar/zakat-Fitrah.png') ?>" alt="" loading="lazy">
      <div class="card-body">
        <h5 class="card-title">Zakat Fitrah</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <div class="card-footer">
        <a href="#">read more <i class='fas fa-angle-double-right'></i></a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="<?php echo asset('admin/assets/asar/zakat-mal.png') ?>" width="100" alt="" loading="lazy">
      <div class="card-body">
        <h5 class="card-title">Zakat Maal</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <div class="card-footer">
        <a href="#">read more <i class='fas fa-angle-double-right'></i></a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="<?php echo asset('admin/assets/asar/ambulan-asar.png') ?>" width="100" alt="" loading="lazy">
      <div class="card-body">
        <h5 class="card-title">Ambulan Gratis</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <div class="card-footer">
        <a href="#">read more <i class='fas fa-angle-double-right'></i></a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="<?php echo asset('admin/assets/asar/donasi-dunia-islam-1.png') ?>" width="100" alt="" loading="lazy">
      <div class="card-body">
        <h5 class="card-title">Infaq Dunia Islam</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <div class="card-footer">
        <a href="#">read more <i class='fas fa-angle-double-right'></i></a>
      </div>
    </div>
  </div>
</div>
<div class="container" style="margin-top:350px">
  <center><h3>Asar Humanity mengajak kamu semua, untuk ambil peran dan memberikan manfaat untuk sesama</h3></center>
</div>
<div class="container-fluid" style="margin-top:300px;margin-bottom:50px">
  <div class="row">
    <div class="col-sm-4" style="margin-bottom:10px">
      <center><img src="<?php echo asset('admin/assets/asar/BERBAGI-MAKAN-1024x682.jpg') ?>" alt="" class="pic"></center>
    </div>
    <div class="col-sm-4" style="margin-bottom:10px">
      <center><img src="<?php echo asset('admin/assets/asar/MAKAN3-1024x682.jpg') ?>" alt="" class="pic"></center>
    </div>
    <div class="col-sm-4" style="margin-bottom:10px">
      <center><img src="<?php echo asset('admin/assets/asar/MAKAN4-1024x682.jpg') ?>" alt="" class="pic"></center>
    </div>
  </div>
</div>

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
	function tutup() {
		document.getElementById('exampleModal').style.display = 'none';
	}
</script>

@endsection

@section('contact') @include('layouts.includes.contact') @endsection

<div class="modal bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display:block;">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document" style="max-width:600px">
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
</div>
