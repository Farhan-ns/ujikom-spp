<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = [
        'nisn', 'tgl_bayar', 'bulan_dibayar', 'tahun_dibayar', 'jumlah_dibayar'
    ];

    public function petugas()
    {
        return $this->belongsTo(Petugas::class);
    }

    public function siswa()
    {
        return $this->belongsTo(Petugas::class, 'siswa_id', 'nisn');
    }
}
