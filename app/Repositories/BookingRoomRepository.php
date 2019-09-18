<?php

namespace App\Repositories;

use App\Models\Booking;
use App\Models\Image;
use App\Models\Room;
use App\Models\Setting;
use App\Models\Slide_subpage;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;

class BookingRoomRepository implements BookingRoomRepositoryInterface
{
    public function booking_user()
    {
        // TODO: Implement booking_user() method.
        return Booking::with([
            'room' => function ($query) {
                $query->select(['id', 'name']);
            },
            'users' => function ($query) {
                $query->select(['id', 'name', 'email']);
            }])
            ->get();
    }

    public function room_id($request)
    {
        // TODO: Implement room_id() method.
        return Room::find($request->get('room_id'));
    }

    public function booking_status($id)
    {
        // TODO: Implement booking_status() method.
        return Booking::find($id);
    }

    public function slide_subpage()
    {
        // TODO: Implement slide_subpage() method.
        return Slide_subpage::all();
    }

    public function roomId($id)
    {
        // TODO: Implement roomId() method.
        return Room::findOrFail($id);
    }

    public function imageAll($id)
    {
        // TODO: Implement image_all() method.
        $image_array = [];
        $rooms = $this->roomId($id);
        $image = Image::where('rooms_id', $rooms['id'])->get()->toArray();
        $image_array['images'] = $image;

        return $image_array;
    }

    public function settingAll()
    {
        // TODO: Implement settingAll() method.
        return Setting::all();
    }
}
