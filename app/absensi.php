<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    protected $table = "absensi";
    protected $fillable = ['id','karyawan_id','tanggal','jam_masuk','jam_pulang'];
}
