<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
    	$data['penerima'] = \App\Penerima::count();
        $data['barang'] = \App\Jenis::sum('jumlah_donasi');
        $data['konfirmasi'] = \App\Donatur::where('status', 'menunggu konfirmasi')->count();
        $data['riwayat_donasi'] = \App\Donatur::count();
        $data['rekomendasi'] = \App\Penerima::orderBy('jumlah_menerima')->orderBy('nama_penerima')->count();
        return view('dashboard.index',['data' => $data]);
    }
}
