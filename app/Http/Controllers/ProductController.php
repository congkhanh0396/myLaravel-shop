<?php

namespace App\Http\Controllers;
use App\Products; // sử dụng table products
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //function thêm sản phẩm
    public function getAdd(){
    	return view('admin.product.add');
    }

    //function thêm sản phẩm
    public function postAdd(ProductRequest $req){
        $item = new Products;
        $item->name = $req->txtName;
        $item->id_type = $req->txtCategory;
        $item->description = $req->txtDescription;
        $item->price = $req->txtPrice;
        $item->promotion = $req->txtPromotion;
        $item->save();
        return redirect()->route('admin.product.list');
    }
    
    //function danh sách sản phẩm
    public function getList(){
        $listItem = Products::select('*')->get();
        return view('admin.product.list',compact('listItem'));
    }

    //function xóa sản phẩm
    public function getDelete($id){
        $item = Products::find($id);
        $item->delete($id);
        return redirect()->route('admin.product.list');
    }

    //function sửa sản phẩm
    public function getEdit($id){
        $item = Products::find($id);
        return view('admin.product.edit', compact('item'));
    }

    //function sửa sản phẩm
    public function postEdit($id, Request $req){
        $item = Products::find($id);
        $item->name = $req->txtName;
        $item->id_type = $req->txtCategory;
        $item->description = $req->txtDescription;
        $item->price = $req->txtPrice;
        $item->promotion = $req->txtPromotion;
        $item->save();
        return redirect()->route('admin.product.list');
    }

}
