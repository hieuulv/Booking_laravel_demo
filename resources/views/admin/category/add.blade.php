@extends('layouts.App_admin')


@section('content')

    <div class="container-fluid">

        @if(isset ($mess))
            <p class="alert alert-success">{!! $mess !!}</p>
        @endif

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Dashboard') }}</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-6 ">
                        <form action="{{ route('add_category') }}" method="post">
                            {{--bat buoc phai co token--}}
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                            <div class="form-group">
                                <label for="name">{{ __('Name Categories') }}</label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                       class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>&emsp;{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-secondary col-md-4 offset-md-4">
                                {{ __('Create Categories') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
