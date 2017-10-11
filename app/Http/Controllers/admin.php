<?php

namespace App\Http\Controllers;

use App\character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class admin extends Controller
{
    public function admin(Request $request){
        $group_id = $request->input('group_id');
        $characters = character::where('group_id',$group_id)->get();

        return view('admin.admin',['characters'=>$characters,'group_id'=>$group_id]);
    }

    public function to_hit(Request $request){
        $group_id = $request->input('group_id');
        $characters = character::where('group_id',$group_id)->get();

        $to_hit = $request->input('base_skill');
        $range = $request->input('gun_range') - $request->input('current_range');
        if ($range < 0){
            $to_hit = $to_hit - ($range * -3);
        }
        $to_hit = $to_hit - $request->input('ac');
        $to_hit = $to_hit - $request->input('light');
        $to_hit = $to_hit - $request->input('cover');
        $to_hit = $to_hit - $request->input('weapon_status');
        $to_hit = $to_hit - $request->input('target');
        return view('admin.admin',['characters'=>$characters,'group_id'=>$group_id,'to_hit'=>$to_hit]);
    }
}
