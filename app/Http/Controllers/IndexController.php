<?php

namespace App\Http\Controllers;

use App\Helper\LogActivity;


class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        LogActivity::addToLog('Success Login');
        return view('pages.dashboard');
    }
}
