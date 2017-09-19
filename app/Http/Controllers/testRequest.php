<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testRequest extends Controller
{
    //
    public function landing(Request $request){
        dd($request);
    }
}
