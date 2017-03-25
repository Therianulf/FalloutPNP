<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class character_skills extends Model
{
    //
    public function character(){
       return $this->belongsTo(character::class,'id');
    }
}
