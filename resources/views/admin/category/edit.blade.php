@extends('layouts.App_admin')


@section('content')

    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{__('Dashboard')}}</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-6 ">
                        <form action="{{ route('edit_category', $categories->id) }}" method="post">
                            {{--bat buoc phai co token--}}
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                            <div class="form-group">
                                <label for="name">{{__('Name Categories')}}</label>
                                <input type="text" value="{!! $categories->name !!}" name="name" class="form-control">
                            </div>
                            @if($errors->first('name'))
                                <p class="alert alert-danger">{{ $errors->first('name') }}</p>
                            @endif
                            <button type="submit" class="btn btn-secondary col-md-4 offset-md-4">
                                {{__('Update Categories')}}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
