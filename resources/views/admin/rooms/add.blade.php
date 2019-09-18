@extends('layouts.App_admin')


@section('content')

    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Dashboard') }}</h1>
        </div>

        <form action="{{ route('add_rooms') }}" method="post" enctype="multipart/form-data">

            {{--bat buoc phai co token--}}
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row justify-content-center">

                        <div class="col-4 text-center" style="margin-top: 100px">
                            <input type="file" name="images[]" multiple class="text-center center-block file-upload">
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">{{ __('Name Rooms') }}</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="title">{{ __('Title') }}</label>
                                <textarea class="form-control @error('title') is-invalid @enderror" rows="1" name="title">{{ old('name') }}</textarea>
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="rooms_detail">{{ __('Rooms Detail') }}</label>
                                <textarea class="form-control @error('title') is-invalid @enderror" rows="5" name="rooms_detail">{{ old('rooms_detail') }}</textarea>
                                @error('rooms_detail')
                                <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="price">{{ __('Price') }}</label>
                                <input type="text" name="price" class="form-control @error('name') is-invalid @enderror" value="{{ old('price') }}">
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address">{{ __('Address') }}</label>
                                <input type="text" name="address" class="form-control @error('name') is-invalid @enderror" value="{{ old('address') }}">
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="bed_type">{{ __('Loại Giường') }}</label>
                                <select name="bed_type" class="form-control">
                                    <option>{{ __('----- Chọn loại -----') }}</option>
                                    <option>{{ __('Giường Đơn') }}</option>
                                    <option>{{ __('Giường Đôi') }}</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="copacity_room">{{ __('Số người') }}</label>
                                <input type="text" name="copacity_room" class="form-control @error('copacity_room') is-invalid @enderror" value="{{ old('copacity_room') }}">
                                @error('copacity_room')
                                <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="facilities_room">{{ __('Tiện nghi') }}</label>
                                <input type="text" name="facilities_room" class="form-control @error('facilities_room') is-invalid @enderror" value="{{ old('facilities_room') }}">
                                @error('facilities_room')
                                <span class="invalid-feedback" role="alert">
                                            <strong>&emsp;{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-secondary col-md-4 offset-md-4">
                            {{__('Create Rooms')}}
                        </button>
                    </div>
                </div>
            </div>
        </form>

    </div>

@endsection
