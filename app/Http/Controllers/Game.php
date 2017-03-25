<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Game extends Controller
{
    public function game(){
        return view('fallout');
    }

}
