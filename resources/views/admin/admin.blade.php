@extends('layouts.app')

@section('content')
    to hit calculator


    character stats
    @if(isset($characters))
        <table name="character_table" class="table table-bordered">
            <tr>
                <th>
                    Player Name
                </th>
                <th>
                    Player id
                </th>
                <th>
                    Weapon id
                </th>
                <th>
                    player small gun
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
                            {{$character->skills->small_guns}}
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

    @endif

    @if(isset($to_hit))
        <h1 name="to_hit">{{$to_hit}}</h1>
    @endif
    <form method="post" name="to_hit_cal" action="{{url('to_hit')}}">
        {{csrf_field()}}
        <input type="hidden" name="group_id" value="{{$group_id}}"/>
        <label for="base_skill">Base Skill</label>
        <input name="base_skill" type="number"/>
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
        <label for="ammo_count">amount to remove</label>
        <input type="number" name="ammo_count" value="0">
        <label for="ammo_class">type to remove</label>
        <select name="ammo_class">
            <option value="fmj">Full Metal Jacket</option>
            <option value="hp">Hollow Point</option>
            <option value="ap">Armor Penetrating</option>
            <option value="explosive">Explosive</option>
            <option value="incendiary">Incendiary</option>
        </select>
        <button type="submit">take ammo</button>
    </form>


@endsection