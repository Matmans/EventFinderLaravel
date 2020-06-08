@extends('layout.layout')

@section('content')
    <div class="text-center">
        <h1 class="display-4" id="titel">SEARCH FOR UPCOMING EVENTS!</h1>

        <form action="/searchconcert" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group active-cyan-3 active-cyan-4">
                <input type="text" class="form-control" name="zoek" placeholder="Search here for an artist"> <br/>

                <select name="zoekcountry" id="zoekcountry">
                    <option value="0">Filter by country</option>
                    @foreach($country as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-warning mr-5 btn-lg pl-5 pr-5">
                    Search
                    </button>
                </span>
            </div>
        </form>
    </div>
@endsection