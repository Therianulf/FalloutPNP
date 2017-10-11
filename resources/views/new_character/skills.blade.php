@extends('layouts.new_char_layout')
@section('content')
    <div class="skillsPage pageCont" data-role="skillsPage">
        <div id="overlay"></div>
        <div class="pageContent">
            <div class="header">
                <div class="pgTitle">
                    <span class="sep left"></span>
                    <span class="title">Skills</span>
                    <span class="sep right"></span>
                </div>
                <div class="hpCont statCont">
                    <span class="title">HP</span>
                    <span class="value">{{$stats->hit_points}}/{{$stats->hit_points}}</span>
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
                    <form method="post" action="/skills_handler" >
                        {{ csrf_field() }}
                        <input type="hidden" name="character_id" value="{{$character->id}}"/>
                        <div class="contentCont step1" data-title="Skills">
                            <ul>
                                <li class="checkboxCont active cf">
                                    <label for="small_guns">Small Guns: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="small_guns" value="{{$base_skill_array['small_guns']}}" disabled />
                                        <input name="small_guns" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="big_guns">Big Guns: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="big_guns" value="{{$base_skill_array['big_guns']}}" disabled />
                                        <input name="big_guns" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="energy_weapons">Energy Weapons: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="energy_weapons" value="{{$base_skill_array['energy_weapons']}}" disabled />
                                        <input name="energy_weapons" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="unarmed">Unarmed: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="unarmed" value="{{$base_skill_array['unarmed']}}" disabled />
                                        <input name="unarmed" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="melee_weapons">Melee Weapons: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="melee_weapons" value="{{$base_skill_array['melee_weapons']}}" disabled />
                                        <input name="melee_weapons" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="throwing">Throwing: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="throwing" value="{{$base_skill_array['throwing']}}" disabled />
                                        <input name="throwing" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="first_aid">First Aid: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="first_aid" value="{{$base_skill_array['first_aid']}}" disabled />
                                        <input name="first_aid" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="doctor">Doctor: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="doctor" value="{{$base_skill_array['doctor']}}" disabled />
                                        <input name="doctor" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="sneak">Sneak: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="sneak" value="{{$base_skill_array['sneak']}}" disabled />
                                        <input name="sneak" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="lockpick">lockpick: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="lockpick" value="{{$base_skill_array['lockpick']}}" disabled />
                                        <input name="lockpick" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="steal">Steal: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="steal" value="{{$base_skill_array['steal']}}" disabled />
                                        <input name="steal" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="traps">Traps: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="traps" value="{{$base_skill_array['traps']}}" disabled />
                                        <input name="traps" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="science">Science: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="science" value="{{$base_skill_array['science']}}" disabled />
                                        <input name="science" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="repair">Repair: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="repair" value="{{$base_skill_array['repair']}}" disabled />
                                        <input name="repair" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="pilot">Pilot: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="pilot" value="{{$base_skill_array['pilot']}}" disabled />
                                        <input name="pilot" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="speech">Speech: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="speech" value="{{$base_skill_array['speech']}}" disabled />
                                        <input name="speech" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="barter">Barter: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="barter" value="{{$base_skill_array['barter']}}" disabled />
                                        <input name="barter" type="checkbox" />
                                    </div>
                                </li>
                                <li class="checkboxCont cf">
                                    <label for="outdoorsman">Outdoorsman: <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="outdoorsman" value="{{$base_skill_array['outdoorsman']}}" disabled />
                                        <input name="outdoorsman" type="checkbox" />
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
                <div class="subContent">
                    <div class="skillCont contentCont">
                        <div id="statProgressVal">
                            <p>Specialization Points: <span>0/3</span> Points Left</p>
                        </div>
                        <div class="descCont">
                            <div class="desc">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">small guns</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>This skill covers the use of bows, pistols, sub-machine guns, rifles, and shotguns. The higher your Small Guns skill, the easier it will be for you to hit your target, and the longer the effective range you will have in combat. Initial level: Starting Small Guns skill is equal to 5% + (4 X AG). Average starting characters will have a 25% Small Guns skill.</p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">big guns</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>This is the skill of flamethrowers, miniguns, rocket launchers, heavy machine guns, and other large support weapons. If it's a large weapon, you can count on Big Guns being the skill rolled against. Like Small Guns, the better your skill, the easier it will be to hit your target, and the longer the range of your shot. Initial level: Starting Big Guns skill is equal to 0% + (2 X AG). Average starting characters have a 10% Big Guns skill.</p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Energy Weapons</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>The use of energy weapons is not a very common skill in the post-nuclear world. Energy weapons were just coming into actual warfare when the world blew up. Lasers and plasma weapons are covered by the Energy Weapons skill. Basically, if it uses an energy cell or power pack, and not cartridge ammunition, it falls under this skill. Initial level: Starting Energy Weapons skill is equal to 0% + (2 X AG). Average starting characters will have a 10% Energy Weapons skill.</p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Unarmed</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>This is the skill of beating people up with your fists and feet. The better you are at this skill, the more likely you are going to hit them in combat. This skill also covers the use of weapons that enhance unarmed combat such as brass knuckles, spiked knuckles, and the legendary Power Fist. At higher skill levels, you will learn new techniques of fighting. Everyone starts with a good Unarmed skill, since the basic concept is pretty simple. Initial level: Starting Unarmed skill is equal to 30% + (2 X (AG + STR)). Average starting characters will have a 50% in Unarmed Combat.</p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">melee weapons</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>This covers the use of most melee
                                    weapons. Knives, spears, hammers, and
                                    crowbars are all melee weapons. Since
                                    using simple tools to beat things is
                                    something fairly innate to human nature,
                                    this is usually a pretty high skill.
                                    Initial Level: 20% + (2 X (AG + STR)).
                                    Average characters will have a 40%
                                    skill. </p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Throwing</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>Whenever a weapon is thrown, this skill
                                    gets used. Throwing knives, small
                                    rocks, and grenades are throwing
                                    weapons. If you miss, the object still
                                    has to end up somewhere. It is possible
                                    to throw a weapon and have it end up
                                    right at your feet. If it's a knife, no
                                    big deal. If it's a grenade, that's a
                                    really big deal. The maximum distance
                                    you can throw a weapon is based on your
                                    character's Strength, and the type of
                                    weapon thrown. Initial Level: 0% + (4
                                    X AG). Average characters will have a
                                    20% skill. </p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">first aid</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>The skill of minor healing. You will be
                                    able to heal minor wounds, cuts, and
                                    bruises with this skill. You can only
                                    use it three times a day, and it takes a
                                    little while to work. You can use it on
                                    yourself, or anyone you are feeling
                                    particularly nice to at the time.
                                    Initial Level: Starting First Aid skill
                                    is equal to 0% + (2 X (PE + EN)).
                                    Average characters will have a 20%
                                    skill. Each use of this skill takes
                                    1d10 minutes and heals 1d10 Hit Points.
                                    You can only use this skill 3 times a
                                    day.</p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Doctor</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>A more advanced form of healing. You
                                    can heal serious damage and crippled
                                    limbs but not poison or radiation
                                    damage. Using this skill takes a while
                                    to perform. Every crippled limb will
                                    add to the time required to use the
                                    Doctor skill. You can play Doctor with
                                    yourself (except if you are Blind), or
                                    any other person / critter you choose to
                                    be kind to. In addition, a character can
                                    deal 2d10 hit points in 1 hour by
                                    successfully using the Doctor skill.
                                    You can only use the Doctor skill twice
                                    a day. Initial Level: Starting Doctor
                                    skill is equal to 5% + (PE + IN).
                                    Average characters will have a 15%
                                    skill.</p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Sneak</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>The skill of being able to move quietly
                                    or out of sight. When you are sneaking,
                                    other people will be less likely to
                                    notice you - at a distance. If you get
                                    too close to a dangerous creature, now
                                    matter how good you are at sneaking,
                                    they will notice you. Of course,
                                    whether someone notices you is based on
                                    what direction they are facing, the
                                    amount of light in the area, the amount
                                    of cover you have, and a hell of a lot
                                    of luck. Such is the life of a thief.
                                    Successfully sneaking up on a person
                                    means you get a bonus should you want to
                                    try to steal from them. Your sneak
                                    skill is rolled when you start sneaking,
                                    and once a minute while still sneaking.
                                    Initial Level: Starting Sneak skill is
                                    equal to 5% + (3 X AG). Average
                                    characters will have a 20% Sneak. </p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Lockpick</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>If you need to open locks without the
                                    proper key, this is the skill for you.
                                    Use it to get what you want, but other
                                    21
                                    people don't want you to have. Having
                                    an actual lockpick will improve your
                                    chances, but it is not necessary. There
                                    are two types of locks in the Fallout
                                    world: normal and electronic. Lockpicks
                                    work against normal locks, but to even
                                    attempt an electronic lock, you need an
                                    electronic lockpick. Certain locks can
                                    be harder to pick than others, and
                                    certain locks require that the picker
                                    has a lockpick. Initial Level: Starting
                                    Lockpick skill is equal to 10% + (PE +
                                    AG). Average characters will have a 20%
                                    skill. </p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Steal</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>This is the art of removing things from
                                    a person or an object without being
                                    noticed. Even if you succeed, there is
                                    a chance that the critter might notice
                                    you. Larger objects are more difficult
                                    to steal than smaller objects. The more
                                    objects you try to steal, the more
                                    likely you are to get noticed. You
                                    cannot steal objects a person is using
                                    (guns they are holding in their hands,
                                    armor they are wearing on their body,
                                    etc). If you try to steal from a
                                    person, it might be a good idea to stand
                                    behind them so they can't see you as
                                    well. Initial Level: 0% + (3 X AG).
                                    The average character will have a 15%
                                    Steal skill. </p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">traps</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>Not only does the Traps skill involve
                                    setting and disarming devices that cause
                                    harm to others, but it also covers
                                    setting, timing, and handling
                                    explosives. The higher your Traps
                                    skill, the less likely it is a bomb will
                                    blow up in your face, a huge rock will
                                    crush your party, and the more likely it
                                    is that the timer you just set will go
                                    off when you want it to. Initial Level:
                                    Starting Traps skill is equal to 10% +
                                    (PE + AG). Average characters will
                                    start with a 20% Traps skill. </p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Science</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>Science is the skill of working with
                                    electronic devices such as computers.
                                    It also covers how intuitive a character
                                    is. Characters with a high Science
                                    skill will notice things that others
                                    might miss, and characters who actively
                                    apply their Science skill to tasks can
                                    intuit answers to problems. Science
                                    skills are used when rolling to use (or
                                    break into) computers, determine what
                                    part a vehicle might need to run
                                    properly again, or to notice a vein of
                                    silver in an otherwise unremarkable
                                    rock. Science skill can also be used
                                    like First Aid to repair robots.
                                    Initial Level: Starting Science skill is
                                    equal to 0% + (4 X IN). Average
                                    characters will start with a 20% Science
                                    skill. </p>
                            </div><div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Repair</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>Repair is the practical application of
                                    the Science skill. As things are
                                    constantly breaking in the wastes, and
                                    there aren't customer service hotlines
                                    anymore, a person with a high Repair
                                    skill is always good to have around.
                                    Repair covers fixing all manner of
                                    mechanical things, from guns to
                                    vehicles, and can also be used to
                                    intentionally sabotage or disable
                                    mechanical things. The Repair skill can
                                    also be used like Doctor to repair
                                    robots. Initial Level: Starting Repair
                                    skill is equal to 0% + (3 X IN).
                                    Average characters will start with a 15%
                                    Repair skill. </p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Pilot</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>The skill
                                    of
                                    operating
                                    various
                                    kinds of
                                    motor
                                    vehicles,
                                    from cars
                                    to tanks to
                                    jeeps to
                                    vertibirds,

                                    airplanes,
                                    and helicopters. Characters with high
                                    pilot skills can take vehicles places
                                    that other characters couldn't, and just
                                    might avoid rolling that Highwayman when
                                    they hit that pothole. Initial Level:
                                    Starting Pilot skill is equal to 0% + 2X
                                    (AG + PE). Average characters will
                                    start with a 20% skill. </p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Speech</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>This is the skill of dialogue. The
                                    better your Speech skill, the more
                                    likely you will be able to get your way
                                    when talking to people. When there is a
                                    chance that an NPC might take your word,
                                    believe your lie, or just follow your
                                    instructions, this is the skill that is
                                    used. Initial Level: Starting Speech
                                    skill is equal to 0% + (5 X CH).
                                    Average characters will have a 35%
                                    skill. </p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">barter</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>The skill of trading. In the postnuclear
                                    world, currency is not commonly
                                    used. Barter will allow you to get more
                                    for less when trading equipment,
                                    weapons, and other items. A high Barter
                                    skill will lower the prices you pay for
                                    items you purchase, and increase the
                                    money you get for selling excess
                                    equipment. A good Barter skill isn't
                                    important if you're killing everyone,
                                    but it certainly is a valuable skill for
                                    the non-berserkers out there. Initial
                                    Level: Starting Barter skill is equal to
                                    0% + (4 X CH). Average characters will
                                    have a 20% skill.</p>
                            </div>
                            <div class="desc hide">
                                <div class="titleCont">
                                    <span class="sep left"></span>
                                    <span class="title">Outdoorsman</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>This is the skill of outdoor living and
                                    survival in hostile environments.
                                    Basically, what they teach in Boy Scouts
                                    and Girl Scouts, modified for the postnuclear
                                    world. Outdoorsman has many
                                    uses, from finding food and water in the
                                    middle of a vast wasteland to avoiding
                                    hostile creatures to knowledge about
                                    what plants and animals will help you or
                                    kill you. It's always good to have
                                    someone in the party who's an avid
                                    outdoorsman. Initial Level: 0% + (2 X
                                    (EN + IN)). Average Characters will
                                    start with a 20% Outdoorsman skill. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="centerCont">
                    <div class="sep left"></div>
                    <div class="subMenu">
                        <a class="step1 active" href="#">Skills</a>
                        {{--<a class="submit disabled" href="#">Done</a>--}}
                    </div>
                    <div class="sep right"></div>
                </div>
            </div>
        </div>
    </div>
@endsection