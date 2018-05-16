<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'x', 'y', 'z'
    ];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $commun = [
            'name'    => "required|string|unique:towns,name,$id",
            'x' => 'required|integer',
            'y' => 'required|integer',
            'z' => 'required|integer'
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'name'    => "required|string|unique:towns"
        ]);
    }
}
