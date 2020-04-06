<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SPP extends Model
{
    protected $fillable = [
        'tahun', 'nominal'
    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
