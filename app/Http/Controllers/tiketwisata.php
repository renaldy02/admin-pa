<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\helper;
use App\tiket_wisata;
use App\Model\JsonStatus;
class tiketwisata extends Controller
{
    public function view(Request $request)
    {
        $data = tiket_wisata::select('*')->get();
        return view("pages.tiket_wisata")->with('data', $data);
    }
    public function tambahtiket()
    {
        return view("pages.tambah_tiketwisata");
    }
    public function simpantiket(Request $request)
    {
        $name = rand(100000,900000);
        $model=$request->input();
        $foto = helper::fileupload($request->file('gambar'), $name, 'file/tiket');
        $model["gambar"]=url("file/tiket/".$foto);
        $model["rating"]=5;
        $simpan = tiket_wisata::create($model);
        //dd($simpan,$model);
        return JsonStatus::messagewithurl(200,"Berhasil di simpan","/tiket_wisata");
    }
}
