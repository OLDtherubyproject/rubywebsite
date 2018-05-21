<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuildMembership extends Model
{
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}
