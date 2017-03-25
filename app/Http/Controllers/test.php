<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    //

    public function test1(Request $request){
        $user = $request->user();
        foreach ($user->characters as $character){
            dd($character->skills);
        }

    }

}
