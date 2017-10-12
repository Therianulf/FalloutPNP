<?php

namespace App\Http\Controllers;

use App\character;
use App\character_ammo;
use App\character_weapons;
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

    public function remove_ammo(Request $request){
        $weapon_id = $request->input('weapon_id');
        $ammo_count = $request->input('ammo_count');
        $ammo_class = $request->input('ammo_class');
        $group_id = $request->input('group_id');
        $weapon = character_weapons::find($weapon_id);
        $character_id = $weapon->character_id;
        $ammo_type = $weapon->ammo_type;
        $ammo = character_ammo::where('character_id',$character_id)->where('ammo_type',$ammo_type)->where('ammo_class',$ammo_class)->first();
        $ammo->ammo_count = $ammo->ammo_count - $ammo_count;
        $weapon->ammo_loaded = $weapon->ammo_loaded - $ammo_count;
        $ammo->save();
        $weapon->save();
        $characters = character::where('group_id',$group_id)->get();

        return view('admin.admin',['characters'=>$characters,'group_id'=>$group_id]);
    }

    public function reload_ammo(Request $request){
        $group_id = $request->input('group_id');
        $weapon_id = $request->input('weapon_id');
        $weapon = character_weapons::find($weapon_id);
        $weapon->ammo_loaded = $weapon->ammo_capacity;
        $weapon->save();
        $characters = character::where('group_id',$group_id)->get();
        return view('admin.admin',['characters'=>$characters,'group_id'=>$group_id]);
    }
}
