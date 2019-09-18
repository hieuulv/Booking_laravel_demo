@extends('layouts.App_admin')


@section('content')

    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Status') }}</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="row justify-content-center">
                    <form action="{{ route('status_booking_save', $status_bookings->id) }}" method="post">
                        @csrf

                        <div>

                            {{--@dd($status_bookings->status)--}}
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" @if($status_bookings->status == 1) checked
                                       @endif class="custom-control-input" id="defaultInline1"
                                       name="status" value="1" mdbInput>
                                <label class="custom-control-label"
                                       for="defaultInline1">{{ __('Đang chờ xử lý') }}</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" @if($status_bookings->status == 2) checked
                                       @endif class="custom-control-input" id="defaultInline2"
                                       name="status" value="2" mdbInput>
                                <label class="custom-control-label"
                                       for="defaultInline2">{{ __('Đã đặt thành công') }}</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" @if($status_bookings->status == 3) checked
                                       @endif class="custom-control-input" id="defaultInline3"
                                       name="status" value="3" mdbInput>
                                <label class="custom-control-label"
                                       for="defaultInline3">{{ __('Hủy đặt phòng') }}</label>
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">{{ __('Save Status') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
