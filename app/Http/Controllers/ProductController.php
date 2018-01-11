<?php

namespace App\Http\Controllers;
use App\Products; // sử dụng table products
use App\ProductImage;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use File;

class ProductController extends Controller
{
    //function thêm sản phẩm
    public function getAdd(){
    	return view('admin.product.add');
    }

    //function thêm sản phẩm
    public function postAdd(ProductRequest $req){
        $file_name = $req->file('fImages')->getClientOriginalName();
        $item = new Products;
        $item->name = $req->txtName;
        $item->id_type = $req->txtCategory;
        $item->description = $req->txtDescription;
        $item->price = $req->txtPrice;
        $item->promotion = $req->txtPromotion;
        $item->image = $file_name;
    	$req->file('fImages')->move('../resources/images',$file_name);
        $item->save();
        return redirect()->route('admin.product.list')->with(['flash_level'=>'success','flash_message'=>'Successfully added product']);
    }
    
    //function danh sách sản phẩm
    public function getList(){
        $listItem = Products::select('*')->get();
        return view('admin.product.list',compact('listItem'));
    }

    //function xóa sản phẩm
    public function getDelete($id){
        $item = Products::find($id);
        File::delete('../resources/images/'.$item->image);
        $item->delete($id);
        return redirect()->route('admin.product.list')->with(['flash_level'=>'success','flash_message'=>'Successfully deleted product']);
    }

    //function sửa sản phẩm
    public function getEdit($id){
        $item = Products::find($id);
        return view('admin.product.edit', compact('item'));
    }

    //function sửa sản phẩm
    public function postEdit($id,Request $req){
        $item = Products::find($id);
        $item->name = $req->txtName;
        $item->id_type = $req->txtCategory;
        $item->description = $req->txtDescription;
        $item->price = $req->txtPrice;
        $item->promotion = $req->txtPromotion;
        $img_current ='../resources/images/'.$req->img_crurent;
        if(!empty($req->file('fImages'))) {
            $file_name = $req->file('fImages')->getClientOriginalName();
     		$item->image = $file_name;
     		$req->file('fImages')->move('../resources/images',$file_name);
     		if(File::exists($img_current)){
     			File::delete($img_current);
     		}
     	}
     	else{
     		echo "Không có file";
     	}
        $item->save();
        return redirect()->route('admin.product.list')->with(['flash_level'=>'success','flash_message'=>'Successfully updated product']);
    }

}
