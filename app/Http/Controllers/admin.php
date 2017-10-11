<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class admin extends Controller
{
    public function admin(Request $request){
        return view('admin.admin');
    }
}
