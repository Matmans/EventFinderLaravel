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
                    <!-- Artiest card -->
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/artist/{{$artist['id']}}">    
                                {{$artist['name']}}
                            </a>
                        </h5>
                        <img class="card-img-top rounded" src="{{$artist->piclink}}" alt="Card image cap">
                    </div>
                    <!-- Algemene info -->
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
                    <!-- Buttons voor toe te voegen aan of verwijderen van favorieten -->
                    <div class="card-body">
                        @auth
                            @if($favcheck == 0)
                            <a href="/favartistadd/{{$artist['id']}}" class="card-link">
                                <button class="btn btn-warning mb-3 mt-2">
                                    Add to Favorites
                                </button>
                            </a>
                            @elseif($favcheck == 1)
                            <a href="/favartistdelete/{{$artist['id']}}" class="card-link">
                                <button class="btn btn-warning mb-3 mt-2">
                                    Remove from Favorites
                                </button>
                            </a>
                            @endif
                        @else
                            You can add to favorites if you're a member<br/>
                            <a href="/register" class="card-link">
                                <button class="btn btn-warning mb-3 mt-2">
                                    Register
                                </button>
                            </a>
                        @endauth
                    </div>
                </div>
            </div>

            <!-- Rechtse kolom voor concerten -->
            <div class="col-sm mt-3 pb-5 d-flex flex-column">
                <div class="h3 text-center mt-3 display-2">
                    Concerts
                </div>
                <!-- Error als er geen concerten gevonden zijn -->
                @if(count($concert) == 0)
                    <diV class="text-center">
                        <h3 class="errortitle">No concerts found<h/3>
                    </div>
                @else
                    <!-- We tonen een melding voor tickets als de gebruiker niet ingelogd is -->
                    @guest
                        <a href="/register">
                            <p class="errortitle text-center">You can see tickets (and add to favorites) if you're a member with us</p>    
                        </a>
                    @endguest
                    <!-- We genereren een card voor ieder concert -->
                    @foreach($concert as $c)
                        <div class="card flex-row flex-wrap mb-3" style="width:100%;">
                            <div class="card-header border-0 text-center">
                                <!-- We genereren een dummy image op basis van concert datum -->
                                <img class="card-img-top rounded" 
                                    src="https://dummyimage.com/100x100/FFA500/000000.png&text={{date('M', strtotime($c->date))}}+{{date('d', strtotime($c->date))}}" alt="Card image cap">
                            </div>
                            <div class="card-block px-2 pt-3">
                                <h4 class="card-title">
                                    {{$c->location}}, {{$c->country['name']}} 
                                    <!-- Country icon -->
                                    <img src="../img/country/{{$c->country['name']}}.png" 
                                        onerror="this.onerror=null; this.src='../img/country/Alt.png'" width="32px">
                                </h4>
                                <!-- Concert info -->
                                <p>
                                    Date: {{date('d F Y', strtotime($c->date))}} <br/>
                                    Time: {{date('G:i', strtotime($c->date))}} <br/>
                                    <!-- Check voor meet and greet -->
                                    @if($c->meetandgreet == 1)
                                        Meet and greet: &check; <br/>
                                    @else
                                        Meet and greet: &#10060; <br/>
                                    @endif
                                    
                                    <!-- Check voor merchandise -->
                                    @if($c->merchandise == 1)
                                        Merch: &check;
                                    @else
                                        Merch: &#10060;
                                    @endif
                                    </p>
                                </div>
                                <!-- Zorgt dat de footer size 100% is -->
                                <div class="w-100"></div>
                                <div class="card-footer w-100 text-muted">
                                    <!-- We tonen wishlist en ticket buttons als de gebruiker ingelogd is -->
                                    @auth
                                        <!-- De juiste buttons generen op basis van ticket_status_id en wishlist -->
                                        <!-- Dit gaat NIET in 2 verschillende if's, anders staan men buttons niet correct naast mekaar -->
                                        <!-- Er zit dan een hoogte verschil in van een halve button -->
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
                                    @endauth
                                </div>
                            </div>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>
@endsection