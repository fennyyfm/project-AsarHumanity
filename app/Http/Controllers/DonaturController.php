<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donatur;
use App\Barang;

class DonaturController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function formDonatur(){
        return view('donatur.formDonatur');
    }

    public function addDonatur(){
        $donatur = new Donatur();

        $donatur->nama_donatur = request('nama_donatur');
        $donatur->kontak_donatur = request('kontak_donatur');
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
        $donatur = Donatur::where('donatur.id', $id)->get();

        return view('donasi.detailDonatur', ['donatur' => $donatur]);
    }

    public function updateStatus($id){
      Donatur::where('id', $id)->update(['status' => 'sudah konfirmasi']);
      Donatur::where('id', $id)->update(['tgl_konfirmasi' => date('Y-m-d')]);

        $data = Donatur::where('id', $id)->get();
        $jumlah = Barang::where('jenis_barang', 'Uang')->get();
        $total = $jumlah[0]->jumlah_barang + $data[0]->jumlah;
        Barang::where('jenis_barang', 'Uang')->update(['jumlah_barang' => $total]);

        return redirect('/konfirmasiDonasi');
    }
}
