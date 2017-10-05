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
                        <div class="contentCont" data-title="Bio">
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
                                <li class="spinnerCont active cf">
                                    <label for="strength">Strength: <i class="fa fa-info-circle"></i></label>
                                    <input id="strength" name="attributes[strength]" data-role="spinner" value="0">
                                </li>
                                <li class="spinnerCont cf">
                                    <label for="perception">Perception: <i class="fa fa-info-circle"></i></label>
                                    <input id="perception" name="attributes[perception]" data-role="spinner" value="0">
                                </li>
                                <li class="spinnerCont cf">
                                    <label for="endurance">Endurance: <i class="fa fa-info-circle"></i></label>
                                    <input id="endurance" name="attributes[endurance]" data-role="spinner" value="0">
                                </li>
                                <li class="spinnerCont cf">
                                    <label for="charisma">Charisma: <i class="fa fa-info-circle"></i></label>
                                    <input id="charisma" name="attributes[charisma]" data-role="spinner" value="0">
                                </li>
                                <li class="spinnerCont cf">
                                    <label for="intelligence">Intelligence: <i class="fa fa-info-circle"></i></label>
                                    <input id="intelligence" name="attributes[intelligence]" data-role="spinner" value="0">
                                </li>
                                <li class="spinnerCont cf">
                                    <label for="agility">Agility: <i class="fa fa-info-circle"></i></label>
                                    <input id="agility" name="attributes[agility]" data-role="spinner" value="0">
                                </li>
                                <li class="spinnerCont cf">
                                    <label for="luck">Luck: <i class="fa fa-info-circle"></i></label>
                                    <input id="luck" name="attributes[luck]" data-role="spinner" value="0">
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
                        <div class="descCont">
                            <div class="desc">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Strength</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>A measure of your character's physical strength and muscle power.
                                    Characters with a high Strength probably spent a lot of time in the gym
                                    in high school. This statistic is used in the secondary
                                    statistics Carry Weight and Melee Damage. All weapons have a minimum Strength
                                    requirement as well. Rolls against Strength are used when characters try to break doors down,
                                    bend the bars on their prison cell, and do other feats that require sheer muscle power.</p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Perception</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>Perceptive characters notice details instantly, like smells, sounds, and sights that don't fit
                                    a "normal" picture. Perceptive characters tend to be able to read another person's reactions,
                                    and can even tell when another person is lying. This statistic is used in the Sequence secondary
                                    statistic, and in several skills such as Lockpick, Traps, First Aid, and Doctor. The primary
                                    use of this statistic is to determine the maximum distance your character can shoot a ranged
                                    weapon effectively.</p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Endurance</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>Endurance measures the body’s constitution and overall health.
                                    The Hit Point, Poison Resistance, Radiation Resistance, and Healing Rate secondary
                                    statistics are based on Endurance, which also modifies a character's Survival skills.
                                    Rolls against Endurance determine things like whether your character can hang on to that
                                    rope over a canyon, or can resist the deadly cloud of bacteria some renegade scientist
                                    just sprayed in his or her face.</p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Charisma</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>Charisma measures how physically attractive your character is
                                    and how adept they are at knowing exactly what to say and do in social situations.
                                    No secondary statistics are based on Charisma.
                                    It heavily influences the Barter and Speech skills.
                                    Rolls against Charisma are made when a character is attempting to schmooze past
                                    some guards or trying to pick someone up in a bar.</p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Intelligence</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>Intelligence is a character's higher reasoning power. No secondary statistics are based on intelligence. Many of the non-combat skills use it for
                                    their base values, however. Intelligence also determines the number of skill points your
                                    character gains each level. Rolls against Intelligence are made when characters are
                                    attempting to guess a password or determine the pattern sequence of electric charges
                                    running through the pattern on the floor.</p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Agility</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>Agility measures the speed of a character's reactions. This statistic is the
                                    basis for the Armor Class and Action Point secondary statistics. It modifies the greatest
                                    number of skills as well, especially combat skills. Rolls against Agility are made when your
                                    character dodges a poison dart trap or attempts to jerk his arm out of the sewer before a
                                    mutated rat bites it off.</p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Luck</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>Perhaps the most ambiguous statistic, Luck is everything and nothing. Luck directly affects
                                    the Critical Chance secondary statistic as well as influences Social
                                    skills. Rolls against Luck are made at the GM's discretion; Luck rolls can determine if,
                                    when your character is out of ammo and lying half-unconscious on the ground, he happens to
                                    find that loaded shotgun lying concealed and forgotten in the dust.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="centerCont">
                    <div class="sep left"></div>
                    <div class="subMenu">
                        <a class="active" href="#">Bio</a>
                        <a href="#">S.P.E.C.I.A.L.</a>
                        <a class="submit" href="#">Done</a>
                    </div>
                    <div class="sep right"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
