<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPengembalian extends Model
{
    protected $table = "detailpengembalian";
    public function buku()
    {
        return $this->belongsTo(Buku::class,'id_buku');
    }
}
