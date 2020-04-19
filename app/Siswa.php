<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    protected $primaryKey = 'nisn';

    public $incrementing = false;

    //Laravel 6.0+ require column type to be casted
    protected $keyType = 'char';

    protected $fillable = [
        'nisn', 'nis', 'password', 'nama', 'alamat', 'no_telpon'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function spp()
    {
        return $this->belongsTo(SPP::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function pembayaran() {
        return $this->hasMany(Pembayaran::class, 'siswa_id', 'nisn');
    }
}
