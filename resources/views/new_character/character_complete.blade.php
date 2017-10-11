@extends('layouts.new_char_layout')
@section('content')
    {{dd(['character' =>$character,'stats'=>$stats,'skills'=>$skills])}}


@endsection