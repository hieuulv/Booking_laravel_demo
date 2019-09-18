<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel_type extends Model
{
    //
    public function room()
    {
        return $this->belongsTo('App\Models\Room', 'id');
    }
}
