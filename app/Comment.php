<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];
    protected $table = 'comments';

    public function user ()
    {
        return  $this->belongsTo(User::class ,'user_id');
    }

    public function UserProfile ()
    {
        return  $this->belongsTo (AdminUserProfile::class , 'user_id')->with('user');
    }
}
