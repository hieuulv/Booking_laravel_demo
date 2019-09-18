@extends('layouts.home_display')

@section('content')

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll">
            <img src="/upload_image/{{ $slide_subpages[3]['image'] }}" alt="">
        </div>
        <div class="home_content">
            <div class="home_title">{{ $slide_subpages[3]['title'] }}</div>
        </div>
    </div>


    <div class="site-section">
        <div class="container bootstrap snippet">

            <form action="{{ route('update_profile') }}" method="post">
                <div class="row">
                    <div class="col-sm-3"><!--left col-->

                        <div class="text-center">
                            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png"
                                 class="avatar img-circle img-thumbnail"
                                 alt="avatar">
                            <h6>Upload a different photo...</h6>
                            <input type="file" name="images" class="text-center center-block file-upload">
                        </div>

                    </div><!--/col-3-->
                    <div class="col-sm-9">

                        <div class="tab-pane" id="settings">
                            <hr>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label><h4>Họ và Tên</h4></label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label><h4>Sinh nhật</h4></label>
                                    <input type="text" class="form-control" name="birthday">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="phone"><h4>Số điện thoại</h4></label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="address"><h4>Address</h4></label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success pull-right" type="submit"><i
                                                class="glyphicon glyphicon-ok-sign"></i> Save
                                    </button>
                                    <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                                </div>
                            </div>
                        </div>


                    </div><!--/tab-content-->
                </div><!--/col-9-->
            </form>

        </div>
    </div>



@endsection
