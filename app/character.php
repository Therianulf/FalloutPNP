<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class character extends Model
{
    //
    protected $fillable = ['race','first_name','last_name','character_description','level'];

    public function user(){
       return $this->belongsTo(User::class);
    }

    public function stats(){
        return $this->hasOne(character_stats::class,'id','id');
    }

    public function skills(){
        return $this->hasOne(character_skills::class,'id','id');
    }

    public function weapons(){
        return $this->hasMany(character_weapons::class ,'character_id','id');
    }

    public function inventory(){
        return $this->hasMany(character_inventory::class ,'character_id','id');
    }

    public function ammo(){
        return $this->hasMany(character_ammo::class,'character_id','id');
    }

}
