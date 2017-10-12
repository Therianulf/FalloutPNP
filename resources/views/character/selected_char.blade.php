@extends('layouts.app')

@section('content')
    {{dd(['character'=>$character,'stats'=>$stats,'skills'=>$skills])}}
@endsection