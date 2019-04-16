<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','access_admin','is_del',
    ];

    public function infoUser ($email)
    {

        $User = User::where('email',$email)->first();
        return $User;
    }


    public function UserProfile ()
    {
       return  $this->belongsTo (AdminUserProfile::class , 'user_id');
    }
}
