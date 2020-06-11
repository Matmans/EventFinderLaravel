@extends('layout.layout')

@section('content')
<div class="text-center">
        <h1 class="display-4" id="titel">ERROR 404! <br/> {{$reason}}</h1>

        <form action="/" method="GET" role="search">
            <div class="input-group active-cyan-3 active-cyan-4 justify-content-center">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-warning mr-5 btn-lg pl-5 pr-5">
                        Search again
                    </button>
                </span>
            </div>
        </form>
    </div>
@endsection