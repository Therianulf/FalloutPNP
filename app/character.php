<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class character extends Model
{
    //
    public function character_stat(){
        return $this->hasOne(character_stats::class,'character_id','id');
    }
}
