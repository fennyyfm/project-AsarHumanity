<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donatur;
use App\Jenis;

class DonaturController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function formDonatur(){
        $jenis = Jenis::select('id_jenis', 'jenis_donasi')
                    ->orderBy('jenis_donasi')
                    ->get();

        return view('donatur.formDonatur', ['jenis' => $jenis]);
    }

    public function addDonatur(){
        $donatur = new Donatur();

        $donatur->nama_donatur = request('nama_donatur');
        $donatur->kontak_donatur = request('kontak_donatur');
        $donatur->id_jenis = request('jenis');
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
        $donatur = Donatur::join('jenis', 'donatur.id_jenis', '=', 'jenis.id_jenis')
                    ->where('donatur.id_donatur', $id)
                    ->get();

        return view('donatur.detailDonatur', ['donatur' => $donatur]);
    }

    public function updateStatus($id){
        Donatur::where('id_donatur', $id)->update(['status' => 'sudah konfirmasi']);

        $data = Donatur::where('id_donatur', $id)->get();
        $jumlah = Jenis::where('id_jenis', $data[0]->id_jenis)->get();
        $total = $jumlah[0]->jumlah_donasi + $data[0]->jumlah;
        Jenis::where('id_jenis',  $data[0]->id_jenis)->update(['jumlah_donasi' => $total]);

        return redirect('/konfirmasiDonasi');
    }
}
