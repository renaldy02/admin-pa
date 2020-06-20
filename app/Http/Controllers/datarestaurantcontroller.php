<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datarestaurantcontroller extends Controller
{
    public function view ()
    {
        return view("pages.data_restaurant");
    }
}
