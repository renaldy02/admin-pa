<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\wahana;
use App\helper;
use App\Model\JsonStatus;

class wahanacontroller extends Controller
{
    public function view(Request $request)
    {
        $data = wahana::select('*')->get();
        return view("pages.datawahana")->with('data', $data);
    }

    public function tambahwahana()
    {
        return view("pages.tambahwahana");
    }
    public function simpanwahana(Request $request)
    {
        $name = rand(100000,900000);
        $model=$request->input();
        $foto = helper::fileupload($request->file('gambar'), $name, 'file/wahana');
        $model["gambar"]=url("file/wahana/".$foto);
        $simpan = wahana::create($model);
        //dd($simpan,$model);
        return JsonStatus::messagewithurl(200,"Berhasil di simpan","/wahana");
    }
    public function hapus(Request $request)
    {
        $data  = wahana::where('id', $request->id)->delete();
        return redirect('wahana');# code...
    }
}
