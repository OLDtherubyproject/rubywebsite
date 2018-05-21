<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guild extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'owner_id', 'name', 'motd'
    ];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $commun = [
            'owner_id' => "required|integer|unique:guilds,owner_id,$id",
            'name' => 'required|string|unique:guilds',
            'motd' => 'required|string',
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'owner_id' => 'required|integer|unique:guilds',
            'name' => 'required|string|unique:guilds',
        ]);
    }

    /*
    |------------------------------------------------------------------------------------
    | Relationships
    |------------------------------------------------------------------------------------
    */
    public function owner()
    {
        return $this->belongsTo(Character::class, 'owner_id');
    }

    public function memberships()
    {
        return $this->hasMany(GuildMembership::class);
    }
}
