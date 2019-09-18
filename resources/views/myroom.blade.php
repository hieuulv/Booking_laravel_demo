@extends('layouts.home_display')

@section('content')

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll">
            <img src="/upload_image/{{ $slide_subpages[6]['image'] }}" alt="">
        </div>
        <div class="home_content">
            <div class="home_title">{{ $slide_subpages[6]['title'] }}</div>
        </div>
    </div>

    <div class="container">
        <div class="table_booking">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">{{ __('Họ tên') }}</th>
                    <th scope="col">{{ __('Email') }}</th>
                    <th scope="col">{{ __('Số điện thoại') }}</th>
                    <th scope="col">{{ __('Ngày đến') }}</th>
                    <th scope="col">{{ __('Ngày đi') }}</th>
                    <th scope="col">{{ __('Phòng') }}</th>
                    <th scope="col">{{ __('Trạng thái') }}</th>
                    <th scope="col">{{ __('Action') }}</th>
                </tr>
                </thead>
                <tbody>

                @foreach($bookings as $booking)
                    <tr>
                        <th scope="row">{{$booking->name}}</th>
                        <td>{{Auth::user()->email}}</td>
                        <td>{{$booking->phone}}</td>
                        <td>{{$booking->check_in}}</td>
                        <td>{{$booking->check_out}}</td>
                        <td>
                            <a href="{{Route('detail',$booking->room_id)}}">
                                {{ __('Xem Phòng') }}
                            </a>
                        </td>
                        <td>
                            @if($booking->status == 1)
                                <button class="btn btn-outline-warning waves-effect">
                                    {{ __('Đang chờ xử lý') }}
                                </button>
                            @elseif($booking->status == 2)
                                <button class="btn btn-outline-success waves-effect">
                                    {{ __('Đặt phòng thành công') }}
                                </button>
                            @else
                                <button class="btn btn-outline-danger waves-effect">
                                    {{ __('Phòng đặt đã bị hủy') }}
                                </button>
                            @endif
                        </td>
                        <td>
                            <a href="" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
