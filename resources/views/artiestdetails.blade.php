@extends('layout.layout')

@section('content')
<div class="container-fluid">
        <div class="row text-white justify-content-center vollelengte ml-1">
            <!-- Linkse kolom voor artiest -->
            <div class="col-sm mt-3 pb-5 d-flex flex-column text-center">
                <div class="row>">
                    <div class="h3 text-center mt-3 display-2">
                        {{$artist->name}}
                    </div>
                </div>
                <div class="row justify-content-center">
                    <img src="{{$artist->piclink}}" style="max-height:300px;max-width:300px;width: expression(this.width > 500 ? 500: true);">
                </div>
                <div class="row justify-content-center mt-3">
                    <table>
                        <tr>
                            <td>Formation</td>
                            <td>{{$artist->formation}}</td>
                        </tr>
                        <tr>
                            <td>Origin
                            <td>
                                <img src="../img/country/{{$artist->country['name']}}.png" 
                                    onerror="this.onerror=null; this.src='../img/country/Alt.png'" 
                                    width="32px">
                                    <a href="/country/{{$artist->country->id}}">
                                    {{$artist->country->name}}
                                    </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Genre
                            <td>{{$artist->genre->name}}
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-sm mt-3 pb-5 d-flex flex-column">
                    <div class="h3 text-center mt-3 display-2">
                        Songs
                    </div>
                <table>
                    @foreach($song as $s)
                        <tr>
                            <td><a href="/song/{{$s->id}}">{{$s->name}}</a>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection