@extends('layout.layout')

@section('content')
<div class="container-fluid">
        <div class="row text-white justify-content-center vollelengte ml-1">
            <!-- Linkse kolom voor artiest -->
            <div class="col-sm mt-3 pb-5 d-flex flex-column text-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/artist/{{$artist['id']}}">    
                                {{$artist['name']}}
                            </a>
                        </h5>
                        <img class="card-img-top rounded" src="{{$artist->piclink}}" alt="Card image cap">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Formation: {{$artist['formation']}}
                        </li>
                        <li class="list-group-item">
                            Origin: 
                            <a href="/country/{{$artist->country['id']}}">
                                {{$artist->country['name']}} 
                                <img src="../img/country/{{$artist->country['name']}}.png" 
                                    onerror="this.onerror=null; this.src='../img/country/Alt.png'" 
                                    width="32px">
                            </a>
                        </li>
                        <li class="list-group-item">
                            Genre: {{$artist->genre['name']}}
                        </li>
                        <li class="list-group-item">
                            <a href="{{$artist->facebooklink}}" target="_blank"><img src="../img/facebook.png" class="medialogo"></a>
                            <a href="{{$artist->twitterlink}}" target="_blank"><img src="../img/twitter.png" class="medialogo ml-3"></a>
                            <a href="{{$artist->youtubelink}}" target="_blank"><img src="../img/youtube.png" class="medialogo ml-3"></a>
                        </li>
                    </ul> 
                    <div class="card-body">
                        @auth
                            @if($favcheck == 0)
                            <a href="/favartistadd/{{Auth::user()->id}}&{{$artist['id']}}" class="card-link">
                                <button class="btn btn-warning mb-3 mt-2">
                                    Add to Favorites
                                </button>
                            </a>
                            @elseif($favcheck == 1)
                            <a href="/favartistdelete/{{Auth::user()->id}}&{{$artist['id']}}" class="card-link">
                                <button class="btn btn-warning mb-3 mt-2">
                                    Remove from Favorites
                                </button>
                            </a>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
            <div class="col-sm mt-3 pb-5 d-flex flex-column">
            <div class="card blackcard" style="width:100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            Songs
                        </h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach($song as $s)
                            <li class="list-group-item">
                                <a href="/song/{{$s['id']}}">    
                                    {{$s['name']}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection