<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concert_wishlist extends Model
{
    protected $table = 'concert_wishlist';
    public function concert()
    {
        return $this->belongsTo('App\Concert');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
