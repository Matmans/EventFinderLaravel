@extends('layout.layout')

@section('content')
<div class="container-fluid">
        <div class="row text-white justify-content-center vollelengte ml-1">
            <!-- Linkse kolom voor artiest -->
            <div class="col-sm mt-3 pb-5 d-flex flex-column justify-content-center">
                <div class="row>">
                    <div class="h3 text-center mt-3 display-2">
                        {{$genre->name}}
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm pb-5 d-flex flex-column">
                        <div class="h3 text-center mt-3 display-2">
                            Artists
                        </div>
                        @if(count($artist) == 0)
                            <h3 class="errortitle text-center">This genre has no registered artists yet.</h3>
                        @else
                            @foreach($artist as $a)
                                <div class="card flex-row flex-wrap mb-3" style="width:100%;">
                                    <div class="card-header border-0 text-center">
                                        <a href="/artist/{{$a->id}}">
                                            <img src="{{$a->piclink}}" alt="" 
                                                style="max-height:100px;max-width:100px;width: expression(this.width > 500 ? 500: true);">
                                        </a>
                                    </div>
                                    <div class="card-block px-2 pt-3">                               
                                        <a href="/artist/{{$a->id}}">
                                            <h4 class="card-title">{{$a->name}}</h4>
                                        </a>
                                        <a href="{{$a->facebooklink}}" target="_blank"><img src="../img/facebook.png" class="medialogo"></a>
                                        <a href="{{$a->twitterlink}}" target="_blank"><img src="../img/twitter.png" class="medialogo ml-3"></a>
                                        <a href="{{$a->youtubelink}}" target="_blank"><img src="../img/youtube.png" class="medialogo ml-3"></a>
                                        <a href="{{$a->spotifylink}}" target="_blank"><img src="../img/spotify.png" class="medialogo ml-3"></a>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="card-footer w-100 text-muted">
                                        @guest 
                                        @else
                                            @if(count($favartist->where("artist_id", $a['id'])) == 1)
                                                <a href="/favartistdelete/{{$a['id']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        Remove from favorites
                                                    </button>
                                                </a>
                                            @endif
                                            @if(count($favartist->where("artist_id", $a['id'])) == 0)
                                                <a href="/favartistadd/{{$a['id']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        Add to favorites
                                                    </button>
                                                </a>
                                            @endif
                                        @endguest
                                        <a href="/artist/{{$a->id}}">
                                            <button class="btn btn-warning mb-3 mt-2">
                                                View profile
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="col-sm pb-5 d-flex flex-column">
                        <div class="h3 text-center mt-3 display-2">
                            Songs
                        </div>
                        @if(count($song) == 0)
                            <h3 class="errortitle text-center">This genre has no registered songs yet.</h3>
                        @else 
                            @foreach($song as $s)
                                <div class="card flex-row flex-wrap mb-3" style="width:100%">
                                    <div class="card-header border-0 text-center">
                                        <a href="/artist/{{$s->artist['id']}}">
                                            <img src="{{$s->artist['piclink']}}"
                                                style="max-height:100px;max-width:100px;width: expression(this.width > 500 ? 500: true);">
                                            
                                        </a>
                                    </div>
                                    <div class="card-block px-2 pt-3">
                                        <a href="/song/{{$s->id}}">
                                            <h4 class="card-title">                        
                                            "{{$s->name}}" by <br/>
                                            {{$s->artist['name']}}</h4>
                                        </a>
                                        <p>
                                        </p>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="card-footer w-100 text-muted">
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>          
                </div>
            </div>
        </div>
    </div>
@endsection