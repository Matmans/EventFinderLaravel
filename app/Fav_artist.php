<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fav_artist extends Model
{
    protected $table = 'fav_artist';
    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
