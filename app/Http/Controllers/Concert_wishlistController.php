<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Concert;
use App\Concert_wishlist;

class Concert_wishlistController extends Controller
{
    public function check($user_id,$concert_id) {
        try {
            if(is_numeric($user_id) && is_numeric($concert_id))
            {
                $Concert_wishlist = Concert_wishlist::where('user_id',$user_id)->where('concert_id',$concert_id)->first();
                if (empty($favconcert))
                {
                    $Concert_wishlist = new Concert_wishlist;

                    $Concert_wishlist->concert_id = $concert_id;
                    $Concert_wishlist->user_id = $user_id;
                    $Concert_wishlist->save();

                    return redirect('/home');
                }
                else {
                    return view('/error');
                }
            }
        } catch (\exception $e) {
            return view('/error');
        }
    }

    public function delete($user_id,$concert_id) {
        try {
            if(is_numeric($user_id) && is_numeric($concert_id))
            {
                $Concert_wishlist = Concert_wishlist::where('user_id',$user_id)->where('concert_id',$concert_id)->first();
                if (empty($Concert_wishlist))
                {
                    return view('/error');
                }
                else {
                    $Concert_wishlist->delete();
                    return redirect('/home');
                }
            }
        } catch (\exception $e) {
            return view('/error');
        }
    }
}
