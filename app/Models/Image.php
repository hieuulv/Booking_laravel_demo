<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    public function room()
    {
        return $this->belongsTo('App\Models\Room', 'rooms_id', 'id');
    }
}
