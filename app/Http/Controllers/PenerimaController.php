<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Penerima;
use \App\Barang;


class PenerimaController extends Controller
{
    public function index(Request $request){
    	if($request->has('cari')){
    		$data_penerima = Penerima::where('nama_penerima','LIKE', '%' .$request->cari. '%')->get();
    	}else{
        $data_penerima = Penerima::all();
    	}
    	return view('penerima.index',['data_penerima' => $data_penerima]);
    }
    public function create(Request $request){
    	Penerima::create($request->all());
    	return redirect('/penerima')->with('sukses', 'Data berhasil diinput');
    }

    public function edit($id){
    	$penerima = Penerima::where('id', $id)->first();

    	return view('penerima/edit',['penerima'=>$penerima]);
    }

    public function update(Request $request, $id){
    	$penerima = Penerima::where('id', $id);

    	$penerima->update($request->except(['_token']));
    	return redirect('/penerima')->with('sukses', 'Data berhasil di update');
    }

    public function delete($id){
        Penerima::where('id', $id)->delete();

    	return redirect('/penerima')->with('sukses', 'Data berhasil dihapus');
	}

    public function rekomendasi(){
        $data_penerima = Penerima::orderBy('jumlah_menerima')->orderBy('nama_penerima')->get();

    	return view('penerima.rekomendasi',['data_penerima' => $data_penerima]);
    }

    public function pilih($id){
    	$penerima = Penerima::where('id', $id)->first();
        $jenis = Barang::orderBy('jenis_barang')->get();

    	return view('penerima/pilih',['penerima'=>$penerima], ['jenis' => $jenis]);
    }
}
