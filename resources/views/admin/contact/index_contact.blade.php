@extends('layouts.App_admin')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> {{__('Contact')}}</h1>
        </div>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> {{__('Table Contact')}}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>{{__('ID')}}</th>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Email')}}</th>
                            <th>{{__('Phone')}}</th>
                            <th>{{__('Address')}}</th>
                            <th>{{__('Content')}}</th>
                            <th>{{__('Date Created')}}</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{!! $contact->id !!}</td>
                                <td>{!! $contact->name !!}</td>
                                <td>{!! $contact->email !!}</td>
                                <td>{!! $contact->phone !!}</td>
                                <td>{!! $contact->address !!}</td>
                                <td>{!! $contact->content !!}</td>
                                <td>{!! $contact->created_at !!}</td>
                                <td>
                                    <a href="{{ route('remove_contact', $contact->id ) }}"
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
