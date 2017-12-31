<?php

namespace App\Http\Controllers;
use App\Type_products; // sử dụng table type_products
use App\Http\Requests\CateRequest;
use Illuminate\Http\Request;

class CateController extends Controller
{
    //function thêm sản phẩm
    public function getAdd(){
    	return view('admin.cate.add');
    }

    //function thêm sản phẩm
    public function postAdd(Request $req){
        $item = new Type_products();
        $item->name = $req->txtCateName;
        $item->save();
        return redirect()->route('admin.cate.list');
    }

    //function danh sách sản phẩm
    public function getList(){
        $listItem = Type_products::select('*')->get();
        return view('admin.cate.list',compact('listItem'));
    }

    //function xóa sản phẩm
    public function getDelete($id){
        $item = Type_products::find($id);
        $item->delete($id);
        return redirect()->route('admin.cate.list');
    }

    //function sửa sản phẩm
    public function getEdit($id){
        $item = Type_products::find($id);
        return view('admin.cate.edit', compact('item'));
    }

    //function sửa sản phẩm
    public function postEdit($id, Request $req){
        $item = Type_products::find($id);
        $item->name = $req->txtCateName;
        $item->save();
        return redirect()->route('admin.cate.list');
    }

}
