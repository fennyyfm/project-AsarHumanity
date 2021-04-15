<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relawan;
use App\Absensi;
use App\Pelatihan;

class RelawanController extends Controller
{
  public function formRelawan(){
      return view('relawan.formRelawan');
  }

  public function addRelawan(){
      $data = [];
      if(request('kategori') == 'relawan') {
          $data = new Relawan();
          
          $data->nama_relawan = request('nama_relawan');
          $data->kontak_relawan = request('kontak_relawan');
      }else if(request('kategori') == 'pelatihan') {
          $data = new Pelatihan();
          
          $data->nama_pelatihan = request('nama_relawan');
          $data->kontak_pelatihan = request('kontak_relawan');
      }
      
      $data->alamat = request('alamat');
      $data->kota = request('kota');
      $data->provinsi = request('provinsi');
      $data->tgl_daftar = date('Y-m-d');
    
      $data->save();
    
      return redirect('/')->with('msg', 'berhasil');
  }

  public function listRelawan(){
      $relawan = Relawan::all();

      return view('relawan.index', ['relawan' => $relawan]);
  }

  public function detailRelawan($id){
    $relawan['data'] = Relawan::where('relawan.id', $id)->get();
    $relawan['absensi'] = Absensi::where('id_relawan', $id)
                                  ->orderBy('tgl_absensi', 'desc')
                                  ->get();

      return view('relawan.detailRelawan', ['relawan' => $relawan]);
  }

  public function formAbsensiRelawan(){
    $relawan = Relawan::all();
      return view('relawan.formAbsensiRelawan', ['relawan' => $relawan]);
  }

  public function addAbsensiRelawan(){
      $absensi = new Absensi();

      $absensi->id_relawan = request('nama');
      $absensi->tgl_absensi = date('Y-m-d');
      $absensi->aktivitas = request('aktivitas');
      $absensi->keterangan = request('keterangan');

      $absensi->save();

      return redirect('/')->with('msg', 'berhasil absen');
  }
}
