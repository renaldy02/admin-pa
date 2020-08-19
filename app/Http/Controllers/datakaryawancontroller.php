<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\helper;
use App\karyawan;
use App\Model\JsonStatus;
class datakaryawancontroller extends Controller
{
    public function view ()
    {
        $data = karyawan::select('*')->get();
        return view("pages.datakaryawan")->with('data', $data);
    }
    public function tambahkaryawan()
    {
        return view("pages.tambahkaryawan");
    }
    public function hapus(Request $request)
    {
        $data  = karyawan::where('id', $request->id)->delete();
        return redirect('karyawan');
    }
    public function simpankaryawan(Request $request)
    {
        $name = rand(100000,900000);
        $model=$request->input();
        $foto = helper::fileupload($request->file('gambar'), $name, 'file/karyawan');
        $model["gambar"]=url("file/karyawan/".$foto);
        $simpan = karyawan::create($model);
        //dd($simpan,$model);
        return JsonStatus::messagewithurl(200,"Berhasil di simpan","/hotel");
    }
}
