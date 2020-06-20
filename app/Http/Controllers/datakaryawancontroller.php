<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datakaryawancontroller extends Controller
{
    public function view ()
    {
        return view("pages.datakaryawan");
    }
    public function tambahkaryawan()
    {
        return view("pages.tambahkaryawan");
    }
}
