@extends('layouts.App_admin')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> {{__('Setting')}}</h1>
        </div>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> {{__('Table Setting')}}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>{{__('ID')}}</th>
                            <th>{{__('Logo Image')}}</th>
                            <th>{{__('Logo Text')}}</th>
                            <th>{{__('Email')}}</th>
                            <th>{{__('Phone')}}</th>
                            <th>{{__('Address')}}</th>
                            <th>{{__('Map')}}</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($settings as $setting)
                            <tr>
                                <td>{!! $setting->id !!}</td>
                                <td>
                                    <img src="/upload_image/{!! $setting->image_logo !!}" alt="">
                                </td>
                                <td>{!! $setting->text_logo !!}</td>
                                <td>{!! $setting->email !!}</td>
                                <td>{!! $setting->phone !!}</td>
                                <td>{!! $setting->address !!}</td>
                                <td>
                                    <iframe
                                            src="{!! $setting->map !!}"
                                            width="100%" height="200px"
                                            style="border:0">
                                    </iframe>
                                </td>
                                <td>
                                    <a href="{{ route('update_setting', $setting->id) }}"
                                       class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
