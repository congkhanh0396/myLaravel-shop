<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    // đăng nhập admin
    public function getLogin(){
        return view('admin.login');
    }
}
