<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Hash;
use App\Http\Requests\AdminRequest;
class AdminController extends Controller
{

    // đăng nhập admin
    public function getLogin(){
        return view('admin.login');
    }

    public function postLogin(){

    }

    public function getList(){
        return view('admin.userAdmin.list');
    }

    public function getAdd(){
        return view('admin.userAdmin.add');
    }

    public function postAdd(AdminRequest $req){
        $username = new Admin();
        $username->username = $req->txtUsername;
        $username->password = Hash::make($req->txtPass);
        $username->level = $req->rdoLevel;
        $user->save();
        return view('admin.userAdmin.list');
    }

}
