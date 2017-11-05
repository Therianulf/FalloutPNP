@extends('layouts.app')

@section('content')

    <a href="{{url('admin?group_id=1')}}">hard coded reload admin page</a>

    <h3>char weapons and stats</h3>
    @if(isset($characters))
        <table name="character_table" class="table table-bordered">
            <tr>
                <th>
                     Name
                </th>
                <th>
                    Player id
                </th>
                <th>
                    Weapon id
                </th>
                <th>
                    Weapon Name
                </th>
                <th>
                    hit points
                </th>
                <th>
                   total hit points
                </th>
                <th>
                     small guns
                </th>
                <th>
                     big guns
                </th>
                <th>
                     energy weapons
                </th>
                <th>
                    player range
                </th>
                <th>
                    gun range
                </th>
                <th>
                    total range
                </th>
                <th>
                    gun damage
                </th>
                <th>
                    gun condition
                </th>
                <th>
                    gun functional
                </th>
                <th>
                    damage type
                </th>
                <th>
                    ammo type
                </th>
                <th>
                    ammo count
                </th>
            </tr>
            @foreach($characters as $character)
                @foreach($character->weapons as $weapon)
                    <tr>
                        <td>
                            {{$character->first_name . " " . $character->last_name}}
                        </td>
                        <td>
                            {{$character->id}}
                        </td>
                        <td>
                            {{$weapon->id}}
                        </td>
                        <td>
                            {{$weapon->weapon_name}}
                        </td>
                        <td>
                            {{$character->stats->hit_points}}
                        </td>
                        <td>
                            {{$character->stats->total_hit_points}}
                        </td>
                        <td>
                            {{$character->skills->small_guns}}
                        </td>
                        <td>
                            {{$character->skills->big_guns}}
                        </td>
                        <td>
                            {{$character->skills->energy_weapons}}
                        </td>
                        <td>
                            {{$character->stats->perception + ($character->stats->perception - 1) }}
                        </td>
                        <td>
                            {{$weapon->range}}
                        </td>
                        <td>
                            {{$weapon->range + ($character->stats->perception + ($character->stats->perception - 1))}}
                        </td>
                        <td>
                            {{$weapon->damage}}
                        </td>
                        <td>
                            {{$weapon->weapon_condition}}
                        </td>
                        <td>
                            {{$weapon->functional}}
                        </td>
                        <td>
                            {{$weapon->damage_type}}
                        </td>
                        <td>
                            {{$weapon->ammo_type}}
                        </td>
                        <td>
                            {{$weapon->ammo_loaded}}
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </table>
        <h3>char ammo</h3>
            <table name="character_table" class="table table-bordered">
                <tr>
                    <th>
                        Player Name
                    </th>
                    <th>
                        Player id
                    </th>
                    <th>
                        ammo id
                    </th>
                    <th>
                        ammo damage mod
                    </th>
                    <th>
                        ammo DT penetration
                    </th>
                    <th>
                        ammo DR penetration
                    </th>
                    <th>
                        ammo class
                    </th>
                    <th>
                        ammo type
                    </th>
                    <th>
                        ammo count
                    </th>
                    <th>
                        jam percentage
                    </th>
                </tr>
                @foreach($characters as $character)
                    @foreach($character->ammo as $ammo)
                        <tr>
                            <td>
                                {{$character->first_name . " " . $character->last_name}}
                            </td>
                            <td>
                                {{$character->id}}
                            </td>
                            <td>
                                {{$ammo->id}}
                            </td>
                            <td>
                                {{$ammo->damage_mod}}
                            </td>
                            <td>
                                {{$ammo->damage_threshold_penetration}}
                            </td>
                            <td>
                                {{$ammo->damage_resistance_penetration}}
                            </td>
                            <td>
                                {{$ammo->ammo_class}}
                            </td>
                            <td>
                                {{$ammo->ammo_type}}
                            </td>
                            <td>
                                {{$ammo->ammo_count}}
                            </td>
                            <td>
                                {{100 - ($ammo->jam_percentage * 100)}} +
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </table>
        <h3>char armor</h3>
        <table name="character_table" class="table table-bordered">
            <tr>
                <th>
                    Player Name
                </th>
                <th>
                    Player id
                </th>
                <th>
                    armor id
                </th>
                <th>
                    armor name
                </th>
                <th>
                    armor condition
                </th>
                <th>
                    armor class
                </th>
                <th>
                    damage threshold
                </th>
                <th>
                    damage resist
                </th>
                <th>
                    gas resist
                </th>
                <th>
                    laser resist
                </th>
                <th>
                    fire resist
                </th>
                <th>
                    plasma resist
                </th>
                <th>
                    explosive resist
                </th>
                <th>
                    body armor
                </th>
                <th>
                    head armor
                </th>

            </tr>
            @foreach($characters as $character)
                @foreach($character->armor as $armor)
                    <tr>
                        <td>
                            {{$character->first_name . " " . $character->last_name}}
                        </td>
                        <td>
                            {{$character->id}}
                        </td>
                        <td>
                            {{$armor->id}}
                        </td>
                        <td>
                            {{$armor->armor_name}}
                        </td>
                        <td>
                            {{$armor->armor_condition}}
                        </td>
                        <td>
                            {{$armor->armor_class}}
                        </td>
                        <td>
                            {{$armor->damage_threshold}}
                        </td>
                        <td>
                            {{$armor->damage_resistance}}
                        </td>
                        <td>
                            {{$armor->gas_resistance}}
                        </td>
                        <td>
                            {{$armor->laser_resistance}}
                        </td>
                        <td>
                            {{$armor->fire_resistance}}
                        </td>
                        <td>
                            {{$armor->plasma_resistance}}
                        </td>
                        <td>
                            {{$armor->explosive_resistance}}
                        </td>
                        <td>
                            {{$armor->is_body}}
                        </td>
                        <td>
                            {{$armor->is_helmet}}
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </table>
    @endif
    <h3>to hit</h3>
    @if(isset($to_hit))
        <h1 name="to_hit">{{$to_hit}}</h1>
    @endif

    <form method="post" name="to_hit_cal" action="{{url('to_hit')}}">
        {{csrf_field()}}
        <input type="hidden" name="group_id" value="{{$group_id}}"/>
        <label for="base_skill">Base Skill</label>
        <input name="base_skill" type="number"/>
        <br/>
        <label for="bonus">Added Bonus</label>
        <input name="bonus" type="number"/>
        <br/>
        <label for="gun_range">Gun Range</label>
        <input name="gun_range" type="number"/>
        <br/>
        <label for="current_range">Range to target</label>
        <input name="current_range" type="number"/>
        <br/>
        <label for="ac">AC</label>
        <input name="ac" type="number"/>
        <br/>
        <label for="light">Light</label>
        <select name="light">
            <option value="0">bright</option>
            <option value="5">light clouds</option>
            <option value="10">medium clouds</option>
            <option value="15">heavy clouds</option>
            <option value="20">smokey bar</option>
            <option value="25">light rain or dust</option>
            <option value="30">medium rain or dust</option>
            <option value="40">night club</option>
            <option value="50">heavy rain or dust</option>
            <option value="60">cave with torch</option>
            <option value="100">blizzard</option>
            <option value="150">total darkness</option>
        </select>
        <br/>
        <label for="cover">Cover</label>
        <input name="cover" type="number"/>
        <br/>
        <label for="weapon_status">weapon status</label>
        <input name="weapon_status" type="number"/>
        <br/>
        <label for="target">targeted area</label>
        <select name="target">
            <option value="0">torso</option>
            <option value="20">legs</option>
            <option value="30">arms</option>
            <option value="40">head</option>
            <option value="60">eyes</option>
        </select>
        <br/>
        <button type="submit">submit</button>
    </form>

    <h3>remove ammo</h3>
    <form method="post" action="{{url('remove_ammo')}}">
        {{csrf_field()}}
        <input type="hidden" name="group_id" value="{{$group_id}}"/>
        <label for="weapon_id">weapon id</label>
        <input type="number" name="weapon_id" value="0">
        <br/>
        <label for="ammo_count">amount to remove</label>
        <input type="number" name="ammo_count" value="0">
        <br/>
        <label for="ammo_class">type to remove</label>
        <select name="ammo_class">
            <option value="fmj">Full Metal Jacket</option>
            <option value="hp">Hollow Point</option>
            <option value="ap">Armor Penetrating</option>
            <option value="explosive">Explosive</option>
            <option value="incendiary">Incendiary</option>
        </select>
        <br/>
        <button type="submit">take ammo</button>
    </form>
    <h3>reload ammo</h3>
    <form method="post" action="{{url('reload_ammo')}}">
        {{csrf_field()}}
        <input type="hidden" name="group_id" value="{{$group_id}}"/>
        <label for="weapon_id">weapon id</label>
        <input type="number" name="weapon_id" value="0">
        <br/>
        <button type="submit">Reload Ammo</button>
    </form>

    <h3>damage</h3>
    @if(isset($damage))
        <h1 name="damage">{{$damage}}</h1>
    @endif
    <form method="post" action="{{url('calculate_damage')}}">
        {{csrf_field()}}
        <input type="hidden" name="group_id" value="{{$group_id}}"/>

        <label for="base_damage">Base Damage</label>
        <input type="number" name="base_damage" value="0">
        <br/>
        <label for="damage_threshold">Damage Threshold</label>
        <input type="number" name="damage_threshold" value="0">
        <br/>
        <label for="damage_resistance">Damage Resistance</label>
        <input type="number" name="damage_resistance" value="0">
        <br/>
        <label for="weapon_modifier">Weapon Modifier</label>
        <input type="number" name="weapon_modifier" value="0">
        <br/>
        <label>Ammo Modifier</label>
        <input type="number" name="ammo_modifier" value="0">
        <br/>
        <label for="ammo_dt_pen">ammo DT penetration</label>
        <input type="number" name="ammo_dt_pen" value="0">
        <br/>
        <label>ammo DR penetration</label>
        <input type="number" name="ammo_dr_pen" value="0">


        <button type="submit">Calculate Damage</button>
    </form>

    <h3>do damage to character</h3>
    <form method="post" action="{{url('damage_character')}}">
        {{csrf_field()}}
        <input type="hidden" name="group_id" value="{{$group_id}}"/>

        <label for="character_id">character id</label>
        <input type="number" name="character_id" value="0">
        <label for="damage">damage amount</label>
        <input type="number" name="damage" value="0">


        <button type="submit">damage character</button>
    </form>

@endsection
