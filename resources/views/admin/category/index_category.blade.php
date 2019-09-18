@extends('layouts.App_admin')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> {{__('Categories')}}</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> {{__('Table Categories')}}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>{{__('ID')}}</th>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Date Created')}}</th>
                            <th>{{__('Date Updated')}}</th>
                            <th>
                                <a href="{{ route('create_category') }}" class="btn btn-success btn-icon-split">
                                    <span class="text">{{__('Add New')}}</span>
                                </a>
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($categories as $cate)
                            <tr>
                                <td>{!! $cate->id !!}</td>
                                <td>{!! $cate->name !!}</td>
                                <td>{!! $cate->created_at !!}</td>
                                <td>{!! $cate->updated_at !!}</td>
                                <td>
                                    <a href="{{ route('update_category', $cate->id) }}"
                                       class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('remove_category', $cate->id ) }}"
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
