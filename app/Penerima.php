<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    protected $table = 'penerima';
    protected $fillable = ['nama_penerima', 'kontak_penerima', 'daerah', 'alamat', 'jumlah_menerima'];
    public $timestamps = false;
}
