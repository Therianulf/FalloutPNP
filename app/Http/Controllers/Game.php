<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Game extends Controller
{
    public function game(Request $request){
        return view('fallout');
    }



}
