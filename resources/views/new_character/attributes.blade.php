@extends('layouts.new_char_layout')

@section('content')
    <div class="attributesPage container" data-role="attributesPage">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New Character</div>
                    <div class="panel-body">
                        <div id="statProgressBar"></div>
                        <form action="/attributes_handler" >
                            <div id="sectionCont">
                                <h3>Character Details</h3>
                                <div>
                                    <input type="text" name="first_name" placeholder="First Name"/>
                                    <input type="text" name="last_name" placeholder="Last Name"/>
                                    <br />
                                    <label for="charDesc">Character's Description:</label>
                                    <br />
                                    <textarea id="charDesc" name="character_description" rows="4" cols="50"></textarea>
                                </div>
                                <h3>S.P.E.C.I.A.L. Attributes</h3>
                                <div>
                                    <div class="optionCont">
                                        <label for="strength">Character's Strength:</label>
                                        <input id="strength" name="character_strength" data-role="spinner">
                                    </div>
                                    <div class="optionCont">
                                        <label for="perception">Character's Perception:</label>
                                        <input id="perception" name="character_perception" data-role="spinner">
                                    </div>
                                    <div class="optionCont">
                                        <label for="endurance">Character's Endurance:</label>
                                        <input id="endurance" name="character_endurance" data-role="spinner">
                                    </div>
                                    <div class="optionCont">
                                        <label for="charisma">Character's Charisma:</label>
                                        <input id="charisma" name="character_charisma" data-role="spinner">
                                    </div>
                                    <div class="optionCont">
                                        <label for="intelligence">Character's Intelligence:</label>
                                        <input id="intelligence" name="character_intelligence" data-role="spinner">
                                    </div>
                                    <div class="optionCont">
                                        <label for="agility">Character's Agility:</label>
                                        <input id="agility" name="character_agility" data-role="spinner">
                                    </div>
                                    <div class="optionCont">
                                        <label for="luck">Character's Luck:</label>
                                        <input id="luck" name="character_luck" data-role="spinner">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="formSubmit" type="submit" >Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
