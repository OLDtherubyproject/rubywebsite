<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'flags', 'access', 'maxdepotitems', 'maxvipentries'
    ];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $commun = [
            'name'    => "required|string|unique:groups,name,$id",
            'flags' => 'required|integer',
            'access' => 'sometimes|boolean',
            'maxdepotitems' => 'required|integer',
            'maxvipentries' => 'required|integer'
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'name'    => "required|string|unique:groups"
        ]);
    }
}
