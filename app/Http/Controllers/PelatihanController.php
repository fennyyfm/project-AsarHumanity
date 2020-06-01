<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelatihan;

class PelatihanController extends Controller
{
  public function formPelatihan(){
      return view('pelatihan.formPelatihan');
  }

  public function addPelatihan(){
      $pelatihan = new Pelatihan();

      $pelatihan->nama_pelatihan = request('nama_pelatihan');
      $pelatihan->kontak_pelatihan = request('kontak_pelatihan');
      $pelatihan->alamat = request('alamat');
      $pelatihan->kota = request('kota');
      $pelatihan->provinsi = request('provinsi');
      $pelatihan->tgl_daftar = date('Y-m-d');

      $pelatihan->save();

      return redirect('/')->with('msg', 'berhasil');
  }

  public function listPelatihan(){
      $pelatihan = Pelatihan::all();

      return view('pelatihan.index', ['pelatihan' => $pelatihan]);
  }

  public function detailPelatihan($id){
      $pelatihan = Pelatihan::where('pelatihan.id', $id)->get();

      return view('pelatihan.detailPelatihan', ['pelatihan' => $pelatihan]);
  }
}
