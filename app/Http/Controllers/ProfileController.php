<?php

namespace App\Http\Controllers;

use App\Helper\Helpers;
use App\Helper\LogActivity;
use App\Model\JsonStatus;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ProfileController extends Controller
{
    public function viewprofile(){
        LogActivity::addToLog('Access Profile');
        return view('pages.profile.index');
    }

    public function postprofile(Request $request){
        DB::begintransaction();
        try{
            if (!empty($request->file('file'))){
                $valid = Helpers::validasigambar($request->file("file"));
                if ($valid != true){
                    return JsonStatus::message(400,"Format Gambar harus JPG, jpg, PNG");
                }
                $foto = Helpers::fileupload($request->file("file"),$request->name."-".rand(100,999),"files/profile");
                if ($foto != true){
                    return JsonStatus::message(400,'File Gambar Maksimal 1 MB');
                }else{
                    $foto = url('/files/profile/'.$foto);
                }
            }else{
                $foto = '';
            }
            $users = User::where('id',Auth::user()->id)->update([
               'name' => $request->name,
               'email' => $request->email,
               'foto' => $foto,
            ]);
        }catch (\Exception $exception){
            DB::rollback();
            return JsonStatus::messageException($exception);
        }
        DB::commit();
        return JsonStatus::messagewithurl(200,'berhasil di update','/profile');
    }
}
