@extends('layouts.App_admin')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> {{ __('Rooms') }}</h1>
            <a href="{{ route('create_rooms') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">{{__('Add New')}}</a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> {{ __('Table Rooms') }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>{{ __('ID') }}</th>
                            <th>{{ __('Tên Phòng') }}</th>
                            <th>{{ __('Tiêu Đề') }}</th>
                            <th>{{ __('Giá') }}</th>
                            <th>{{ __('Địa Chỉ') }}</th>
                            <th>{{ __('Review') }}</th>
                            <th>{{ __('Loại Giường') }}</th>
                            <th>
                                {{__('Actions')}}
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($image_array as $room)
                            <tr>
                                <td>{!! $room['id'] !!}</td>
                                <td>{!! $room['name'] !!}</td>
                                <td>{!! $room['title'] !!}</td>
                                <td>{!! $room['price'] !!} {{ __('VNĐ') }}</td>
                                <td>{!! $room['address'] !!}</td>
                                <td>
                                    <img src="/upload_image/{{ $room['images']['images'] }}" style="width: 100px">
                                </td>

                                <td>{!! $room['bed_type'] !!}</td>
                                <td>
                                    <a href="{{ route('update_rooms', $room['id']) }}"
                                       class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('remove_rooms', $room['id']) }}"
                                       onclick="return confirm('{{ __('Bạn có chắc chắc muốn xóa không?.') }}')"
                                       class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
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
