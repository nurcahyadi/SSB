<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';

    protected $fillable=[
      'id','user_id','tanggal_pembayaran','total_pembayaran','keterangan','status_pembayaran','ket_lainlain'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
