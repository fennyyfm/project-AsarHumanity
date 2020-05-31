<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
    	$data['penerima'] = \App\Penerima::count();
        $data['barang'] = \App\Barang::sum('jumlah_barang');
        $data['konfirmasi'] = \App\Donatur::where('status', 'menunggu konfirmasi')->count();
        $data['riwayat_donasi'] = \App\Donatur::count();
        $min = \App\Penerima::selectRaw('min(jumlah_menerima) as min')->get();
        $data['rekomendasi'] = \App\Penerima::where('jumlah_menerima', $min[0]->min)->count();
        return view('dashboard.index',['data' => $data]);
    }
}
