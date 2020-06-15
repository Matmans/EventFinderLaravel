@extends('layout.layout')

@section('content')
    <!-- De start pagina -->
    <div class="text-center content-align-center">
        <h1 class="display-4" id="titel">
            SEARCH FOR UPCOMING EVENTS!
        </h1>

        <form action="/searchconcert" method="POST" role="search">
            {{ csrf_field() }}
            <div class="form-group">
                <!-- Dit geeft de artiest naam mee -->
                <div class="input-group active-cyan-3 active-cyan-4 pr-5 pl-5">
                <input type="text" class="form-control" name="zoek" placeholder="Search here for an artist"> <br/>
            </div>
            <div class="form-group row justify-content-center">
                <!-- Hiermee kunnen ze filteren op basis van land -->
                <!-- Als alleen een land is aangeduid, tonen we de pagina van dat land -->
                <select class="form-control" name="zoekcountry" id="zoekcountry" style="width:30%;">
                    <option value="0">Filter by country</option>
                    @foreach($country as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-warning mr-5 btn-lg pl-5 pr-5">
                    Search
                    </button>
                </span>
            </div>
        </form>
    </div>
@endsection