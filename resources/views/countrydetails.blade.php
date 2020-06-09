@extends('layout.layout')

@section('content')
<div class="container-fluid">
        <div class="row text-white justify-content-center vollelengte ml-1">
            <!-- Linkse kolom voor artiest -->
            <div class="col-sm mt-3 pb-5 d-flex flex-column justify-content-center">
                <div class="row>">
                    <div class="h3 text-center mt-3 display-2">
                    <!-- Onerror = Als de afbeelding niet gevonden kan worden, toont de image de NASA earth flag in de plaats hierdoor -->
                        <img src="../img/country/{{$country->name}}.png" 
                            onerror="this.onerror=null; this.src='../img/country/Alt.png'" 
                            width="32px"> {{$country->name}}
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm pb-5 d-flex flex-column">
                        <div class="h3 text-center mt-3 display-2">
                            Concerts
                        </div>
                        <table>
                            @foreach($concert as $c)
                                <tr>
                                    <td style="max-width:200px;" class="text-center">
                                    <a href="/artist/{{$c->id}}">
                                        <img src="{{$c->artist['piclink']}}"
                                        style="max-height:100px;max-width:100px;width: expression(this.width > 500 ? 500: true);"><br />
                                        {{$c->artist['name']}}
                                    </a>
                                    </td>
                                    <td style="background-color:black;color:orange;">
                                        {{$c->location}}, {{$c->country['name']}} 
                                        <img src="../img/country/{{$country->name}}.png" 
                                            onerror="this.onerror=null; this.src='../img/country/Alt.png'" width="16px">  <br/>
                                        Date: {{date('d-m-Y', strtotime($c->date))}} <br/>
                                        Time: {{date('G:i', strtotime($c->date))}} u
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                    <div class="col-sm pb-5 d-flex flex-column">
                        <div class="h3 text-center mt-3 display-2">
                            Artists
                        </div>
                        <table class="noborders">
                            @foreach($artist as $a)
                                <tr>
                                    <td class="text-center">
                                        <a href="/artist/{{$a->id}}">
                                            <img src="{{$a->piclink}}"
                                            style="max-height:100px;max-width:100px;width: expression(this.width > 500 ? 500: true);"><br />
                                            {{$a->name}}
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{$a->facebooklink}}" target="_blank">
                                            <img src="../img/facebook.png"
                                            style="max-height:30px;max-width:30px;width: expression(this.width > 500 ? 500: true);">
                                        </a>
                                        <a href="{{$a->twitterlink}}" target="_blank">
                                            <img src="../img/twitter.png"
                                            style="max-height:30px;max-width:30px;width: expression(this.width > 500 ? 500: true);">
                                        </a>
                                        <a href="{{$a->youtubelink}}" target="_blank">
                                            <img src="../img/youtube.png"
                                            style="max-height:30px;max-width:30px;width: expression(this.width > 500 ? 500: true);">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection