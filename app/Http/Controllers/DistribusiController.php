<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distribusi;
use App\Barang;
use DB;

class DistribusiController extends Controller
{
    public function index(){
        $report['tgl'] = Distribusi::join('barang', 'distribusi.id_jenis', '=', 'barang.id')
                                    ->select('distribusi.tgl_distribusi', 'barang.jenis_barang')
                                    ->selectRaw('SUM(distribusi.jumlah_distribusi) as sum')
                                    ->groupBy('distribusi.tgl_distribusi','barang.jenis_barang')
                                    ->orderBy('distribusi.tgl_distribusi', 'desc')
                                    ->get();

        $report['jenis'] = Distribusi::join('barang', 'distribusi.id_jenis', '=', 'barang.id')
                            ->select('barang.jenis_barang')
                            ->selectRaw('SUM(distribusi.jumlah_distribusi) as sum')
                            ->groupBy('barang.jenis_barang')
                            ->get();

        return view('report.report', ['report' => $report]);
    }

    public function detailReportTanggal($tgl, $id){
        $report = Distribusi::join('barang', 'distribusi.id_jenis', '=', 'barang.id')
                            ->join('penerima', 'distribusi.id_penerima', '=', 'penerima.id')
                            ->select('distribusi.tgl_distribusi', 'barang.jenis_barang', 'penerima.kota')
                            ->selectRaw('SUM(distribusi.jumlah_distribusi) as sum')
                            ->where('barang.jenis_barang', $id)
                            ->where('distribusi.tgl_distribusi', $tgl)
                            ->groupBy('distribusi.tgl_distribusi', 'barang.jenis_barang', 'penerima.kota')
                            ->get();

        return view('report.detailReport', ['report' => $report]);
    }

    public function detailReportJenis($id){
        $report = Distribusi::join('barang', 'distribusi.id_jenis', '=', 'barang.id')
                            ->join('penerima', 'distribusi.id_penerima', '=', 'penerima.id')
                            ->select('distribusi.tgl_distribusi', 'barang.jenis_barang', 'penerima.kota')
                            ->selectRaw('SUM(distribusi.jumlah_distribusi) as sum')
                            ->where('barang.jenis_barang', $id)
                            ->groupBy('distribusi.tgl_distribusi', 'barang.jenis_barang', 'penerima.kota')
                            ->get();

        return view('report.detailReport', ['report' => $report]);
    }
}
