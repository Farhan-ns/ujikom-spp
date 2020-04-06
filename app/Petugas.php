<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
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
