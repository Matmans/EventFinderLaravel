@extends('layout.layout')

@section('content')
    {{$country['name']}}
    
    @foreach($concert as $con)
    {{$con->location}}
    @endforeach
@endsection