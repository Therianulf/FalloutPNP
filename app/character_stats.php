<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class character_stats extends Model
{
    protected $fillable = ['strength','perception','endurance','charisma','intelligence','agility','luck','hit_points','base_armor','total_armor','action_points','carry_weight','melee_damage','damage_threshold','damage_resistance','poison_resistance','radiation_resistance','gas_resistance','electric_resistance','sequence','heal_rate','critical_chance','total_hit_points'];
    public function character(){
        $this->belongsTo(character::class,'id');
    }
}
