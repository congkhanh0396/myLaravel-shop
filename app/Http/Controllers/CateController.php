<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CateController extends Controller
{
    public function getAdd(){
    	return view('admin.cate.add');
    }

    //function danh sách sản phẩm
    public function getList(){
        return view('admin.cate.list');
    }

    //function sửa sản phẩm
    public function getEdit(){
        return view('admin.cate.edit');
    }
}
