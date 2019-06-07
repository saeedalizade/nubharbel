<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PicProduct extends Model
{
    protected $guarded = [];

    protected $table = 'pic_product';


    public function Product ()
    {
        return  $this->belongsTo(Product::class ,'product_id');
    }
}
