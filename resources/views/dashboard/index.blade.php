<?php $title = ' | Dashboard'; ?>
@extends('layouts.master')

@section('content')

<div class="panel-heading">
    <h3 class="panel-title">Dashboard</h3>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="metric">
                        <a href="/penerima"><span class="icon"><i class="lnr lnr-download"></i></span>
                        <p>
                            <span class="number">{{$data['penerima']}}</span>
                            <span class="title">Penerima</span>
                        </p></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="metric">
                        <a href="/listBarang"><span class="icon"><i class="fa fa-money"></i></span>
                        <p>
                            <span class="number">{{$data['uang']}}</span>
                            <span class="title">Uang</span>
                        </p></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="metric">
                        <a href="/listBarang"><span class="icon"><i class="fa fa-shopping-bag"></i></span>
                        <p>
                            <span class="number">{{$data['barang']}}</span>
                            <span class="title">Barang</span>
                        </p></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="metric">
                        <a href="/konfirmasiDonasi"><span class="icon"><i class="lnr lnr-star"></i></span>
                        <p>
                            <span class="number">{{$data['konfirmasi']}}</span>
                            <span class="title">Menunggu Konfirmasi</span>
                        </p>
                    </div></a>
                </div>
                <!--<div class="col-md-4">
                    <div class="metric">
                        <a href="/riwayatDonasi"><span class="icon"><i class="lnr lnr-history"></i></span>
                        <p>
                            <span class="number">{{$data['riwayat_donasi']}}</span>
                            <span class="title">Riwayat Donasi</span>
                        </p></a>
                    </div>
                </div>!-->
                <div class="col-md-4">
                    <div class="metric">
                        <a href="/rekomendasi"><span class="icon"><i class="lnr lnr-bullhorn"></i></span>
                        <p>
                            <span class="number">{{$data['rekomendasi']}}</span>
                            <span class="title">Rekomendasi</span>
                        </p></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="metric">
                        <a href="/listRelawan"><span class="icon"><i class="fa fa-users"></i></span>
                        <p>
                            <span class="number">{{$data['relawan']}}</span>
                            <span class="title">Relawan</span>
                        </p></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="metric">
                        <a href="/listPelatihan"><span class="icon"><i class="fa fa-group"></i></span>
                        <p>
                            <span class="number">{{$data['pelatihan']}}</span>
                            <span class="title">Pelatihan</span>
                        </p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
