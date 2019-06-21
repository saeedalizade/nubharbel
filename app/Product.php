<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded = [];

    public function CategoryProduct ()
    {
        return  $this->belongsTo(CategoryProduct::class ,'category_id');
    }


    public function IsSpecialProduct ()
    {
        return  Product::where('is_special','1')->orderBy('id', 'ASC')->limit(2)->get();

    }


    public function PicProducts ()
    {

        return $this->hasMany(PicProduct::class,'product_id', 'id');
    }
}
