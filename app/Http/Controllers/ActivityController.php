<?php

namespace App\Http\Controllers;

use App\Helper\LogActivity;
use App\Model\view_logs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class ActivityController extends Controller
{
    public function viewactivity(){
        LogActivity::addToLog('Access Log Activity');
        return view('pages.activity.index');
    }

    public function getlog(){
//        LogActivity::addToLog('Access Get Data User');
        $data = view_logs::where('users_id',Auth::user()->id)->orderBy('id','desc');
        return DataTables::of($data)->make(true);
    }
}
