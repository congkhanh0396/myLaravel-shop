<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', ['as'=>'index', 'uses'=>'PageController@getIndex']);

Route::get('products', ['as'=>'products', 'uses'=>'PageController@getProducts']);

Route::get('single', ['as'=>'single', 'uses'=>'PageController@getSingle']);

Route::get('checkout', ['as'=>'checkout', 'uses'=>'PageController@getCheckout']);

Route::get('contact', ['as'=>'contact', 'uses'=>'PageController@getContact']);

Route::get('account', ['as'=>'account', 'uses'=>'PageController@getAccount']);

Route::get('register', ['as'=>'register', 'uses'=>'PageController@getRegister']);

Route::group(['prefix'=>'admin'],function(){
    //route dẫn tới login trang admin
    Route::get('login',['as'=>'admin.login','uses'=>'AdminController@getLogin']);

    // phân chia nhóm sản phẩm
    Route::group(['prefix'=>'product'],function(){
        Route::get('list',['as'=>'admin.product.list','uses'=>'ProductController@getList']);	
        Route::get('add',['as'=>'admin.product.getAdd','uses'=>'ProductController@getAdd']);
        Route::post('add',['as'=>'admin.product.postAdd','uses'=>'ProductController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'=>'ProductController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.product.postEdit','uses'=>'ProductController@postEdit']);
    });

    // phân chia nhóm loại sản phẩm
    Route::group(['prefix'=>'cate'],function(){
        Route::get('list',['as'=>'admin.cate.list','uses'=>'CateController@getList']);	
        Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
        Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CateController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CateController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);
      
    });
    // phân chia nhóm user
    Route::group(['prefix'=>'user'],function(){
        Route::get('list',['as'=>'admin.user.list','uses'=>'UserController@getList']);	
        Route::get('add',['as'=>'admin.user.getAdd','uses'=>'UserController@getAdd']);
        Route::get('edit',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
      
    });
});
