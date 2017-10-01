<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\character_stats;

class test extends Controller
{
    //

    public function test1(Request $request){
        $character_id = $request->char_id;
        $character_stats = character_stats::find($character_id);
        dd($character_stats);
    }

}
