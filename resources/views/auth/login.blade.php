@extends('layouts.app')

@section('content')
<section class="dt-breadcrumbs">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul>
                        <li><a href="{{url('/')}}">होम</a>
                        <li><a href="#">लॉगिन</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="dashboard-main">
        <div class="container-fluid">
            <div class="container">
                <div class="dashboard-main-wrapper">
                    <div class="dashboard-wrapper">
                        <div class="row mgt40p">
                            <div class="login-box" style="">
                                @if(Session::has('message'))
                                    <div class="alert {{ Session::get('alert-class') }} text-center" role="alert">

                                        {{ Session::get('message') }}
                                        <a href="#" class="alert-close pull-right" data-dismiss="alert">&times;</a>
                                    </div>
                                @endif
                                <div class="dz-login-form">
                                    <h2>लॉगिन</h2>
                                    <form method="post" action="{{url('/login')}}">
                                        {{csrf_field()}}
                                        <div class="form-group dz-lgfg">
                                            <label>ईमेल</label>
                                            <input type="text" name="email" class="form-control" required="">
                                        </div>
                                        <div class="form-group dz-lgfg">
                                            <label>पासवर्ड </label>
                                            <input type="password" name="password" class="form-control error3" required="">
                                        </div>
                                        <input type="submit" name="" value="लॉगिन" class="btn btn-default btnD1">&nbsp;
                                        <a href="{{url('forgotpassword')}}" class="btn btn-default btnD1">फॉरगेट पासवर्ड </a>
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
