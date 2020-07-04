<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\helper;
use App\hotel;
use App\Model\JsonStatus;
class datahotelcontroller extends Controller
{
    public function view ()
    {
        $data = hotel::select('*')->get();
        //dd($data[0]->nama);
        return view("pages.data_hotel")->with('data', $data);
    }
    public function viewtambah()
    {
        return view("pages.tambahhotel");
    }
    public function simpanhotel(Request $request)
    {
        $name = rand(100000,900000);
        $model=$request->input();
        $foto = helper::fileupload($request->file('gambar'), $name, 'file/hotel');
        $model["gambar"]=url("file/hotel/".$foto);
        $model["rating"]=5;
        $simpan = hotel::create($model);
        //dd($simpan,$model);
        return JsonStatus::messagewithurl(200,"Berhasil di simpan","/hotel");
    }
}
