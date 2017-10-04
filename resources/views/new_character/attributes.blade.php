@extends('layouts.new_char_layout')

@section('content')
    <div class="attributesPage" data-role="attributesPage">
        <div id="overlay"></div>
        <div class="pageContent">
            <div class="header">
                <div class="pgTitle">
                    <span class="sep left"></span>
                    <span class="title">Bio</span>
                    <span class="sep right"></span>
                </div>
                <div class="hpCont statCont">
                    <span class="title">HP</span>
                    <span class="value">???/???</span>
                </div>
                <div class="apCont statCont">
                    <span class="title">AP</span>
                    <span class="value">0/0</span>
                </div>
                <div class="xpCont statCont">
                    <span class="title">XP</span>
                    <span class="value">0/???</span>
                </div>
            </div>
            <div class="contentSection cf">
                <div class="mainContent">
                    <form method="post" action="/attributes_handler" >
                        {{ csrf_field() }}
                        <div class="contentCont" data-tile="Bio">
                            <ul>
                                <li>
                                    <label for="firstName">First Name:</label>
                                    <input id="firstName" type="text" name="attributes[first_name]" />
                                </li>
                                <li>
                                    <label for="lastName">Last Name:</label>
                                    <input id="lastName" type="text" name="attributes[last_name]" />
                                </li>
                                <li>
                                    <label for="charDesc">Character Bio:</label>
                                    <textarea id="charDesc" name="attributes[character_description]" rows="4" cols="50"></textarea>
                                </li>
                            </ul>
                        </div>
                        <div class="contentCont hide" data-title="S.P.E.C.I.A.L. Attributes">
                            <ul>
                                <li class="spinnerCont">
                                    <label for="strength">Strength:</label>
                                    <input id="strength" name="attributes[strength]" data-role="spinner">
                                </li>
                                <li class="spinnerCont">
                                    <label for="perception">Perception:</label>
                                    <input id="perception" name="attributes[perception]" data-role="spinner">
                                </li>
                                <li class="spinnerCont">
                                    <label for="endurance">Endurance:</label>
                                    <input id="endurance" name="attributes[endurance]" data-role="spinner">
                                </li>
                                <li class="spinnerCont">
                                    <label for="charisma">Charisma:</label>
                                    <input id="charisma" name="attributes[charisma]" data-role="spinner">
                                </li>
                                <li class="spinnerCont">
                                    <label for="intelligence">Intelligence:</label>
                                    <input id="intelligence" name="attributes[intelligence]" data-role="spinner">
                                </li>
                                <li class="spinnerCont">
                                    <label for="agility">Agility:</label>
                                    <input id="agility" name="attributes[agility]" data-role="spinner">
                                </li>
                                <li class="spinnerCont">
                                    <label for="luck">Luck:</label>
                                    <input id="luck" name="attributes[luck]" data-role="spinner">
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="subContent">
                    <div class="bioCont contentCont">
                        <div class="titleCont">
                            <span class="sep left"></span>
                            <span class="title">Who are you?</span>
                            <span class="sep right"></span>
                        </div>
                        <p>Will your character be a gun-happy sniper? A dune-buggy racer?
                            A sneaky thief? A fast talker who can squeak past the armed guards with a good excuse?
                            A boxing champ, strong but slow? A beautiful seductress who takes what she wants after the moment?
                            The possibilities are endless.</p>
                    </div>
                    <div class="specialCont contentCont hide">
                        <div id="statProgressBar"></div>
                        <ul>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="subMenu">
                    <div class="sep left"></div>
                    <a class="active" href="#">Bio</a>
                    <a href="#">S.P.E.C.I.A.L.</a>
                    <a href="#">Done</a>
                    <div class="sep right"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
