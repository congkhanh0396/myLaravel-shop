<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
class PageController extends Controller
{
    //
    public function getIndex() {
        $a = Products::select('*')->orderBy('id','desc')->take(3)->get();
        return view('pages.index',compact('a'));
    }

    //
    public function getProducts() {
        return view('pages.products');
    }

    public function getSingle() {
        return view('pages.single');
    }

    public function getCheckout() {
        return view('pages.checkout');
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function getAccount() {
        return view('pages.account');
    }

    public function getRegister() {
        return view('pages.register');
    }

}
