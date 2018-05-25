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

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $rules = [
            'email' => 'required|email|unique:accounts,email,' . $id,
            'password' => 'nullable|confirmed'
        ];

        if ($update) {
            return $rules;
        }

        return array_merge($rules, [
            'name' => 'required|min:6|alphanum|unique:accounts',
            'email' => 'required|email|max:255|unique:accounts',
            'password' => 'required|confirmed|min:6',
        ]);
    }
}
