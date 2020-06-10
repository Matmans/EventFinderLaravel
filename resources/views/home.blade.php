@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Profile</div>

                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="dash">
                        
                    {{ Auth::user()->name }} - {{ Auth::user()->email }} - {{ Auth::user()->country['name'] }}  <img src="../img/country/{{ Auth::user()->country['name'] }}.png"
                            onerror="this.onerror=null; this.src='../img/country/Alt.png'" 
                            width="32px">
                    </div>
                    <div class="row subtitle">
                    <div class="col-sm">
                         Favourite Artists
                    </div>
                    <div class="col-sm">
                        Concert Wishlist
                    </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</div>
@endsection
