<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //kết nối database tới table trong php myadmin 
    protected $table = 'products';

    public function cate(){
    	return $this->belongTo('App\Type_products');
    }
}
