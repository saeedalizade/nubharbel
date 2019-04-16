<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminUserProfile extends Model
{
    protected $table = 'profile_users';

    protected $fillable = [
        'user_id', 'avatar', 'national_code',
        'postal_code', 'phone', 'mobile','address',
    ];



    public function user ()
    {
        return $this->belongsTo (User::class);
    }
}
