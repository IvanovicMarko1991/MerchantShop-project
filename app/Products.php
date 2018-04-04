<?php

namespace App;
use App\Products;
use App\Merchants;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  
 
    public function merchants(){
        return $this->belongsTo('App\Merchants');
    }
}
