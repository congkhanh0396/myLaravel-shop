<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //
    public function getAdd(){
    	return view('admin.user.add');
    }

    //function danh sách sản phẩm
    public function getList(){
        $listUser = DB::table('user')->get();
        return view('admin.user.list',compact('listUser'));
    }

    //function sửa sản phẩm
    public function getEdit(){
        return view('admin.user.edit');
    }
}
