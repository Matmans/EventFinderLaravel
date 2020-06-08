@extends('layout.layout')

@section('content')
    {{$artist->name}}
    {{$artist->country['name']}}
    <img src="{{$artist->piclink}}" />

    @foreach($song as $s)
        <a href="/song/{{$s->id}}">{{$s['name']}}</a>
    @endforeach
@endsection