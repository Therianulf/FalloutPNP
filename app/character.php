<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class character extends Model
{
    //
    public function user(){
        $this->belongsTo(User::class);
    }

    public function character_stats(){
        return $this->hasOne(character_stats::class,'id','id');
    }

    public function character_skills(){
        return $this->hasOne(character_skills::class,'id','id');
    }
}
