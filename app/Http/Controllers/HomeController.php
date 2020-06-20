<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Concert;
use App\Artist;
use App\Fav_artist;
use App\Concert_wishlist;
use auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentuserid = Auth::user()->id;
                        
        $favartist = Fav_artist::where('user_id',$currentuserid)->get();
        $concert_wishlist = Concert_wishlist::where('user_id',$currentuserid)
            ->join('concert', 'concert_id', '=', 'concert.id')
            ->where('date','>', Carbon::now())
            ->orderBy('date')
            ->get();
        $concert_wishlist_past = Concert_wishlist::where('user_id',$currentuserid)
        ->join('concert', 'concert_id', '=', 'concert.id')
        ->where('date','<', Carbon::now())
        ->orderBy('date')
        ->get();

        return view('home', 
        [
            'favartist' => $favartist,
            'concert_wishlist' => $concert_wishlist,
            'concert_wishlist_past' => $concert_wishlist_past
        ]);
    }
}
