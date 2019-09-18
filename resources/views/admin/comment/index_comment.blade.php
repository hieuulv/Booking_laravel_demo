@extends('layouts.App_admin')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> {{__('Comment')}}</h1>
        </div>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> {{__('Table Comment')}}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>{{__('ID')}}</th>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Email')}}</th>
                            <th>{{__('Room')}}</th>
                            <th>{{__('Comment')}}</th>
                            <th>{{__('Date Created')}}</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <td>{!! $comment['id'] !!}</td>
                                <td>{!! $comment['user']['name'] !!}</td>
                                <td>{!! $comment['user']['email'] !!}</td>
                                <td>{!! $comment['room']['name'] !!}</td>
                                <td>{!! $comment['content'] !!}</td>
                                <td>{!! $comment['created_at'] !!}</td>
                                <td>
                                    <a href="{{ route('remove_comment', $comment['id'] ) }}"
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
