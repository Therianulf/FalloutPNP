<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class character_skills extends Model
{
    public static function determine_base_skills($character_id){
        $character_stats = character_stats::find($character_id);
        return [
            'small_guns'=>(5 + (4 * $character_stats->agility)),
            'big_guns'=>(2 * $character_stats->agility),
            'energy_weapons'=>((2 * $character_stats->agility) +(2 *$character_stats->perception)),
            'unarmed'=>(30 + (2 * ($character_stats->agility + $character_stats->strength))),
            'melee_weapons'=>(20 +(2 * ($character_stats->agility + $character_stats->strength))),
            'throwing'=>(4 * $character_stats->agility),
            'first_aid'=>(2 * ($character_stats->perception + $character_stats->endurance)),
            'doctor'=>(5 + ($character_stats->perception + $character_stats->intelligence)),
            'sneak'=>(5 + (3 * $character_stats->agility)),
            'lockpick'=>(10 + ($character_stats->perception + $character_stats->agility)),
            'steal'=>(3 * $character_stats->agility),
            'traps'=>(10 + ($character_stats->perception + $character_stats->agility)),
            'science'=>(4 * $character_stats->intelligence),
            'repair'=>(3 * $character_stats->intelligence),
            'pilot'=>(2 *($character_stats->perception + $character_stats->agility)),
            'speech'=>(5 * $character_stats->charisma),
            'barter'=>(4 * $character_stats->charisma),
            'outdoorsman'=>(2 * ($character_stats->intelligence + $character_stats->endurance))
        ];
    }

    public function character(){
       return $this->belongsTo(character::class,'id');
    }
}
