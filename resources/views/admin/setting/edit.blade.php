@extends('layouts.App_admin')

@section('content')

    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Dashboard') }}</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-6 ">
                        <form action="{{ route('edit_setting', $settings->id) }}" method="post">
                            {{--bat buoc phai co token--}}
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                            <div class="form-group">
                                <label for="logo">{{ __('Logo Text') }}</label>
                                <input type="text" value="{!! $settings->text_logo !!}" name="text_logo" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="text" value="{!! $settings->email !!}" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="phone">{{ __('Phone') }}</label>
                                <input type="text" value="{!! $settings->phone !!}" name="phone" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="address">{{ __('Address') }}</label>
                                <input type="text" value="{!! $settings->address !!}" name="address" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="map">{{ __('Map') }}</label>
                                <input type="text" value="{!! $settings->map !!}" name="map" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-secondary col-md-4 offset-md-4">
                                {{ __('Update Setting') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
