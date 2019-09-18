<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Slide_subpage;
use App\Repositories\HomeBookingHotelRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $homebookingHotelRepository;

    public function __construct(HomeBookingHotelRepositoryInterface $homebookingHotelRepository)
    {
        $this->homebookingHotelRepository = $homebookingHotelRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comments = $this->homebookingHotelRepository->comments_lmit();
        $image_array_one = $this->homebookingHotelRepository->img_one();
        $image_array_two = $this->homebookingHotelRepository->img_tow();
        $settings = $this->homebookingHotelRepository->settingAll();
        $homepage = config('config_hottel.homepage');
        $slide_homes = $this->homebookingHotelRepository->slide_index();

        return view('index', compact('comments', 'image_array_one', 'image_array_two', 'settings', 'homepage', 'slide_homes'));
    }

    public function about()
    {
        $settings = $this->homebookingHotelRepository->settingAll();
        $slide_subpages = $this->homebookingHotelRepository->slide_subpage();

        return view('about', compact('settings', 'slide_subpages'));
    }

    public function rooms()
    {
        $settings = $this->homebookingHotelRepository->settingAll();
        $slide_subpages = $this->homebookingHotelRepository->slide_subpage();
        $image_array = $this->homebookingHotelRepository->image_first();

        return view('rooms', compact('settings', 'slide_subpages', 'image_array'));
    }

    public function detail_rooms($id)
    {
        $settings = $this->homebookingHotelRepository->settingAll();
        $slide_subpages = $this->homebookingHotelRepository->slide_subpage();
//        detail rooms
        $rooms = $this->homebookingHotelRepository->roomId($id);
        $image_array = $this->homebookingHotelRepository->imageAll($id);
        $comment_id = $this->homebookingHotelRepository->commentId($id);

        return view('detail_room', compact('settings', 'slide_subpages', 'rooms', 'image_array', 'comment_id'));
    }

    public function booking($id)
    {
        $settings = $this->homebookingHotelRepository->settingAll();
        $slide_subpages = $this->homebookingHotelRepository->slide_subpage();
        $rooms = $this->homebookingHotelRepository->roomId($id);

        $image_array = $this->homebookingHotelRepository->imageAll($id);

        return view('booking', compact('rooms', 'image_array', 'settings', 'slide_subpages'));
    }

    public function post()
    {
        $settings = $this->homebookingHotelRepository->settingAll();
        $slide_subpages = $this->homebookingHotelRepository->slide_subpage();

        return view('post', compact('settings', 'slide_subpages'));
    }

    public function myroom()
    {
        $settings = $this->homebookingHotelRepository->settingAll();
        $slide_subpages = $this->homebookingHotelRepository->slide_subpage();
        $bookings = $this->homebookingHotelRepository->user_id();

        return view('myroom', compact('settings', 'bookings', 'slide_subpages'));
    }

    public function contact()
    {
        $settings = $this->homebookingHotelRepository->settingAll();
        $slide_subpages = $this->homebookingHotelRepository->slide_subpage();

        return view('contact', compact('settings', 'slide_subpages'));
    }

    public function admin()
    {
        return view('admin.index');
    }

    public function search(Request $request)
    {
        $settings = $this->homebookingHotelRepository->settingAll();
        $slide_subpages = $this->homebookingHotelRepository->slide_subpage();
        $room_search = $this->homebookingHotelRepository->searchRoom($request);

        return view('search', compact('room_search', 'settings', 'slide_subpages'));
    }

}

