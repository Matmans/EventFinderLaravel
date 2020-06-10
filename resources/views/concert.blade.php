@extends('layout.layout')

@section('content')
<div class="container-fluid">
        <div class="row text-white justify-content-center vollelengte ml-1">
            <!-- Linkse kolom voor artiest -->
            <div class="col-sm mt-3 pb-5 d-flex flex-column text-center">
                <div class="h3 text-center mt-3 display-2">
                    Artist
                </div>
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
                    <div class="h3 text-center mt-3 display-2">
                        Concerts
                    </div>
                    @foreach($concert as $c)
                        <div class="card flex-row flex-wrap mb-3" style="width:100%;">
                            <div class="card-header border-0 text-center">
                                <img class="card-img-top rounded" 
                                    src="https://dummyimage.com/100x100/FFA500/000000.png&text={{date('M', strtotime($c->date))}}+{{date('d', strtotime($c->date))}}" alt="Card image cap">
                            </div>
                                <div class="card-block px-2 pt-3">
                                    <h4 class="card-title">
                                        {{$c->location}}, {{$c->country['name']}} 
                                        <img src="../img/country/{{$c->country['name']}}.png" 
                                            onerror="this.onerror=null; this.src='../img/country/Alt.png'" width="32px">
                                    </h4>
                                    <p>
                                        Date: {{date('d F Y', strtotime($c->date))}} <br/>
                                        Time: {{date('G:i', strtotime($c->date))}}
                                    </p>
                                </div>
                                <div class="w-100"></div>
                                <div class="card-footer w-100 text-muted">
                                    @guest
                                                
                                    @else
                                        @if($c->ticket_status_id == 1 && (count($concert_wishlist->where("concert_id", $c['id'])) == 0))
                                            <a href="/concertwishlistadd/{{Auth::user()->id}}&{{$c['id']}}">
                                                <button class="btn btn-warning mb-3 mt-2">
                                                    Add to Wishlist
                                                </button>
                                            </a>
                                            <button class="btn btn-warning disabled mb-3 mt-2">
                                                NOT YET AVAILABLE
                                            </button>
                                        @elseif($c->ticket_status_id == 1 && (count($concert_wishlist->where("concert_id", $c['id'])) !== 0))
                                            <a href="/concertwishlistdelete/{{Auth::user()->id}}&{{$c['id']}}">
                                                <button class="btn btn-warning mb-3 mt-2">
                                                    Remove from Wishlist
                                                </button>
                                            </a>
                                            <button class="btn btn-warning disabled mb-3 mt-2">
                                                NOT YET AVAILABLE
                                            </button>
                                        @elseif($c->ticket_status_id == 2 && (count($concert_wishlist->where("concert_id", $c['id'])) == 0))
                                            <a href="/concertwishlistadd/{{Auth::user()->id}}&{{$c['id']}}">
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
                                            <a href="/concertwishlistdelete/{{Auth::user()->id}}&{{$c['id']}}">
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
                                            <a href="/concertwishlistadd/{{Auth::user()->id}}&{{$c['id']}}">
                                                <button class="btn btn-warning mb-3 mt-2 disabled">
                                                    Add to Wishlist
                                                </button>
                                            </a>
                                            <button class="btn btn-warning disabled mb-3 mt-2">
                                                SOLD OUT
                                            </button>
                                        @elseif($c->ticket_status_id == 3 && (count($concert_wishlist->where("concert_id", $c['id'])) !== 0))
                                            <a href="/concertwishlistdelete/{{Auth::user()->id}}&{{$c['id']}}">
                                                <button class="btn btn-warning mb-3 mt-2">
                                                    Remove from Wishlist
                                                </button>
                                            </a>
                                            <button class="btn btn-warning disabled mb-3 mt-2">
                                                SOLD OUT
                                            </button>
                                        @elseif($c->ticket_status_id == 4)
                                            <button class="btn btn-warning disabled mb-3 mt-2">
                                                CANCELLED
                                            </button>  
                                        @elseif($c->ticket_status_id == 0 && (count($concert_wishlist->where("concert_id", $c['id'])) == 0))
                                            <a href="/concertwishlistadd/{{Auth::user()->id}}&{{$c['id']}}">
                                                <button class="btn btn-warning mb-3 mt-2">
                                                    Add to Wishlist
                                                </button>
                                            </a>
                                            <button class="btn btn-warning disabled mb-3 mt-2">
                                                NO INFO YET
                                            </button>
                                        @elseif($c->ticket_status_id == 0 && (count($concert_wishlist->where("concert_id", $c['id'])) !==    0))
                                            <a href="/concertwishlistdelete/{{Auth::user()->id}}&{{$c['id']}}">
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
                </table>
            </div>
        </div>
    </div>
@endsection