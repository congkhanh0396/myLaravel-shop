<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\loginAdminRequest;
use Auth;

class loginAdminController extends Controller
{
        // Đăng nhập admin
        public function getLogin(){
            return view('admin.login');
        }
    
        public function postLogin(loginAdminRequest $req){
            $login = array('username'=>$req->txtUsername,'password'=>$req->txtPassword);
            if(Auth::attempt($login)){
                return redirect()->route('admin.product.list');
            }
            else{

               return redirect()->route('admin.login')->with(['flash_level'=>'danger','flash_message'=>'Please check your account and password again']);
  
            }
    
        }

        public function getLogout(){
            Auth::logout();
            return Redirect()->route('index');        
        }
}
