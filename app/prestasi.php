<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
  protected $fillable=[
    'id','nama_prestasi','foto_prestasi','deskripsi','tanggal'
  ];
}
