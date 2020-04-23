<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    protected $fillable = [
        'username', 'password', 'nama_petugas'
    ];

    protected $guarded = [
        'level'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }

}
