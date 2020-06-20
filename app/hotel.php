<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    protected $table = "hotel";
    protected $fillable = ['nama','harga','gambar','rating'];
    
   
    
}
