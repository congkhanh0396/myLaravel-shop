<?php

namespace App\Http\Controllers;
use App\Type_products; // sử dụng table type_products
use App\Products;
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
        return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Successfully added cate product']);
    }

    //function danh sách sản phẩm
    public function getList(){
        $listItem = Type_products::select('*')->get();
        return view('admin.cate.list',compact('listItem'));
    }

    //function xóa sản phẩm
    // public function getDelete($id){
    //     $item = Type_products::find($id);
    //     $item->delete($id);
    //     return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Successfully deleted cate product']);
    // }

    public function getDelete($id){
        // đếm xem trong loại sản phẩm có sản phẩm con hay không 
        $countitem = Products::where('id_type',$id)->count();
        // nếu không có sản phẩm con thì được xóa
        if($countitem  == 0){ 
            $cate = Type_products::find($id);
            $cate->delete($id);
          return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Successfully deleted cate product']);
        }
        //nếu không có sản phẩm con thì hiện ra thông báo
        else{
            echo "<script type='text/javascript'>
                alert('You cant delete this CateProduct');
                window.location = '";
                    echo route('admin.cate.list');
            echo"'
            </script>";
        }    
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
        return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Successfully updated cate product']);
    }

}
