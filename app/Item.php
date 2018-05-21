<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'fromid', 'toid', 'attributes'
    ];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $commun = [
            'fromid' => "required|integer|unique:items,fromid,$id",
            'name'    => "required|string",
            'toid' => 'nullable|integer'
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'fromid' => 'required|integer|unique:items',
        ]);
    }
}
