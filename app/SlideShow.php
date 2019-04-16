<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideShow extends Model
{
    protected $table = 'slideshow';

    protected $fillable = [
        'title', 'description', 'img'
    ];
}
