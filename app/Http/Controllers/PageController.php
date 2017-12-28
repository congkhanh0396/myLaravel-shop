<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getIndex() {
        // $a = Products::select('*')->get();
        return view('pages.index');
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
