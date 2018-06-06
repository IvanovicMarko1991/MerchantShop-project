<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{

    protected $fillable=['product_id', 'merchant', 'current_price', 'old_price', 'stock', 'product_type', 'product_name', 'product_details', 'product_specifications', 'product_warranty', 'cover_image'];
    
}
