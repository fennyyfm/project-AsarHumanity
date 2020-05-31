<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index(){
        $jenis = Barang::orderBy('jenis_barang')->get();

        return view('barang.listBarang', ['jenis' => $jenis]);
    }

    public function formStok($id){
        $jenis = Barang::where('id', $id)->get();

        return view('barang.formStok', ['jenis' => $jenis]);
    }

    public function formEdit($id){
        $jenis = Barang::where('id', $id)->get();

        return view('barang.formEdit', ['jenis' => $jenis]);
    }

    public function tambahStok($id){
        $data = Barang::where('id', $id)->get();
        $jumlah = $data[0]->jumlah_barang + request('jumlah');

        Barang::where('id', $id)->update(['jumlah_barang' => $jumlah]);

        return redirect('/listBarang');
    }

    public function editBarang($id){
        $jenis['jenis_barang'] = request('jenis_barang');
        $jenis['jumlah_barang'] = request('jumlah_barang');

        Barang::where('id', $id)->update($jenis);

        return redirect('/listBarang');
    }

    public function tambahBarang(){
        $jenis = new Barang();

        $jenis->jenis_barang = request('jenis');
        $jenis->jumlah_barang = request('jumlah');

        $jenis->save();

        return redirect('/listBarang');
    }
}
