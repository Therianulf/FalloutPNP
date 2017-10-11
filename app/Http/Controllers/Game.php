<?php

namespace App\Http\Controllers;

use App\character;
use App\character_inventory;
use App\character_skills;
use App\character_stats;
use App\character_status;
use App\character_weapons;
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
                'skills'=>character_skills::find($request->input('character_id')),
                'weapons'=>character_weapons::where('character_id',$request->input('character_id'))->get(),
                'ammo'=>character_ammo::where('character_id',$request->input('character_id'))->get(),
                'armor'=>character_armor::where('character_id',$request->input('character_id'))->get(),
                'inventory'=>character_inventory::where('character_id',$request->input('character_id'))->get(),
                'status'=>character_status::where('character_id',$request->input('character_id'))->get(),
            ]);
    }


}
