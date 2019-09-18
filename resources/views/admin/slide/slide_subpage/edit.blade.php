@extends('layouts.App_admin')

@section('content')

    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Dashboard') }}</h1>
        </div>

        <form action="{{ route('edit_slide_subpage', $slide_subpages->id) }}" method="post" enctype="multipart/form-data">

            {{--bat buoc phai co token--}}
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row justify-content-center">

                        <div class="col-4 text-center">
                            <img src="/upload_image/{!! $slide_subpages->image !!}"
                                 class="avatar img-circle img-thumbnail"
                                 alt="avatar">
                            <h6>{{ __('Upload a different photo...') }}</h6>
                            <input type="file" name="image" class="text-center center-block file-upload">
                        </div>

                        <div class="col-6 ">


                            <div class="form-group">
                                <label for="name">{{ __('Title') }}</label>
                                <input type="text" name="title" value="{!! $slide_subpages->title !!}" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-secondary col-md-4 offset-md-4">
                                {{ __('Edit Slide') }}
                            </button>

                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
