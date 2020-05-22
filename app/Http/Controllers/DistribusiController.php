<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distribusi;
use App\Jenis;
use DB;

class DistribusiController extends Controller
{
    public function index(){
        $report['tgl'] = Distribusi::join('jenis', 'distribusi.id_jenis', '=', 'jenis.id')
                                    ->select('distribusi.tgl_distribusi', 'jenis.jenis_donasi')
                                    ->selectRaw('SUM(distribusi.jumlah_distribusi) as sum')
                                    ->groupBy('distribusi.tgl_distribusi','jenis.jenis_donasi')
                                    ->orderBy('distribusi.tgl_distribusi', 'desc')
                                    ->get();

        $report['jenis'] = Distribusi::join('jenis', 'distribusi.id_jenis', '=', 'jenis.id')
                            ->select('jenis.jenis_donasi')
                            ->selectRaw('SUM(distribusi.jumlah_distribusi) as sum')
                            ->groupBy('jenis.jenis_donasi')
                            ->get();

        return view('report.report', ['report' => $report]);
    }

    public function detailReportTanggal($tgl, $id){
        $report = Distribusi::join('jenis', 'distribusi.id_jenis', '=', 'jenis.id')
                            ->join('penerima', 'distribusi.id_penerima', '=', 'penerima.id')
                            ->select('distribusi.tgl_distribusi', 'jenis.jenis_donasi', 'penerima.daerah')
                            ->selectRaw('SUM(distribusi.jumlah_distribusi) as sum')
                            ->where('jenis.jenis_donasi', $id)
                            ->where('distribusi.tgl_distribusi', $tgl)
                            ->groupBy('distribusi.tgl_distribusi', 'jenis.jenis_donasi', 'penerima.daerah')
                            ->get();

        return view('report.detailReport', ['report' => $report]);
    }

    public function detailReportJenis($id){
        $report = Distribusi::join('jenis', 'distribusi.id_jenis', '=', 'jenis.id')
                            ->join('penerima', 'distribusi.id_penerima', '=', 'penerima.id')
                            ->select('distribusi.tgl_distribusi', 'jenis.jenis_donasi', 'penerima.daerah')
                            ->selectRaw('SUM(distribusi.jumlah_distribusi) as sum')
                            ->where('jenis.jenis_donasi', $id)
                            ->groupBy('distribusi.tgl_distribusi', 'jenis.jenis_donasi', 'penerima.daerah')
                            ->get();

        return view('report.detailReport', ['report' => $report]);
    }
}
