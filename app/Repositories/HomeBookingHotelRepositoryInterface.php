<?php

namespace App\Repositories;


interface HomeBookingHotelRepositoryInterface{

    public function comments_lmit();

    public function img_one();

    public function img_tow();

    public function settingAll();

    public function slide_index();

    public function slide_subpage();

    public function image_first();

    public function roomId($id);

    public function user_id();

    public function imageAll($id);

    public function commentId($id);

    public function searchRoom($request);

}
