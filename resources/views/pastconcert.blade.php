@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card customcard">
                <div class="card-header"><a href="/home">My Profile</a></div>

                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="dash">
                        <div class="card">
                            <div class="card-body">
                                Name: <a href="/home">{{ Auth::user()->name }} </a><br /> 
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
                                Concert Wishlist

                                @foreach($concert_wishlist_past as $cw)
                                <div class="card flex-row flex-wrap mb-3 justify-content-center" style="width:100%;">
                                    <div class="card-header border-0 text-center">
                                        <!-- We genereren een dummy image op basis van concert datum -->
                                        <img class="card-img-top rounded" 
                                            src="{{$cw->concert->artist['piclink']}}" 
                                            style="max-height:150px;max-width:150px;width: expression(this.width > 500 ? 500: true);"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card-block px-2 pt-3 pl-5">
                                        <h4 class="card-title">
                                                {{$cw->concert->artist['name']}} @ <br/>
                                                {{$cw->concert->location}}, {{$cw->concert->country['name']}} 
                                                <img src="../img/country/{{$cw->concert->country['name']}}.png" 
                                                    onerror="this.onerror=null; this.src='../img/country/Alt.png'" width="32px">
                                        </h4>
                                        <!-- Concert info -->
                                        <p>
                                            Date: {{date('d F Y', strtotime($cw->concert->date))}} <br/>
                                            Time: {{date('G:i', strtotime($cw->concert->date))}} <br/>
                                        </p>
                                    </div>
                                    <!-- Zorgt dat de footer size 100% is -->
                                    <div class="w-100"></div>
                                    <div class="card-footer w-100 text-muted">
                                        <a href="/concertwishlistdelete/{{$cw['concert_id']}}">
                                            <button class="btn btn-warning mb-3 mt-2">
                                                Remove from Wishlist
                                            </button>
                                        </a>
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
@endsection
