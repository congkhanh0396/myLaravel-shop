<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getAdd(){
    	return view('admin.user.add');
    }

    //function danh sách sản phẩm
    public function getList(){
        return view('admin.user.list');
    }

    //function sửa sản phẩm
    public function getEdit(){
        return view('admin.user.edit');
    }
}
