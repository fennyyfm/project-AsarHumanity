<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    protected $table = 'penerima';
    protected $fillable = ['nama_penerima', 'alamat', 'kota', 'provinsi', 'jumlah_menerima'];
    public $timestamps = false;
}
