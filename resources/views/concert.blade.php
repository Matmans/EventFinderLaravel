@extends('layout.layout');

@section('content');
    <div class="text-center">
        <!-- Artiest info -->
        @foreach($artist as $artiest)
            {{$artiest->name}}
            {{$artiest->formation}}
            {{$artiest->genre['name']}}
            {{$artiest->country['name']}}
            <!-- Links -->
            {{$artiest->facebooklink}}
            {{$artiest->twitterlink}}
            {{$artiest->youtubelink}}
            <!-- Link naar artiest pagina -->
            <a href='/artist/{{$artiest->id}}'>Meer info over artiest</a>
        @endforeach
        <br/>
        <!-- Concerten -->
        @foreach($concert as $c)
            {{$c->location}}
            {{$c->date}}
            {{$c->country['name']}}

            @if($c->meetandgreet = 1)
                <p>Er is een meet and greet</p>
            @endif
        
            @if($c->merchandise = 1)
            <p>MERCH!</p>
            @endif
        @endforeach

        <!-- Ticket info voor bij de concerten -->
        @foreach($ticket as $t)
            @if($t->status_id = 1)
                <button class="btn btn-secondary btn p-2 disabled"disabled>
                    NOG NIET BESCHIKBAAR
                </button>
            @elseif($t->status_id = 2)
                <button class="btn btn-success btn-sm " href="{{$t->link}}">
                    GET YOUR <br> TICKETS HERE
                </button>
            @elseif($t->status_id = 3)
                <button class="btn btn-secondary btn p-2 disabled"disabled>
                    UITVERKOCHT
                </button>
            @elseif($t->status_id = 4)
                <button class="btn btn-secondary btn p-2 disabled"disabled>
                    CONCERT GEANNULEERD
                </button>
            @endif
        @endforeach
    </div>
@endsection;