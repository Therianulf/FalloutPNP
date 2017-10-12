@extends('layouts.app')

@section('content')
    <script src="js/charWidget.js"></script>
    <div class="characterPage pageCont" data-role="characterPage">
        <div id="overlay"></div>
        <div class="pageContent">
            <div class="header">
                <div class="pgTitle">
                    <span class="sep left"></span>
                    <span class="title">{{$character->first_name}} {{$character->last_name}}</span>
                    <span class="sep right"></span>
                </div>
                <div class="hpCont statCont">
                    <span class="title">HP</span>
                    <span class="value">{{$stats->hit_points}}/{{$stats->total_hit_points}}</span>
                </div>
                <div class="apCont statCont">
                    <span class="title">AP</span>
                    <span class="value">{{$stats->action_points}}/10</span>
                </div>
                <div class="xpCont statCont">
                    <span class="title">XP</span>
                    <span class="value">0/100</span>
                </div>
            </div>
            <div class="contentSection cf">
                <div class="mainContent">
                    <form method="post" action="/skills_handler">
                        {{ csrf_field() }}
                        <input type="hidden" name="character_id" value="{{$character->id}}"/>
                        <div class="contentCont step1" data-title="Skills">
                            <ul>
                                <li class="checkboxCont active cf">
                                    <label for="barter">Barter: </label>
                                    <div class="inputCont cf">
                                        <input id="barter" value="{{$skills['barter']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="big_guns">Big Guns: </label>
                                    <div class="inputCont cf">
                                        <input id="big_guns" value="{{$skills['big_guns']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="doctor">Doctor: </label>
                                    <div class="inputCont cf">
                                        <input id="doctor" value="{{$skills['doctor']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="energy_weapons">Energy Weapons: </label>
                                    <div class="inputCont cf">
                                        <input id="energy_weapons" value="{{$skills['energy_weapons']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="first_aid">First Aid: </label>
                                    <div class="inputCont cf">
                                        <input id="first_aid" value="{{$skills['first_aid']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="lockpick">Lockpick: </label>
                                    <div class="inputCont cf">
                                        <input id="lockpick" value="{{$skills['lockpick']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="melee_weapons">Melee Weapons: </label>
                                    <div class="inputCont cf">
                                        <input id="melee_weapons" value="{{$skills['melee_weapons']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="outdoorsman">Outdoorsman: </label>
                                    <div class="inputCont cf">
                                        <input id="outdoorsman" value="{{$skills['outdoorsman']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="pilot">Pilot: </label>
                                    <div class="inputCont cf">
                                        <input id="pilot" value="{{$skills['pilot']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="repair">Repair: </label>
                                    <div class="inputCont cf">
                                        <input id="repair" value="{{$skills['repair']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="science">Science: </label>
                                    <div class="inputCont cf">
                                        <input id="science" value="{{$skills['science']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="small_guns">Small Guns: </label>
                                    <div class="inputCont cf">
                                        <input id="small_guns" value="{{$skills['small_guns']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="sneak">Sneak: </label>
                                    <div class="inputCont cf">
                                        <input id="sneak" value="{{$skills['sneak']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="speech">Speech: </label>
                                    <div class="inputCont cf">
                                        <input id="speech" value="{{$skills['speech']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="steal">Steal: </label>
                                    <div class="inputCont cf">
                                        <input id="steal" value="{{$skills['steal']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="throwing">Throwing: </label>
                                    <div class="inputCont cf">
                                        <input id="throwing" value="{{$skills['throwing']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="traps">Traps: </label>
                                    <div class="inputCont cf">
                                        <input id="traps" value="{{$skills['traps']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="unarmed">Unarmed: </label>
                                    <div class="inputCont cf">
                                        <input id="unarmed" value="{{$skills['unarmed']}}" disabled/>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="subContent">
                        <div class="contentCont step1" data-title="Stats">

                            <ul>
                                <li class="checkboxCont cf">
                                    <label for="strength">Strength: </label>
                                    <div class="inputCont cf">
                                        <input id="strength" value="{{$stats['strength']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="perception">Perception: </label>
                                    <div class="inputCont cf">
                                        <input id="perception" value="{{$stats['perception']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="endurance">Endurance: </label>
                                    <div class="inputCont cf">
                                        <input id="endurance" value="{{$stats['endurance']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="charisma">Charisma: </label>
                                    <div class="inputCont cf">
                                        <input id="charisma" value="{{$stats['charisma']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="intelligence">Intelligence: </label>
                                    <div class="inputCont cf">
                                        <input id="intelligence" value="{{$stats['intelligence']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="agility">Agility: </label>
                                    <div class="inputCont cf">
                                        <input id="agility" value="{{$stats['agility']}}" disabled/>
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="luck">luck: </label>
                                    <div class="inputCont cf">
                                        <input id="luck" value="{{$stats['luck']}}" disabled/>
                                    </div>
                                </li>
                            </ul>
                        <div/>
                </div>
            </div>
        </div>
@endsection