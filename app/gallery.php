<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
  protected $fillable=[
    'id','nama_gallery','foto_gallery','deskripsi'
  ];
}
