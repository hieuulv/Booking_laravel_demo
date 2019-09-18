<?php

namespace App\Repositories;

use App\Models\Booking;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Room;
use App\Models\Setting;
use App\Models\Slide_home;
use App\Models\Slide_subpage;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;

class HomeBookingHotelRepository implements HomeBookingHotelRepositoryInterface
{
    public function comments_lmit()
    {
        // TODO: Implement index() method.
        return Comment::limit(5)->get()->toArray();
    }

    public function img_one()
    {
        // TODO: Implement img_one() method.
        $image_array_one = [];
        $room_one = Room::limit(4)->orderBy('id', 'desc')->get()->toArray();
        foreach ($room_one as $key => $value) {
            $image = Image::where('rooms_id', $value['id'])->first();
            $image_array_one[$key] = $value;
            $image_array_one[$key]['images'] = $image;
        }

        return $image_array_one;
    }

    public function img_tow()
    {
        // TODO: Implement img_tow() method.
        $image_array_two = [];
        $room_two = Room::limit(8)->orderBy('id', 'asc')->get()->toArray();
        foreach ($room_two as $key => $value) {
            $image = Image::where('rooms_id', $value['id'])->first();
            $image_array_two[$key] = $value;
            $image_array_two[$key]['images'] = $image;
        }

        return $image_array_two;
    }

    public function settingAll()
    {
        // TODO: Implement settingAll() method.
        return Setting::all();
    }

    public function slide_index()
    {
        // TODO: Implement config_homepage() method.
        return Slide_home::all();
    }

    public function slide_subpage()
    {
        // TODO: Implement slide_subpage() method.
        return Slide_subpage::all();
    }

    public function image_first()
    {
        // TODO: Implement image_first() method.
        $image_array = [];
        $rooms = Room::paginate(5);
        foreach ($rooms as $key => $value) {
            $image = Image::where('rooms_id', $value['id'])->first();
            $image_array[$key] = $value;
            $image_array[$key]['images'] = $image;
        }

        return $image_array;
    }

    public function roomId($id)
    {
        // TODO: Implement roomId() method.
        return Room::findOrFail($id);
    }

    public function user_id()
    {
        // TODO: Implement user_id() method.

        return Booking::where('user_id', '=', Auth::user()->id)->get();
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

    public function commentId($id)
    {
        // TODO: Implement commentId() method.
        $rooms = $this->roomId($id);
        $comment_id = Comment::where('room_id', $rooms['id'])->get()->toArray();

        return $comment_id;
    }

    public function searchRoom($request)
    {
        // TODO: Implement searchRoom() method.
        $room_search = [];
        $rooms =  Room::where('name', 'like', "%$request->key%")->paginate(7);
        foreach ($rooms as $key => $value) {
            $image = Image::where('rooms_id', $value['id'])->first();
            $room_search[$key] = $value;
            $room_search[$key]['images'] = $image;
        }

        return $rooms;
    }
}
