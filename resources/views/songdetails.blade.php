@extends('layout.layout')

@section('content')
    <!-- Dit toont de song details -->
    <div class="container-fluid">
        <div class="row text-white justify-content-center vollelengte ml-1">
            <div class="col-sm-2 mt-3 pb-3 d-flex flex-column justify-content-start">
            <!-- Artiest foto met link naar artiest profiel -->
                <a href="/artist/{{$song->artist['id']}}"> 
                    <img src="{{$song->artist->piclink}}" 
                        style="max-height:150px;max-width:150px;width: expression(this.width > 500 ? 500: true);">
                </a>
            </div>
            <div class="col-lg-8 mt-3 d-flex flex-column justify-content-center">
                <!-- Song naam -->
                <div class="h3 text-center mt-3 display-2">
                    {{$song->name}}
                </div>
                <!-- Artiest naam -->
                <div class="h5 text-center display-2 pb-4">
                    <a href="/artist/{{$song->artist['id']}}">{{$song->artist['name']}}</a>
                </div>
            </div>
            <div class="col-sm-2 mt-3 pb-3 d-flex flex-column text-right">
                <!-- Opvul kolom -->
            </div>
        </div>
        <div class="row text-white align-self-center">
            <div class="col-sm-5 pt-3 pb-3 mt-3 ml-3 d-flex flex-column">
                <!-- Dit genereert een iframe youtube video op basis van de video key -->
                <iframe id="ytplayer" type="text/html" width="auto" height="40%" 
                style="min-height: 250px" class="video" fs="0"
                    src="https://www.youtube.com/embed/{{$song->youtubelink}}"
                    frameborder="0">
                </iframe>
            </div>
            <!-- Song lyrics -->
            <div class="col-sm-6 pt-3 pb-3 mt-3 ml-3 d-flex flex-column">
                <!-- PRE zorgt ervoor dat alles juist ge-entered is -->
                <pre>{{ $song->lyrics }}</pre>
            </div>
        </div>
    </div>
@endsection