<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $commun = [
            'email' => "required|email|unique:accounts,email,$id",
            'password' => 'nullable|confirmed'
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'email' => 'required|email|max:255|unique:accounts',
            'password' => 'required|confirmed|min:6',
        ]);
    }
}
