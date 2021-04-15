<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donatur;
use App\Kategori;

class DonaturController extends Controller
{
    public function index(){
      $data['penerima'] = \App\Penerima::count();
      $data['uang'] = \App\Kategori::sum('jumlah_uang');
      $data['barang'] = \App\Barang::sum('jumlah_barang');
      $data['riwayat_donasi'] = \App\Donatur::count();
      $data['relawan'] = \App\Relawan::count();
      $data['pelatihan'] = \App\Pelatihan::count();

      $data['donatur'] = Donatur::selectRaw('MONTHNAME(tgl_konfirmasi) as month')
                      ->selectRaw('COUNT(id) as count')
                      ->where('status', 'sudah konfirmasi')
                      ->groupBy('month')
                      ->get();

      return view('coba', [ 'data' => $data ] );
    }

    public function formDonasi(){
      $kategori = Kategori::orderBy('kategori')->get();
      return view('donasi.formDonasi', ['kategori' => $kategori]);
    }
    
    public function konfirmasi(){
      return view('donasi.konfirmasi');
    }

    public function addDonatur(){
      $donatur = new Donatur();

      $donatur->nama_donatur = request('nama_donatur');
      $donatur->kontak_donatur = request('kontak_donatur');
      $donatur->id_kategori = request('kategori');
      $donatur->jumlah = request('jumlah');
      $donatur->tgl_donasi = date('Y-m-d');
      $donatur->status = 'menunggu konfirmasi';

      $donatur->save();

      return redirect('/')->with('msg', 'Thanks for your donation');
    }

    public function konfirmasiDonasi(){
      $donatur = Donatur::where('status', 'menunggu konfirmasi')
                  ->orderBy('tgl_donasi')
                  ->get();

      return view('donasi.listKonfirmasi', ['donatur' => $donatur]);
    }

    public function riwayatDonasi(){
      $donatur = Donatur::all();

      return view('donasi.riwayatDonasi', ['donatur' => $donatur]);
    }

    public function detailDonatur($id){
      $donatur = Donatur::join('kategori', 'donatur.id_kategori', '=', 'kategori.id')
                ->select('donatur.id as id', 'nama_donatur', 'kategori', 'jumlah', 'tgl_donasi', 'tgl_konfirmasi', 'status', 'kontak_donatur')
                ->where('donatur.id', $id)
                ->get();

      return view('donasi.detailDonatur', ['donatur' => $donatur]);
    }

    public function updateStatus($id){
      Donatur::where('id', $id)->update(['status' => 'sudah konfirmasi']);
      Donatur::where('id', $id)->update(['tgl_konfirmasi' => date('Y-m-d')]);

      $data = Donatur::where('id', $id)->get();
      $jumlah = Kategori::where('id', $data[0]->id_kategori)->get();
      $total = $jumlah[0]->jumlah_uang + $data[0]->jumlah;
      Kategori::where('id', $data[0]->id_kategori)->update(['jumlah_uang' => $total]);

      return redirect('/konfirmasiDonasi');
    }
}
