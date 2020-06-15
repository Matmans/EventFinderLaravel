<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public $timestamps = false;
    protected $table = 'ticket';
    public function concert()
    {
        return $this->belongsTo('App\Concert');
    }

    public function ticket_status()
    {
        return $this->belongsTo('App\Ticket_status');
    }
}
