<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function account()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id', 'name', 'level', 'experience'
    ];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $commun = [
            'account_id' => "required|integer",
            'name' => 'required|string',
            'level' => 'required|integer',
            'experience' => 'required|integer'
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'account_id' => "required|integer"
        ]);
    }
}
