<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relawan;

class RelawanController extends Controller
{
  public function formRelawan(){
      return view('relawan.formRelawan');
  }

  public function addRelawan(){
      $relawan = new Relawan();

      $relawan->nama_relawan = request('nama_relawan');
      $relawan->kontak_relawan = request('kontak_relawan');
      $relawan->alamat = request('alamat');
      $relawan->kota = request('kota');
      $relawan->provinsi = request('provinsi');
      $relawan->tgl_daftar = date('Y-m-d');

      $relawan->save();

      return redirect('/')->with('msg', 'berhasil');
  }

  public function listRelawan(){
      $relawan = Relawan::all();

      return view('relawan.index', ['relawan' => $relawan]);
  }

  public function detailRelawan($id){
      $relawan = Relawan::where('relawan.id', $id)->get();

      return view('relawan.detailRelawan', ['relawan' => $relawan]);
  }
}
