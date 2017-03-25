<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class character_stats extends Model
{
    public function character(){
        $this->belongsTo(character::class,'id');
    }
}
