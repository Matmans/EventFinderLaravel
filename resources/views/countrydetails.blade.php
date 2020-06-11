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
                            Artists
                        </div>
                        @if(count($artist) == 0)
                            <h3 class="errortitle text-center">This country has no registered artists yet. Sad!</h3>
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
                                        <a href="{{$a->facebooklink}}"><img src="../img/facebook.png" class="medialogo"></a>
                                        <a href="{{$a->twitterlink}}"><img src="../img/twitter.png" class="medialogo ml-3"></a>
                                        <a href="{{$a->youtubelink}}"><img src="../img/youtube.png" class="medialogo ml-3"></a>
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
                            Concerts
                        </div>
                        @if(count($concert) == 0)
                            <h3 class="errortitle text-center">This country has no registered concerts yet.</h3>
                        @else 
                            @foreach($concert as $c)
                                <div class="card flex-row flex-wrap mb-3" style="width:100%">
                                    <div class="card-header border-0 text-center">
                                        <a href="/artist/{{$c->artist['id']}}">
                                            <img src="{{$c->artist['piclink']}}"
                                                style="max-height:100px;max-width:100px;width: expression(this.width > 500 ? 500: true);">
                                        </a>
                                    </div>
                                    <div class="card-block px-2 pt-3">
                                        <a href="/artist/{{$c->artist['id']}}">
                                            <h4 class="card-title">{{$c->artist['name']}}</h4>
                                        </a>
                                        <p>
                                            {{$c->location}}, {{$c->country['name']}} 
                                            <img src="../img/country/{{$country->name}}.png" 
                                                onerror="this.onerror=null; this.src='../img/country/Alt.png'" width="16px">  <br/>
                                            Date: {{date('d F Y', strtotime($c->date))}} <br/>
                                            Time: {{date('G:i', strtotime($c->date))}} <br/>

                                            @if($c->meetandgreet == 1)
                                                Meet and greet: &check; <br/>
                                            @else
                                                Meet and greet: &#10060; <br/>
                                            @endif

                                            @if($c->merchandise == 1)
                                                Merch: &check;
                                            @else
                                                Merch: &#10060;
                                            @endif
                                        </p>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="card-footer w-100 text-muted">
                                        @guest              
                                        @else
                                            @if($c->ticket_status_id == 1 && (count($concert_wishlist->where("concert_id", $c['id'])) == 0))
                                                <a href="/concertwishlistadd/{{$c['id']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        Add to Wishlist
                                                    </button>
                                                </a>
                                                <button class="btn btn-warning disabled mb-3 mt-2">
                                                    NOT YET AVAILABLE
                                                </button>
                                            @elseif($c->ticket_status_id == 1 && (count($concert_wishlist->where("concert_id", $c['id'])) !== 0))
                                                <a href="/concertwishlistdelete/{{$c['id']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        Remove from Wishlist
                                                    </button>
                                                </a>
                                                <button class="btn btn-warning disabled mb-3 mt-2">
                                                    NOT YET AVAILABLE
                                                </button>
                                            @elseif($c->ticket_status_id == 2 && (count($concert_wishlist->where("concert_id", $c['id'])) == 0))
                                                <a href="/concertwishlistadd/{{$c['id']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        Add to Wishlist
                                                    </button>
                                                </a>
                                                <a href="https://{{$c['ticketlink']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        BUY YOUR TICKETS NOW
                                                    </button>
                                                </a>
                                            @elseif($c->ticket_status_id == 2 && (count($concert_wishlist->where("concert_id", $c['id'])) !== 0))
                                                <a href="/concertwishlistdelete/{{$c['id']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        Remove from Wishlist
                                                    </button>
                                                </a>
                                                <a href="https://{{$c['ticketlink']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        BUY YOUR TICKETS NOW
                                                    </button>
                                                </a>   
                                            @elseif($c->ticket_status_id == 3 && (count($concert_wishlist->where("concert_id", $c['id'])) == 0))
                                                <a href="/concertwishlistadd/{{$c['id']}}">
                                                    <button class="btn btn-warning mb-3 mt-2 disabled">
                                                        Add to Wishlist
                                                    </button>
                                                </a>
                                                <button class="btn btn-warning disabled mb-3 mt-2">
                                                    SOLD OUT
                                                </button>
                                            @elseif($c->ticket_status_id == 3 && (count($concert_wishlist->where("concert_id", $c['id'])) !== 0))
                                                <a href="/concertwishlistdelete/{{$c['id']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        Remove from Wishlist
                                                    </button>
                                                </a>
                                                <button class="btn btn-warning disabled mb-3 mt-2">
                                                    SOLD OUT
                                                </button>
                                            @elseif($c->ticket_status_id == 4 && (count($concert_wishlist->where("concert_id", $c['id'])) == 0))
                                                <button class="btn btn-warning disabled mb-3 mt-2">
                                                    CANCELLED
                                                </button> 
                                            @elseif($c->ticket_status_id == 4 && (count($concert_wishlist->where("concert_id", $c['id'])) !== 0))
                                                <a href="/concertwishlistdelete/{{$c['id']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        Remove from Wishlist
                                                    </button>
                                                </a>
                                                <button class="btn btn-warning disabled mb-3 mt-2">
                                                    CANCELLED
                                                </button>
                                            @elseif($c->ticket_status_id == 0 && (count($concert_wishlist->where("concert_id", $c['id'])) == 0))
                                                <a href="/concertwishlistadd/{{$c['id']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        Add to Wishlist
                                                    </button>
                                                </a>
                                                <button class="btn btn-warning disabled mb-3 mt-2">
                                                    NO INFO YET
                                                </button>
                                            @elseif($c->ticket_status_id == 0 && (count($concert_wishlist->where("concert_id", $c['id'])) !==    0))
                                                <a href="/concertwishlistdelete/{{$c['id']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        Remove from Wishlist
                                                    </button>
                                                </a>
                                                <button class="btn btn-warning disabled mb-3 mt-2">
                                                    NO INFO YET
                                                </button> 
                                            @endif 
                                        @endguest
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