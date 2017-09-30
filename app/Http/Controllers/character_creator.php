<?php

namespace App\Http\Controllers;

use App\character;
use App\character_stats;
use Illuminate\Http\Request;

class character_creator extends Controller
{
    //

    public function new_character(Request $request){
        return view('new_character.attributes' , ['user' => $request->user()]);

    }

    public function attributes_handler(Request $request){

       switch ($request->agility){
           case 1:
               $action_points = 5;
               break;
           case 2:
           case 3:
               $action_points = 6;
               break;
           case 4:
           case 5:
               $action_points = 7;
               break;
           case 6:
           case 7:
               $action_points = 8;
               break;
           case 8:
           case 9:
               $action_points = 9;
               break;
           case 10:
               $action_points = 10;
               break;
           case ($request->agility > 10):
               $action_points = 10;
               break;
       }

       switch ($request->strength){
           case ($request->strength <= 6):
               $melee_damage = 1;
               break;
           case 7:
               $melee_damage = 2;
               break;
           case 8:
               $melee_damage = 3;
               break;
           case 9:
               $melee_damage = 4;
               break;
           case 10:
               $melee_damage = 5;
               break;
           case ($request->strength >= 11):
               $melee_damage = 6;
               break;
       }
       $new_character = character::create(['first_name'=>$request->first_name,'last_name'=>$request->last_name,'character_description'=>$request->character_description,'race'=>'human','level'=>1,'experience'=>0,'user_id'=>$request->user()->id]);
       $new_character_stats = character_stats::create(['strength'=>$request->strength,'perception'=>$request->perception,'endurance'=>$request->endurance,'charisma'=>$request->charisma,'intelligence'=>$request->intelligence,'agility'=>$request->agility,'luck'=>$request->luck,'hit_points'=>(15 + ($request->strength + (2 * $request->endurance))) ,'base_armor'=>0,'total_armor'=>0,'action_points'=>$action_points,'carry_weight'=>(25 + ($request->strength * 25)),'melee_damage'=>$melee_damage,'damage_threshold'=>0,'damage_resistance'=>0,'poison_resistance'=>($request->endurance * 5)]);
    }

    public function character_skills(Request $request){


    }
}
