@extends('layouts.new_char_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New Character</div>
                    <div class="panel-body">
                        <label for="first_name">Character's First Name</label> <input type="text" name="first_name" id="first_name">
                        <br/>
                        <label for="first_name">Character's Last Name</label> <input type="text" name="last_name" id="last_name">
                        <br/>
                        <label for="character_total_points">Character's Total Points</label> <strong  id="character_total_points" name="character_total_points">40</strong>
                        <br/>
                        <label for="character_total_left">Character's Total Points</label> <strong  id="character_total_left" name="character_total_left">5</strong>
                        <br/>
                        <label for="character_strength">Character's Strength</label> <input type="number" value="5" id="character_strength" name="character_strength">
                        <br/>
                        <label for="character_perception">Character's Perception</label> <input type="number" value="5" id="character_perception" name="character_perception">
                        <br/>
                        <label for="character_endurance">Character's Endurance</label> <input type="number" value="5" id="character_endurance" name="character_endurance">
                        <br/>
                        <label for="character_charisma">Character's Charisma</label> <input type="number" value="5" id="character_charisma" name="character_charisma">
                        <br/>
                        <label for="character_intelligence">Character's Intelligence</label> <input type="number" value="5" id="character_intelligence" name="character_intelligence">
                        <br/>
                        <label for="character_agility">Character's Agility</label> <input type="number" value="5" id="character_agility" name="character_agility">
                        <br/>
                        <label for="character_luck">Character's Luck</label> <input type="number" value="5" id="character_luck" name="character_luck">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
