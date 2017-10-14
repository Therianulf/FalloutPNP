@extends('layouts.app')

@section('content')
    <script src="js/charWidget.js"></script>
    <div class="characterPage pageCont" data-role="characterPage">
        <div id="overlay"></div>
        <div class="pageContent">
            <div class="header">
                <div class="pgTitle">
                    <span class="sep left"></span>
                    <span class="title">{{$character->first_name}}'s Stats</span>
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
                    <div class="contentCont step1" data-title="{{$character->first_name}}'s Stats">
                        <div class="leftCont cf">
                            <div class="titleCont">
                                <span class="sep left"></span>
                                <span class="title">S.P.E.C.I.A.L.</span>
                                <span class="sep right"></span>
                            </div>
                            <div>
                                <div class="readoutCont active cf">
                                    <label for="strength">Strength:  <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="strength" value="{{$stats['strength']}}" disabled/>
                                    </div>
                                </div>
                                <div class="readoutCont cf">
                                    <label for="perception">Perception:  <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="perception" value="{{$stats['perception']}}" disabled/>
                                    </div>
                                </div>
                                <div class="readoutCont cf">
                                    <label for="endurance">Endurance:  <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="endurance" value="{{$stats['endurance']}}" disabled/>
                                    </div>
                                </div>
                                <div class="readoutCont cf">
                                    <label for="charisma">Charisma:  <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="charisma" value="{{$stats['charisma']}}" disabled/>
                                    </div>
                                </div>
                                <div class="readoutCont cf">
                                    <label for="intelligence">Intelligence:  <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="intelligence" value="{{$stats['intelligence']}}" disabled/>
                                    </div>
                                </div>
                                <div class="readoutCont cf">
                                    <label for="agility">Agility:  <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="agility" value="{{$stats['agility']}}" disabled/>
                                    </div>
                                </div>
                                <div class="readoutCont cf">
                                    <label for="luck">Luck:  <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="luck" value="{{$stats['luck']}}" disabled/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rightCont cf">
                            <div class="titleCont">
                                <span class="sep left"></span>
                                <span class="title">Resistance</span>
                                <span class="sep right"></span>
                            </div>
                            <div>
                                <div class="readoutCont cf">
                                    <label for="damage">Damage:</label>
                                    <div class="inputCont cf">
                                        <input id="damage" value="{{$stats['damage_resistance']}}" disabled/>
                                    </div>
                                </div>
                                <div class="readoutCont cf">
                                    <label for="poison">Poison:</label>
                                    <div class="inputCont cf">
                                        <input id="poison" value="{{$stats['poison_resistance']}}" disabled/>
                                    </div>
                                </div>
                                <div class="readoutCont cf">
                                    <label for="radiation">Radiation:</label>
                                    <div class="inputCont cf">
                                        <input id="radiation" value="{{$stats['radiation_resistance']}}" disabled/>
                                    </div>
                                </div>
                                <div class="readoutCont cf">
                                    <label for="gas">Gas:</label>
                                    <div class="inputCont cf">
                                        <input id="gas" value="{{$stats['gas_resistance']}}" disabled/>
                                    </div>
                                </div>
                                <div class="readoutCont cf">
                                    <label for="electric">Electric:</label>
                                    <div class="inputCont cf">
                                        <input id="electric" value="{{$stats['electric_resistance']}}" disabled/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contentCont step2 hide" data-title="{{$character->first_name}}'s Skills">
                        <div class="leftCont cf">
                            <div class="readoutCont active cf">
                                <label for="barter">Barter:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="barter" value="{{$skills['barter']}}" disabled/>
                                </div>
                            </div>
                            <div class="readoutCont cf">
                                <label for="big_guns">Big Guns:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="big_guns" value="{{$skills['big_guns']}}" disabled/>
                                </div>
                            </div>
                            <div class="readoutCont cf">
                                <label for="doctor">Doctor:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="doctor" value="{{$skills['doctor']}}" disabled/>
                                </div>
                            </div>
                            <div class="readoutCont cf">
                                <label for="energy_weapons">Energy Weapons:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="energy_weapons" value="{{$skills['energy_weapons']}}" disabled/>
                                </div>
                            </div>
                            <div class="readoutCont cf">
                                <label for="first_aid">First Aid:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="first_aid" value="{{$skills['first_aid']}}" disabled/>
                                </div>
                            </div>
                            <div class="readoutCont cf">
                                <label for="lockpick">Lockpick:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="lockpick" value="{{$skills['lockpick']}}" disabled/>
                                </div>
                            </div>
                            <div class="readoutCont cf">
                                <label for="melee_weapons">Melee Weapons:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="melee_weapons" value="{{$skills['melee_weapons']}}" disabled/>
                                </div>
                            </div>
                            <div class="readoutCont cf">
                                <label for="outdoorsman">Outdoorsman:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="outdoorsman" value="{{$skills['outdoorsman']}}" disabled/>
                                </div>
                            </div>
                            <div class="readoutCont cf">
                                <label for="pilot">Pilot:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="pilot" value="{{$skills['pilot']}}" disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="rightCont cf">
                            <div class="readoutCont cf">
                                <label for="repair">Repair:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="repair" value="{{$skills['repair']}}" disabled/>
                                </div>
                            </div>
                            <div class="readoutCont cf">
                                <label for="science">Science:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="science" value="{{$skills['science']}}" disabled/>
                                </div>
                            </div>
                            <div class="readoutCont cf">
                                <label for="small_guns">Small Guns:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="small_guns" value="{{$skills['small_guns']}}" disabled/>
                                </div>
                            </div>
                            <div class="readoutCont cf">
                                <label for="sneak">Sneak:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="sneak" value="{{$skills['sneak']}}" disabled/>
                                </div>
                            </div>
                            <div class="readoutCont cf">
                                <label for="speech">Speech:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="speech" value="{{$skills['speech']}}" disabled/>
                                </div>
                            </div>
                            <div class="readoutCont cf">
                                <label for="steal">Steal:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="steal" value="{{$skills['steal']}}" disabled/>
                                </div>
                            </div>
                            <div class="readoutCont cf">
                                <label for="throwing">Throwing:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="throwing" value="{{$skills['throwing']}}" disabled/>
                                </div>
                            </div>
                            <div class="readoutCont cf">
                                <label for="traps">Traps:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="traps" value="{{$skills['traps']}}" disabled/>
                                </div>
                            </div>
                            <div class="readoutCont cf">
                                <label for="unarmed">Unarmed:  <i class="fa fa-info-circle"></i></label>
                                <div class="inputCont cf">
                                    <input id="unarmed" value="{{$skills['unarmed']}}" disabled/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contentCont step3 hide" data-title="{{$character->first_name}}'s Inventory">
                        <ul>
                            @foreach ($inventory as $item)
                                <div class="readoutCont cf">
                                    <label for="item{{ $item->id }}">{{ $item->item_name }}:  <i class="fa fa-info-circle"></i></label>
                                    <div class="inputCont cf">
                                        <input id="item{{ $item->id }}" value="{{ $item->item_count }}" disabled/>
                                    </div>
                                </div>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="subContent">
                    <div class="statsCont contentCont">
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
                    <div class="skillsCont contentCont hide">
                        <div class="descCont">
                            <div class="desc">
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
                                    <span class="title">big guns</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>This is the skill of flamethrowers, miniguns, rocket launchers, heavy machine guns, and other large support weapons. If it's a large weapon, you can count on Big Guns being the skill rolled against. Like Small Guns, the better your skill, the easier it will be to hit your target, and the longer the range of your shot. Initial level: Starting Big Guns skill is equal to 0% + (2 X AG). Average starting characters have a 10% Big Guns skill.</p>
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
                                    <span class="title">Energy Weapons</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>The use of energy weapons is not a very common skill in the post-nuclear world. Energy weapons were just coming into actual warfare when the world blew up. Lasers and plasma weapons are covered by the Energy Weapons skill. Basically, if it uses an energy cell or power pack, and not cartridge ammunition, it falls under this skill. Initial level: Starting Energy Weapons skill is equal to 0% + (2 X AG). Average starting characters will have a 10% Energy Weapons skill.</p>
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
                            </div>
                            <div class="desc hide">
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
                                    <span class="title">Unarmed</span>
                                    <span class="sep right"></span>
                                </div>
                                <p>This is the skill of beating people up with your fists and feet. The better you are at this skill, the more likely you are going to hit them in combat. This skill also covers the use of weapons that enhance unarmed combat such as brass knuckles, spiked knuckles, and the legendary Power Fist. At higher skill levels, you will learn new techniques of fighting. Everyone starts with a good Unarmed skill, since the basic concept is pretty simple. Initial level: Starting Unarmed skill is equal to 30% + (2 X (AG + STR)). Average starting characters will have a 50% in Unarmed Combat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="inventoryCont contentCont hide">
                        <div class="descCont">
                            <div class="descCont">
                                @foreach ($inventory as $item)
                                    <div class="desc hide">
                                        <div class="titleCont">
                                            <span class="sep left"></span>
                                            <span class="title">{{ $item->item_name }}</span>
                                            <span class="sep right"></span>
                                        </div>
                                        <p>{{ $item->item_description }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="centerCont">
                    <div class="sep left"></div>
                    <div class="subMenu">
                        <a class="step1 active" href="#">Stats</a>
                        <a class="step2" href="#">Skills</a>
                        <a class="step3" href="#">Inventory</a>
                    </div>
                    <div class="sep right"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
