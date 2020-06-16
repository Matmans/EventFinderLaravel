@extends('layout.layout')
@section('content')
<div class="container text-white">
    <div class="row">
        <h1>Looks like we've found multiple results</h1>
        <h2>Select an artist and/or country and try again!</h2>
    </div>
    <form action="/searchconcert" method="POST" role="search">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-5 ">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <div class="form-check ">
                            <ul class="list-group list-group-flush">
                                <label class="form-check-label d-flex flex-column">
                                    @foreach($searchResults as $result)
                                    <li class="list-group-item"><input type="radio"
                                            class="form-check-input d-flex flex-column" name="zoek"
                                            value="{{ $result->name}}">
                                        {{ $result->name}}</li>
                                    @endforeach
                                </label>

                            </ul>
                        </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Country</label>
                    </div>
                    <select class="custom-select" name="zoekcountry">
                        <option selected value="0">Choose...</option>
                        @foreach($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <button type="submit" class="btn btn-warning btn-block">SEARCH</button>
        </div>
    </form>
</div>
@endsection