<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    protected $table = "restaurant";
    protected $fillable = ['nama','harga','gambar',];
}
