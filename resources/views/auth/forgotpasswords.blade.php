@extends('layouts.app')

@section('content')

    <section class="dashboard-main">
        <div class="container-fluid">
            <div class="container">
                <div class="dashboard-main-wrapper">
                    <div class="dashboard-wrapper">
                        <div class="row mgt40p">
                            <div class="login-box">
                                @if(Session::has('message'))
                                    <div class="alert {{ Session::get('alert-class') }} text-center" role="alert">

                                        {{ Session::get('message') }}
                                        <a href="#" class="alert-close pull-right" data-dismiss="alert">&times;</a>
                                    </div>
                                @endif
                                <div class="dz-login-form">
                                    <h2>Update Password</h2>
                                    <form method="post" action="{{url('/updatepassword')}}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="user_id" class="form-control" required="" value="{{$id}}">
                                        <div class="form-group dz-lgfg">
                                            <label>New Password</label>
                                            <input type="text" name="new_password" class="form-control" required="">
                                        </div>
                                        <div class="form-group dz-lgfg">
                                            <label>Confirm Password</label>
                                            <input type="text" name="confirm_password" class="form-control" required="">
                                        </div>
                                        <input type="submit" name="" value="Submit" class="btn btn-default btnD1">
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
