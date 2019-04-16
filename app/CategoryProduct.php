<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $table = 'category_product';

    protected $fillable = [
        'title', 'description'
    ];


    public function Products ()
    {

        return $this->hasMany(Product::class);
    }
}
