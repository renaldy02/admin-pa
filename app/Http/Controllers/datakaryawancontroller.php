<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datakaryawancontroller extends Controller
{
    public function view ()
    {
        return view("pages.data_karyawan");
    }
}
