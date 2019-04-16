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
}
