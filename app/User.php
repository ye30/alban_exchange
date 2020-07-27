<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
	use SoftDeletes;
    use Notifiable;
	
    const SUPER_ADMIN = 'super';
    const FIRST = 'first';
    const SECOND = 'second';
    const THIRD = 'third';
    const FOURTH = 'fourth';

    public function getRoleLabel(){
        return self::getRoles()[$this->role];
    }

    public static function getRoles(){
        return [
            self::SUPER_ADMIN => 'SuperAdmin',
            self::FIRST => 'Толе би, 130б',
            self::SECOND => 'Гоголя, 92',
            self::THIRD => 'мкр. 5, дом 17',
            self::FOURTH => 'пр.Достык 89',
        ];
    }

    public static function isSuperAdmin(){
        return Auth::user()->role === self::SUPER_ADMIN;
    }
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
}
