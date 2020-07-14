<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wahana extends Model
{
    protected $table = "wahana";
    protected $fillable = ['nama_wahana','gambar'];
}
