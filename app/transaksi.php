<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = "from_order";
    protected $fillable = ['kode_produk','nama_pemesan','nomor_telepon','alamat','harga','total_harga','diskon','tanggal_transaksi','type_produk'];
}
