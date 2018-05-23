<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';

    protected $fillable=[
      'id','user_id','tanggal_pembayaran','total_pembayaran','status_pembayaran'
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
