<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //function thêm sản phẩm
    public function getAdd(){
    	return view('admin.product.add');
    }

    //function danh sách sản phẩm
    public function getList(){
        return view('admin.product.list');
    }

    //function sửa sản phẩm
    public function getEdit(){
        return view('admin.product.edit');
    }
}
