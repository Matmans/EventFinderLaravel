<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class SongController extends Controller
{
    public function show($id) {
        try {
            $song = Song::find($id);

            return view('songdetails', [
            'song' => $song
            ]);
        } catch (\exception $e) {
            return view('/error');
        }
    }
}
