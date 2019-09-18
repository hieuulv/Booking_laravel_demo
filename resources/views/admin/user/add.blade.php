@extends('layouts.App_admin')

@section('content')
    <style>
        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: #003bff;
            cursor: inherit;
            display: block;
        }

        #img-upload{
            width: 100%;
        }
    </style>

    <div class="container-fluid">

        <form action="{{ route('add_user') }}" method="post" enctype="multipart/form-data" novalidate>

            {{--bat buoc phai co token--}}
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row justify-content-center">

                        <div class="col-4 text-center" style="margin-top: 100px">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-primary btn-file">
                                            Browse… <input type="file" id="imgInp" name="images" value="{{ old('images') }}">
                                        </span>
                                    </span>

                                    <input type="text" class="form-control"  readonly>
                                    @if($errors->first('images'))
                                        <span class="text-danger" role="alert">
                                            <strong>&emsp;{{$errors->first('images')}}</strong>
                                        </span>
                                    @endif
                                </div>
                                <img id='img-upload'/>
                            </div>
                        </div>

                        <div class="col-6 ">

                            <div class="form-group input-group-sm">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                       value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&emsp;{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group input-group-sm">
                                <label for="name">{{ __('Birthday') }}</label>
                                <input type="date" name="birthday"
                                       class="form-control @error('birthday') is-invalid @enderror"
                                       value="{{ old('birthday') }}">
                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&emsp;{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group input-group-sm">
                                <label for="phone">{{ __('Phone') }}</label>
                                <input type="text" name="phone"
                                       class="form-control @error('birthday') is-invalid @enderror"
                                       value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&emsp;{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group input-group-sm">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="text" name="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&emsp;{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group input-group-sm">
                                <label for="address">{{ __('Address') }}</label>
                                <input type="text" name="address"
                                       class="form-control @error('address') is-invalid @enderror"
                                       value="{{ old('address') }}">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&emsp;{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group input-group-sm">
                                <label for="password">{{ __('Password') }}</label>
                                <input type="password" name="password" required autocomplete="new-password"
                                       class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&emsp;{!! $message !!}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group input-group-sm">
                                <label for="password">{{ __('Confirm Password') }}</label>
                                <input type="password" name="password_confirm" required autocomplete="new-password"
                                       class="form-control  @error('password') is-invalid @enderror">
                                @error('password_confirm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&emsp;{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group input-group-sm">
                                <label for="role">{{ __('Role') }}</label>
                                <select name="role" class="form-control">
                                    <option>member</option>
                                    <option>admin</option>
                                    <option>manager</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-secondary col-md-4 offset-md-4">
                                {{ __('Add User') }}
                            </button>

                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        $(document).ready( function() {
            $(document).on('change', '.btn-file :file', function() {
                var input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
            });

            $('.btn-file :file').on('fileselect', function(event, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = label;

                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }

            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#img-upload').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function(){
                readURL(this);
            });
        });
    </script>
@endsection
