@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        This is falloutpnp!
                        <br/>
                        <a href="{{url('new_char_name')}}">New Character</a>
                        <br/>
                        Play existing Character
                        <br/>
                        <form href="{{url('selected_character')}}" action="post">
                        <select name="character_id">
                            @foreach($characters as $character)
                            <option value="{{$character->id}}">{{$character->first_name}} {{$character->last_name}}</option>
                            @endforeach
                        </select>
                            <button type="submit">Pick Character</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
