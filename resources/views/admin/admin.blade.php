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
        </tr>
        @foreach($characters as $character)
        @foreach($character->weapons as $weapon)
        <tr>
            <td>
                {{$character->first_name + " " + $character->first_name}}
            </td>
            <td>
                {{$character->id}}
            </td>
            <td>
                {{$character->perception + ($character->perception - 1)}}
            </td>
            <td>
                {{$weapon->range}}
            </td>
            <td>
                {{$weapon->range + ($character->perception + ($character->perception - 1))}}
            </td>
            <td>
                {{$weapon->damage}}
            </td>
            <td>
                {{$weapon->condition}}
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
            </tr>
        @endforeach
        @endforeach
    </table>

    @endif

    @if(isset($to_hit))
        <h1 name="to_hit">{{$to_hit}}</h1>
    @endif
            <form method="post" name="to_hit_cal" action="/to_hit">
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

@endsection
