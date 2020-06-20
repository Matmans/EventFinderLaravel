@extends('layout.layout')

@section('content')
    <!-- Dit is de error pagina -->
    <div class="text-center">
    <!-- We tonen een melding op basis van wat er mis is gegaan -->
    <h1 class="display-4" id="titel">ERROR 404! <br/> {{$reason}}</h1>
        <form action="/" method="GET" role="search">
            <div class="input-group active-cyan-3 active-cyan-4 justify-content-center">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-warning btn-lg">
                        Search again
                    </button>
                </span>
            </div>
        </form>
    </div>
@endsection