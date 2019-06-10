<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'role', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function isRole($checkRole)
    {
        $checkRole = explode("|",$checkRole);
        foreach($checkRole as $role){
            $user_roles = self::where(['id'=>\Auth::id(), 'role'=>$role])->first();
            if(!is_null($user_roles)){
                return $user_roles ? true : false;
            }
        }
        return $user_roles ? true : false;
    }
}
