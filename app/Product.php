<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable=['category_product', 'name_brand', 'name_product', 'product_description', 'cover_image'];


    public function merchant(){
        
        return $this->hasMany(Merchant::class);
    }

  
}
