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
                                    <h2>Forgot Password</h2>
                                    <form method="post" action="{{url('/forgotpassword')}}">
                                        {{csrf_field()}}
                                        <div class="form-group dz-lgfg">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control" required="">
                                        </div>
                                        <input type="submit" name="" value="Submit" class="btn btn-default btnD1">
                                        <a href="{{url('login')}}" class="btn btn-default btnD1">Back to login</a>
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
