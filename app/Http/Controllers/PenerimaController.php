<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Penerima;
use \App\Distribusi;
use \App\Jenis;


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
        $jenis = Jenis::orderBy('jenis_donasi')->get();

    	return view('penerima/pilih',['penerima'=>$penerima], ['jenis' => $jenis]);
    }

    public function kirim($id){
        $distribusi = new Distribusi();

        $distribusi->tgl_distribusi = date('Y-m-d');
        $distribusi->id_penerima = $id;
        $distribusi->id_jenis = request('jenis');
        $distribusi->jumlah_distribusi = request('jumlah');

        $distribusi->save();

    	$data = Penerima::where('id', $id)->get();
        Penerima::where('id', $id)->update(['jumlah_menerima' => ($data[0]->jumlah_menerima + request('jumlah'))]);

        $jenis = Jenis::where('id', request('jenis'))->get();
		Jenis::where('id', request('jenis'))->update(['jumlah_donasi' => ($jenis[0]->jumlah_donasi - request('jumlah'))]);

    	return redirect('/rekomendasi')->with('sukses', 'Data berhasil diupdate');
    }
}
