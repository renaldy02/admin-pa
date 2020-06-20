<?php

namespace App\Http\Controllers;

use App\Helper\LogActivity;
use App\Model\JsonStatus;
use App\Model\view_logs;
use App\Model\view_users_role;
use App\Permission;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use DB;
use Zizaco\Entrust\Entrust;

class ManajemenUserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:root','auth']);
    }

    public function viewuser(){
        LogActivity::addToLog('Access Data User');
        return view('pages.manajemen-user.data-user');
    }

    public function getdatauser(){
//        LogActivity::addToLog('Access Get Data User');
        $data = view_users_role::orderBy('created_at','desc');
        return DataTables::of($data)->make(true);
    }

    public function viewadduser(){
        LogActivity::addToLog('Access Add User');
        return view('pages.manajemen-user.add-user');
    }

    public function postroles(Request $request){
        LogActivity::addToLog('Access Post Add Roles');
        $cek = Role::where('name',$request->name)->first();
        if (!empty($cek)){
            return JsonStatus::message(400,"Name Role Telah di Gunakan");
        }
        $role = new Role();
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->description = $request->description;
        $role->save();
        $role->perms()->sync($request->permission);

        return JsonStatus::messagewithurl(200,"Role Berhasil di Tambahkan",'/manajemen-user/user');
    }

    public function postpermission(Request $request){
        LogActivity::addToLog('Access Post Add Permission');
        DB::begintransaction();
        try{
            $cek = Permission::where('name',$request->name)->first();
            if (!empty($cek)){
                return JsonStatus::message(400,"Name Permission Telah di Gunakan");
            }
            $permission = new Permission();
            $permission->name = $request->name;
            $permission->display_name = $request->display_name;
            $permission->description = $request->description;
            $permission->save();
        }catch (\Exception $exception){
            DB::rollback();
            return JsonStatus::messageException($exception);
        }
        DB::commit();
        return JsonStatus::messagewithurl(200,"Permission Berhasil di Tambahkan",'/manajemen-user/user');
    }

    public function postusers(Request $request){
        LogActivity::addToLog('Access Post Add Users');
        DB::begintransaction();
        try{
            $cek = Permission::where('name',$request->name)->first();
            if (!empty($cek)){
                return JsonStatus::message(400,"Name Permission Telah di Gunakan");
            }

            $users = new User();
            $users->name = $request->name;
            $users->email = $request->email;
            $users->password = bcrypt($request->password);
            $users->save();
            $users->attachRole($request->roles);
        }catch (\Exception $exception){
            DB::rollback();
            return JsonStatus::messageException($exception);
        }
        DB::commit();
        return JsonStatus::messagewithurl(200,"Roles Berhasil di Tambahkan",'/manajemen-user/user');
    }

    public function viewlogs(){
        return View('pages.manajemen-user.data-log');
    }

    public function getlog(){
//        LogActivity::addToLog('Access Get Data User');
        $data = view_logs::orderBy('id','desc');
        return DataTables::of($data)->make(true);
    }
}
