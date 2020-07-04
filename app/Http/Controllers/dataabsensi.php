<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\helper;
use App\absensi;
use App\karyawan;
use App\Model\JsonStatus;
class dataabsensi extends Controller
{
    public function view ()
    {
        $data = absensi::select('absensi.*','karyawan.nama')
        ->join('karyawan','karyawan.id','absensi.karyawan_id')
        ->get();
        //dd($data[0]->nama);
        return view("pages.data_absensi")->with('data', $data);
    }
    public function Tambahabsensi()
    {
        $data = karyawan::select('*')->get();
        return view("pages.tambahabsensi")->with('data', $data);
    }
    public function simpanabsensi(Request $request)
    {
        $name = rand(100000,900000);
        $model=$request->input();
        $simpan = absensi::create($model);
        //dd($simpan,$model);
        return JsonStatus::messagewithurl(200,"Berhasil di simpan","/absensi");
    }
}
