<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class character_weapons extends Model
{
    //
    public function character(){
        return $this->belongsTo(character::class);
    }

    public function ammo(){
        return $this->hasMany(character_ammo::class,'character_id','character_id');
    }
}
