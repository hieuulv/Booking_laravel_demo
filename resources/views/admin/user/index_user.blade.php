@extends('layouts.App_admin')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> {{__('Users')}}</h1>
        </div>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> {{__('Table Users')}}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>{{__('ID')}}</th>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Birthday')}}</th>
                            <th>{{__('Phone')}}</th>
                            <th>{{__('Email')}}</th>
                            <th>{{__('address')}}</th>
                            <th>{{__('Images')}}</th>
                            <th>{{__('Role')}}</th>
                            <th>
                                <a href="{{ route('create_user') }}" class="btn btn-success btn-icon-split">
                                    <span class="text">{{__('Add New')}}</span>
                                </a>
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{!! $user->id !!}</td>
                                <td>{!! $user->name !!}</td>
                                <td>{!! $user->birthday !!}</td>
                                <td>{!! $user->phone !!}</td>
                                <td>{!! $user->email !!}</td>
                                <td>{!! $user->address !!}</td>
                                <td>
                                    <img src="/upload_image/{!! $user->images !!}" alt="" width="130px" height="130px">
                                </td>
                                <td>{!! $user->role !!}</td>
                                <td>
                                    <a href="{{ route('update_user', $user->id) }}"
                                       class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('remove_user', $user->id) }}"
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
