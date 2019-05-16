<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function sub_category(){
        return $this->belongsTo('App\SubCategory');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }
}
