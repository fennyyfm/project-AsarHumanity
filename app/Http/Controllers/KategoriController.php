<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
  public function tambahKategori(){
    $kategori = new Kategori();

    $kategori->kategori = request('kategori');
    $kategori->jumlah_uang = 0;

    $kategori->save();

    return redirect('/listBarang');
  }
}
