<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function category(){
        return $this->belongsTo('\App\Category', 'category_id', 'id');
    }

    public function user(){
        return $this->belongsTo('\App\User','user_id','id');
    }
}
