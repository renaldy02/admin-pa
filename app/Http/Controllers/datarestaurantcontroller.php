<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\helper;
use App\restaurant;
use App\Model\JsonStatus;
class datarestaurantcontroller extends Controller
{
    public function view ()
    { 
        $data = restaurant::select('*')->get();
        return view("pages.data_restaurant")->with('data', $data);

    }
    public function tambah_restaurant()
    {
        return view("pages.tambahrestaurant");
    }
    public function simpanrestaurant(Request $request)
    {
        $name = rand(100000,900000);
        $model=$request->input();
        $foto = helper::fileupload($request->file('gambar'), $name, 'file/restaurant');
        $model["gambar"]=url("file/restaurant/".$foto);
        $simpan = restaurant::create($model);
        //dd($simpan,$model);
        return JsonStatus::messagewithurl(200,"Berhasil di simpan","/restaurant");
    }
    public function hapus(Request $request)
    {
        $data  = restaurant::where('id', $request->id)->delete();
        return redirect('restaurant');
    }
}
