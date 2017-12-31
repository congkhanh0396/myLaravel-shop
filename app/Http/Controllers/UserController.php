<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;
class UserController extends Controller
{
    //
    public function getAdd(Request $req){
        $newUser = new User;
        $newUser->email = $req->txtEmail;
        $newUser->password = $req->txtPass;
        $newUser->name = $req->txtName;
        $newUser->gender = $req->txtGender;
        $newUser->address = $req->txtAddress;
        $newUser->phone = $req->txtPhoneNumber;
        $newUser->save();
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
