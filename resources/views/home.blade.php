@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card customcard">
                <div class="card-header">My Profile</div>

                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="dash">
                        <div class="card">
                            <div class="card-body">
                                Name: {{ Auth::user()->name }} <br /> 
                                Email: {{ Auth::user()->email }} <br /> 
                                Country: <a href="/country/{{Auth::user()->country['id']}}"> 
                                    {{ Auth::user()->country['name'] }} 
                                </a> 
                                <img src="../img/country/{{ Auth::user()->country['name'] }}.png"
                                    onerror="this.onerror=null; this.src='../img/country/Alt.png'" 
                                    width="32px"></div>
                            </div>                 
                        </div>
                        <div class="row subtitle">
                            <div class="col-sm">
                                Favorite Artists

                                @foreach($favartist as $fa)

                                    <div class="card" style="width: 18rem;">
                                        <img src="{{$fa->artist['piclink']}}" class="card-img-top picimg" alt="...">
                                        <div class="card-body">
                                            <a href="/artist/{{$fa->artist['id']}}">
                                                <h2>{{$fa->artist['name']}} </h2>
                                            </a>
                                            <a href="/favartistdelete/{{$fa['artist_id']}}">
                                                <button class="btn btn-warning mb-3 mt-2">
                                                    Remove from favorites
                                                </button>
                                            </a>
                                        </div>
                                    </div>      
                                @endforeach
                            </div>
                            <div class="col-sm">
                                Concert Wishlist
                                @if(count($concert_wishlist_past) != 0)
                                    <div class="card" >
                                        <div class="card-body" style="color:red;font-size:15px;">
                                            You have {{count($concert_wishlist_past)}} past concert
                                            @if(count($concert_wishlist_past)>1)
                                                s
                                            @endif
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="card-footer text-muted">
                                            <a href="/pastconcerts">
                                                <button class="btn btn-warning">Explore</button>
                                            <a>
                                        </div>
                                    </div>
                                @endif

                                @foreach($concert_wishlist as $cw)
                                    <div class="card flex-row flex-wrap mb-3" style="width:100%;">
                                        <div class="card-body">
                                            <img class="card-img-top rounded" src="{{$cw->concert->artist['piclink']}}"
                                                style="max-height:100px;max-width:100px;width: expression(this.width > 500 ? 500: true);">
                                        </div>
                                        <div class="card-block px-2 pt-3">
                                            <h4 class="card-title">
                                                {{$cw->concert->artist['name']}} @ <br/>
                                                {{$cw->concert->location}}, {{$cw->concert->country['name']}} 
                                                <img src="../img/country/{{$cw->concert->country['name']}}.png" 
                                                    onerror="this.onerror=null; this.src='../img/country/Alt.png'" width="32px">
                                            </h4>
                                            <p>
                                                Date: {{date('d F Y', strtotime($cw->concert->date))}} <br/>
                                                Time: {{date('G:i', strtotime($cw->concert->date))}}
                                            </p>
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="card-footer w-100 text-muted">
                                            @if($cw->concert->ticket_status_id == 1)
                                                <a href="/concertwishlistdelete/{{$cw['concert_id']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        Remove from Wishlist
                                                    </button>
                                                </a>
                                                <button class="btn btn-warning disabled mb-3 mt-2">
                                                    NOT YET AVAILABLE
                                                </button>
                                            @elseif($cw->concert->ticket_status_id == 2)
                                                <a href="/concertwishlistdelete/{{$cw['concert_id']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        Remove from Wishlist
                                                    </button>
                                                </a>
                                                <a href="https://{{$cw->concert['ticketlink']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        BUY YOUR TICKETS NOW
                                                    </button>
                                                </a>   
                                            @elseif($cw->concert->ticket_status_id == 3)
                                                <a href="/concertwishlistdelete/{{$cw->concert['id']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        Remove from Wishlist
                                                    </button>
                                                </a>
                                                <button class="btn btn-warning disabled mb-3 mt-2">
                                                    SOLD OUT
                                                </button>
                                            @elseif($cw->concert->ticket_status_id == 4)
                                                <a href="/concertwishlistdelete/{{$cw->concert['id']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        Remove from Wishlist
                                                    </button>
                                                </a>
                                                <button class="btn btn-warning disabled mb-3 mt-2">
                                                    CANCELLED
                                                </button>  
                                            @elseif($cw->concert->ticket_status_id == 0)
                                                <a href="/concertwishlistdelete/{{$cw->concert['id']}}">
                                                    <button class="btn btn-warning mb-3 mt-2">
                                                        Remove from Wishlist
                                                    </button>
                                                </a>
                                                <button class="btn btn-warning disabled mb-3 mt-2">
                                                    NO INFO YET
                                                </button> 
                                            @endif 
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
