<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPeminjaman extends Model
{
    protected $table = "detailpeminjaman";
    public function buku()
    {
        return $this->belongsTo(Buku::class,'id_buku');
    }
}
