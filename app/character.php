<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class character extends Model
{
    //
    public function user(){
       return $this->belongsTo(User::class);
    }

    public function stats(){
        return $this->hasOne(character_stats::class,'id','id');
    }

    public function skills(){
        return $this->hasOne(character_skills::class,'id','id');
    }
}
