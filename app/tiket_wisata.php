<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiket_wisata extends Model
{
    protected $table = "tiket_wisata";
    protected $fillable = ['nama_tiket','harga','gambar'];
}
