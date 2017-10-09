<?php

namespace App\Http\Controllers;

use App\character_skills;
use Illuminate\Http\Request;
use App\character_stats;

class test extends Controller
{
    //

    public function test1(Request $request){
        $character_id = $request->char_id;
        $character_skills = character_skills::determine_base_skills($character_id);
        dd($character_skills);
    }

}
