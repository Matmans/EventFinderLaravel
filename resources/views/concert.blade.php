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
                                        {{$artist->country['name']}}
                                    </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Genre
                            <td>{{$artist->genre['name']}}
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-sm mt-3 pb-5 d-flex flex-column">
                    <div class="h3 text-center mt-3 display-2">
                        Concerts
                    </div>
                <table>
                    @foreach($concert as $c)
                        <td style="max-width:200px;" class="text-center">
                        <img class="card-img-top rounded" 
                            src="https://dummyimage.com/100x100/FFA500/000000.png&text={{date('M', strtotime($c->date))}}+{{date('d', strtotime($c->date))}}" alt="Card image cap">
                        </td>
                        <td style="background-color:black;color:orange;">
                            {{$c->location}}, {{$c->country['name']}} 
                            <img src="../img/country/{{$c->country['name']}}.png" 
                                onerror="this.onerror=null; this.src='../img/country/Alt.png'" width="16px">  <br/>
                            Date: {{date('d F Y', strtotime($c->date))}} <br/>
                            Time: {{date('G:i', strtotime($c->date))}}<br/><br/>
                            @if($ticket['status_id'] == 1)
                                <button class="btn btn-warning disabled">
                                    NOT YET AVAILABLE
                                </button>
                            @elseif($ticket['status_id'] == 2)
                                <a href="https://{{$ticket['link']}}">
                                    <button class="btn btn-warning">
                                        BUY YOUR TICKETS NOW
                                    </button>
                                </a>
                            @elseif($ticket['status_id'] == 3)
                                <button class="btn btn-warning disabled">
                                    SOLD OUT
                                </button>
                            @elseif($ticket['status_id'] == 4)
                                <button class="btn btn-warning disabled">
                                    CANCELLED
                                </button>  
                            @else
                                <button class="btn btn-warning disabled">
                                    NO INFO YET
                                </button> 
                            @endif 
                        </td>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection