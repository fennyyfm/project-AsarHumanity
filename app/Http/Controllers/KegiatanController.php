<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;

class KegiatanController extends Controller
{
  public function index()
  {
    $kegiatan = Kegiatan::join('distribusi', 'kegiatan.tgl_kegiatan', '=', 'distribusi.tgl_distribusi')
                        ->select('kegiatan.tgl_kegiatan', 'kegiatan.nama_kegiatan', 'kegiatan.waktu_kegiatan', 'kegiatan.lokasi_kegiatan', 'kegiatan.waktu_kegiatan', 'kegiatan.image', 'kegiatan.keterangan')
                        ->selectRaw('COUNT(distribusi.id) as count')
                        ->groupBy('distribusi.tgl_distribusi', 'kegiatan.tgl_kegiatan', 'kegiatan.nama_kegiatan', 'kegiatan.waktu_kegiatan', 'kegiatan.lokasi_kegiatan', 'kegiatan.waktu_kegiatan', 'kegiatan.image', 'kegiatan.keterangan')
                        ->orderBy('distribusi.tgl_distribusi', 'desc')
                        ->get();

    return view('kegiatan.reportKegiatan', ['kegiatan' => $kegiatan]);
  }

  public function formKegiatan()
  {
    return view('kegiatan.formKegiatan');
  }

  public function tambahKegiatan()
  {
    $target_dir = public_path('images/');
    $fileName = basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $fileName;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(getimagesize($_FILES["fileToUpload"]["tmp_name"]) == false) {
      $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
      $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      $uploadOk = 0;
    }

    $kegiatan = new Kegiatan();
    $kegiatan->tgl_kegiatan = request('tgl');
    $kegiatan->nama_kegiatan = request('nama');
    $kegiatan->waktu_kegiatan = request('waktu');
    $kegiatan->lokasi_kegiatan = request('lokasi');
    $kegiatan->image = $fileName;
    $kegiatan->keterangan = request('keterangan');

    $msg = '';
    if ($uploadOk == 0) {
      $msg= 'gagal';
    }else {
      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
      $kegiatan->save();
      $msg='berhasil';
    }

    return redirect('/formKegiatan')->with('msg', $msg);
  }
}
