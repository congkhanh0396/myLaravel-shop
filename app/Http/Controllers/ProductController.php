<?php

namespace App\Http\Controllers;
use App\Products; // sử dụng table product
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //function thêm sản phẩm
    public function getAdd(){
    	return view('admin.product.add');
    }

    //function danh sách sản phẩm
    public function getList(){
        $listItem = Products::select('*')->get();
        return view('admin.product.list',compact('listItem'));
    }

    //function sửa sản phẩm
    public function getEdit(){
        return view('admin.product.edit');
    }
}
