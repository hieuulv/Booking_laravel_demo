@extends('layouts.App_admin')

@section('content')

    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Dashboard') }}</h1>
        </div>

        <form action="{{ route('edit_user', $users->id) }}" method="post" enctype="multipart/form-data">
            {{--bat buoc phai co token--}}
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row justify-content-center">

                        <div class="col-4 text-center" style="margin-top: 100px">
                            <img src="/upload_image/{!! $users->images !!}"
                                 class="avatar img-circle img-thumbnail"
                                 alt="avatar">
                            <h6>{{ __('Upload a different photo...') }}</h6>
                            <input type="file" name="images" value="{!! $users->images !!}" class="text-center center-block file-upload">
                        </div>

                        <div class="col-6 ">

                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" value="{!! $users->name !!}" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="birthday">{{ __('Birthday') }}</label>
                                <input type="date" value="{!! $users->birthday !!}" name="birthday"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="phone">{{ __('Phone') }}</label>
                                <input type="text" value="{!! $users->phone !!}" name="phone" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="text" value="{!! $users->email !!}" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="address">{{ __('Address') }}</label>
                                <input type="text" value="{!! $users->address !!}" name="address" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="role">{{ __('Role') }}</label>
                                <select name="role" class="form-control">
                                    <option>member</option>
                                    <option>admin</option>
                                    <option>manager</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-secondary col-md-4 offset-md-4">
                                {{ __('Update User') }}
                            </button>

                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
