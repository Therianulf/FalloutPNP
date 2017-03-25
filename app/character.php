<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class character extends Model
{
    //
    public function user(){
        $this->belongsTo(User::class);
    }

    public function character_stat(){
        return $this->hasOne(character_stats::class,'character_id','id');
    }

    public function character_skill(){
        return $this->hasOne(character_skills::class,'id','id');
    }
}
