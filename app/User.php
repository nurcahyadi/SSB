<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';

    protected $fillable = [
        'id','nama_lengkap', 'email', 'password','nama_ortu','pekerjaan_ortu','tempat_lahir','tanggal_lahir','phone','foto',
        'alamat_rumah', 'sekolah_asal', 'alamat_sekolah', 'asal_ssb', 'gol_darah','tinggi','berat','penyakit','kelas'
    ];

    public function transaksi()
    {
        return $this->hasMany('App\Transaksi', 'user_id', 'id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
