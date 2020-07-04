<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table = "karyawan";
    protected $fillable = ['id','nama','alamat','tanggal_bergabung','status_karyawan','gambar','ktp'];
}
