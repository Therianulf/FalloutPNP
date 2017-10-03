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
        $attributes = $request->get('attributes');

       switch ($attributes['agility']){
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
           case ($attributes['agility'] > 10):
               $action_points = 10;
               break;
       }

       switch ($attributes['strength']){
           case ($attributes['strength'] <= 6):
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
           case ($attributes['strength'] >= 11):
               $melee_damage = 6;
               break;
       }
       if ($attributes['endurance'] <= 5){
           $heal_rate = 1;
       }elseif($attributes['endurance'] >= 6 AND $attributes['endurance'] <= 8){
           $heal_rate = 2;
       }elseif($attributes['endurance'] >= 9 AND $attributes['endurance'] <= 10){
           $heal_rate = 3;
       }elseif($attributes['endurance'] >= 11){
           $heal_rate = 4;
       }
       $new_character = character::create([
           'first_name'=>$attributes['first_name'],
           'last_name'=>$attributes['last_name'],
           'character_description'=>$attributes['character_description'],
           'race'=>'human',
           'level'=>1,
           'experience'=>1,
           'user_id'=>$request->user()->id
       ]);
       $new_character_stats = character_stats::create(['strength'=>$attributes['strength'],'perception'=>$attributes['perception'],'endurance'=>$attributes['endurance'],'charisma'=>$attributes['charisma'],'intelligence'=>$attributes['intelligence'],'agility'=>$attributes['agility'],'luck'=>$attributes['luck'],'hit_points'=>(15 + ($attributes['strength'] + (2 * $attributes['endurance']))) ,'base_armor'=>0,'total_armor'=>0,'action_points'=>$action_points,'carry_weight'=>(25 + ($attributes['strength'] * 25)),'melee_damage'=>$melee_damage,'damage_threshold'=>0,'damage_resistance'=>0,'poison_resistance'=>($attributes['endurance'] * 5),'radiation_resistance'=>($attributes['endurance'] * 2),'gas_resistance'=>0,'electric_resistance'=>30,'sequence'=>((2 * $attributes['perception']) + $attributes['intelligence']),'heal_rate'=>$heal_rate,'critical_chance'=>$attributes['luck']]);
        dd([$new_character,$new_character_stats]);
       //return view('new_character.skills',['character'=>$new_character,'stats'=>$new_character_stats]);
    }

    public function character_skills(Request $request){


    }
}
