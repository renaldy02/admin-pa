<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\helper;
use App\from_order;
use App\Model\JsonStatus;
class transaksicontroller extends Controller
{
    public function view ()
    {
        $data = from_order::select('*')->get();
        return view("pages.transaksi")->with('data', $data);
    }
}
