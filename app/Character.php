<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id', 'group_id', 'name', 'level', 'experience', 'sex'
    ];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $commun = [
            'account_id' => 'sometimes|integer|min:1',
            'group_id' => 'sometimes|integer|min:1',
            'name' => 'regex:/^[a-zA-Z ]+$/',
            'sex' => 'required|between:0,1',
            'town_id' => 'required|integer|min:1',
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
        ]);
    }

    /*
    |------------------------------------------------------------------------------------
    | Relationships
    |------------------------------------------------------------------------------------
    */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function guild()
    {
        return $this->hasOne(Guild::class);
    }
}
