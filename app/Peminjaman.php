<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = "peminjaman";
    
    public function anggota()
    {
        return $this->belongsTo(Anggota::class,'id_anggota');
    }

    public function detail()
    {
        return $this->hasMany(DetailPeminjaman::class,'id_peminjaman');

    }
    public function pengembalian()
    {
        return $this->hasOne(Pengembalian::class,'id_peminjaman');

    }
}
