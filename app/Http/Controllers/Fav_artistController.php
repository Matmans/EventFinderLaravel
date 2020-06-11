<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Artist;
use App\Fav_artist;

class Fav_artistController extends Controller
{
    public function check($user_id,$artist_id) {
        try {
            if(is_numeric($user_id) && is_numeric($artist_id))
            {
                $favartist = Fav_artist::where('user_id',$user_id)->where('artist_id',$artist_id)->first();
                if (empty($favartist))
                {
                    $fav_artist = new Fav_artist;

                    $fav_artist->artist_id = $artist_id;
                    $fav_artist->user_id = $user_id;
                    $fav_artist->save();

                    return redirect('/artist/'.$artist_id);
                }
                else {
                    $reason = "Artist is already a favorite of yours.";
                    return view('/error', 
                    [
                        'reason' => $reason,
                    ]);
                }
            }
            else
            {
                $reason = "Wrong parameters";
                return view('/error', 
                [
                    'reason' => $reason,
                ]);
            }
        } catch (\exception $e) {
            $reason = "Something went wrong. Try again.";
            return view('/error', 
            [
                'reason' => $reason,
            ]);
        }
    }

    public function delete($user_id,$artist_id) {
        try {
            if(is_numeric($user_id) && is_numeric($artist_id))
            {
                $favartist = Fav_artist::where('user_id',$user_id)->where('artist_id',$artist_id)->first();
                if (empty($favartist))
                {
                    $reason = "Artist isn't on your favorites list.";
                    return view('/error', 
                    [
                        'reason' => $reason,
                    ]);
                }
                else {
                    $favartist->delete();
                    return redirect('/artist/'.$artist_id);
                }
            }
            else
            {
                $reason = "Wrong parameters";
                return view('/error', 
                [
                    'reason' => $reason,
                ]);
            }
        } catch (\exception $e) {
            $reason = "Something went wrong. Please try again.";
            return view('/error', 
            [
                'reason' => $reason,
            ]);
        }
    }
}
