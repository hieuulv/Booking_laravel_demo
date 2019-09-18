<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    public function images(){
        return $this->hasMany('App\Models\Image', 'rooms_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'room_id');
    }

    public function bookings()
    {
        return $this->hasMany('App\Models\Booking', 'room_id');
    }
}
