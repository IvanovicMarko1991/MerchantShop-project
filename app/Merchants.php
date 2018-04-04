<?php

namespace App;
use App\Products;
use App\Merchants;

use Illuminate\Database\Eloquent\Model;

class Merchants extends Model
{
    public function product(){
        return $this->belongsTo('App\Products');
    }
}
