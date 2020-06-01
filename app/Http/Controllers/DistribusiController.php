<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distribusi;
use App\Barang;
use App\Penerima;
use App\Barang_penerima;

class DistribusiController extends Controller
{
    public function index(){
        $report['tgl'] = Distribusi::select('distribusi.tgl_distribusi')
                                    ->selectRaw('COUNT(distribusi.id) as count')
                                    ->groupBy('distribusi.tgl_distribusi')
                                    ->orderBy('distribusi.tgl_distribusi', 'desc')
                                    ->get();

        $report['jenis'] = Distribusi::join('barang', 'distribusi.id_jenis', '=', 'barang.id')
                            ->select('barang.jenis_barang')
                            ->selectRaw('SUM(distribusi.jumlah_distribusi) as sum')
                            ->groupBy('barang.jenis_barang')
                            ->get();

        return view('report.report', ['report' => $report]);
    }

    public function detailReportTanggal($tgl){
        $report = Distribusi::join('barang', 'distribusi.id_jenis', '=', 'barang.id')
                            ->join('penerima', 'distribusi.id_penerima', '=', 'penerima.id')
                            ->select('distribusi.tgl_distribusi', 'barang.jenis_barang', 'penerima.kota')
                            ->selectRaw('COUNT(distribusi.id) as sum')
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

    public function kirim($id){

        $distribusi = new Distribusi();
        $distribusi->tgl_distribusi = date('Y-m-d');
        $distribusi->id_penerima = $id;
        $distribusi->id_jenis = request('jenis');
        $distribusi->jumlah_distribusi = request('jumlah');
        $distribusi->save();

        $dis = Distribusi::orderBy('id', 'desc')->limit(1)->get();
        $barang = new Barang_penerima();
        $barang->id_distribusi = $dis[0]->id;
        $barang->id_jenis = request('jenis');
        $barang->jumlah = request('jumlah');
        $barang->save();

    	  $data = Penerima::where('id', $id)->get();
        Penerima::where('id', $id)->update(['jumlah_menerima' => ($data[0]->jumlah_menerima + request('jumlah'))]);

        $jenis = Barang::where('id', request('jenis'))->get();
		    Barang::where('id', request('jenis'))->update(['jumlah_barang' => ($jenis[0]->jumlah_barang - request('jumlah'))]);

        return redirect('/rekomendasi')->with('sukses', 'Data berhasil diupdate');
    }
}
