@extends('layout.layout')

@section('content')
    <div class="container-fluid">
        <div class="row text-white justify-content-center vollelengte ml-1">
            <div class="col-sm mt-3 pb-3 d-flex flex-column justify-content-start">
                <img src="{{$song->artist->piclink}}" style="max-height:150px;max-width:150px;width: expression(this.width > 500 ? 500: true);">
            </div>
            <div class="col-lg mt-3 d-flex flex-column justify-content-center">
                <div class="h3 text-center mt-3 display-2">
                    {{$song->name}}
                </div>
                <div class="h5 text-center display-2 pb-4">
                    <a href="/artist/{{$song->artist['id']}}">{{$song->artist['name']}}</a>
                </div>
            </div>
            <div class="col-sm mt-3 pb-3 d-flex flex-column text-right">
                
            </div>
        </div>
        <div class="row text-white align-self-center">
            <div class="col-sm-5 pt-3 pb-3 mt-3 ml-3 d-flex flex-column">
                <iframe id="ytplayer" type="text/html" width="auto" height="40%" 
                style="min-height: 250px" class="video" fs="0"
                    src="https://www.youtube.com/embed/{{$song->youtubelink}}"
                    frameborder="0">
                </iframe>
            </div>
            <div class="col-sm-6 pt-3 pb-3 mt-3 ml-3 d-flex flex-column">
                <pre>{{ $song->lyrics }}</pre>
            </div>
        </div>
    </div>
@endsection