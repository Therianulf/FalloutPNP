<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Game extends Controller
{
    public function game(Request $request){
        return view('fallout');
    }

    public function new_character(Request $request){
        return view('new_character.new_char' , ['user' => $request->user()]);

    }

}
