<?php

namespace App\Http\Controllers;

use App\character_skills;
use App\character_weapons;
use Illuminate\Http\Request;
use App\character_stats;

class test extends Controller
{
    //

    public function test1(Request $request){
        //$character_id = $request->char_id;
        //$character_skills = character_skills::determine_base_skills($character_id);
        //return view('test_views.test');
        $characters = $request->user()->characters;

        foreach ($characters as $character) {
            foreach ($character->weapons as $weapon){
                if ($weapon->ammo_type == "556_nato"){
                    dd($weapon->ammo()->where('ammo_type',$weapon->ammo_type)->where('character_id',$character->id)->get());

                }

            }


        }
    }



}
