<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis;

class JenisController extends Controller
{
    public function index(){
        $jenis = Jenis::orderBy('jenis_donasi')->get();

        return view('barang.listBarang', ['jenis' => $jenis]);
    }

    public function formStok($id){
        $jenis = Jenis::where('id', $id)->get();

        return view('barang.formStok', ['jenis' => $jenis]);
    }

    public function tambahStok($id){
        $data = Jenis::where('id', $id)->get();
        $jumlah = $data[0]->jumlah_donasi + request('jumlah');

        Jenis::where('id', $id)->update(['jumlah_donasi' => $jumlah]);

        return redirect('/listBarang');
    }

    public function tambahBarang(){
        $jenis = new Jenis();

        $jenis->jenis_donasi = request('jenis');
        $jenis->jumlah_donasi = request('jumlah');

        $jenis->save();

        return redirect('/listBarang');
    }
}
