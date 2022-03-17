<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $table = "pengembalian";

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class,'id_peminjaman');
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class,'id_petugas');
    }

    public function detail()
    {
        return $this->hasMany(DetailPengembalian::class,'id_pengembalian');
    }
}