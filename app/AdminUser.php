<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password','is_del'
    ];

    protected $hidden = [
        'password', 'remember_token','access_admin',
    ];
}
