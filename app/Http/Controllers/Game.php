<?php

namespace App\Http\Controllers;

use App\character;
use App\character_skills;
use App\character_stats;
use Illuminate\Http\Request;

class Game extends Controller
{
    public function game(Request $request){
        $characters = character::where('user_id',$request->user()->id)->get();
        return view('fallout',['characters'=>$characters]);
    }

    public function character(Request $request){
        return view('character.selected_char',
            [
                'character'=>character::find($request->input('character_id')),
                'stats'=>character_stats::find($request->input('character_id')),
                'skills'=>character_skills::find($request->input('character_id'))
            ]);
    }


}
