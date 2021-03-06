<?php

namespace App\Http\Controllers;

use App\character;
use App\character_skills;
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
       if ($request->endurance <= 5){
           $heal_rate = 1;
       }elseif($request->endurance >= 6 AND $request->endurance <= 8){
           $heal_rate = 2;
       }elseif($request->endurance >= 9 AND $request->endurance <= 10){
           $heal_rate = 3;
       }elseif($request->endurance >= 11){
           $heal_rate = 4;
       }
       $new_character = character::create(['first_name'=>$request->first_name,'last_name'=>$request->last_name,'character_description'=>$request->character_description,'race'=>'human','level'=>1,'experience'=>0,'user_id'=>$request->user()->id]);
       $new_character_stats = character_stats::create(['strength'=>$request->strength,'perception'=>$request->perception,'endurance'=>$request->endurance,'charisma'=>$request->charisma,'intelligence'=>$request->intelligence,'agility'=>$request->agility,'luck'=>$request->luck,'hit_points'=>(15 + ($request->strength + (2 * $request->endurance))) ,'base_armor'=>0,'total_armor'=>0,'action_points'=>$action_points,'carry_weight'=>(25 + ($request->strength * 25)),'melee_damage'=>$melee_damage,'damage_threshold'=>0,'damage_resistance'=>0,'poison_resistance'=>($request->endurance * 5),'radiation_resistance'=>($request->endurance * 2),'gas_resistance'=>0,'electric_resistance'=>30,'sequence'=>((2 * $request->perception) + $request->intelligence),'heal_rate'=>$heal_rate,'critical_chance'=>$request->luck]);

       $pageData = view(
           'new_character.skills',
               [
                   'character'=>$new_character,
                   'stats'=>$new_character_stats,
                   'base_skill_array'=>character_skills::determine_base_skills($new_character->id)
               ]
       );
       $pageSections = $pageData->renderSections();
       return response()->json(json_encode($pageSections['content']), 200);
    }

    public function character_skills_handler(Request $request){
        $input = $request->input();
        unset($input['_token']);
        $skill_array = character_skills::determine_base_skills($input['character_id']);
        $character_id = $skill_array['id'] = $input['character_id'];

        unset($input['character_id']);
        $inc = 0;
        foreach ($input as $key =>$value){
            switch ($inc){
                case 0:
                    $skill_array['first_tag'] = $key;
                    break;
                case 1:
                    $skill_array['second_tag'] = $key;
                    break;
                case 2:
                    $skill_array['third_tag'] = $key;
                    break;
            }
            if (array_key_exists($key,$skill_array)){
                $skill_array[$key] = $skill_array[$key] + 20;
                $inc ++;
            }

        }
        character_skills::create($skill_array);
        return response()->json(json_encode(array('success', true)), 200);

    }
}
