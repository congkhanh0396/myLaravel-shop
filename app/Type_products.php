<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_products extends Model
{
    //kết nối database tới table trong php myadmin 
    protected $table = 'type_products';

    public function product() {
    	return $this->hasMany('App\Products');
    }
}
