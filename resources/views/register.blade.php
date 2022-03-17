@extends('layouts.app')

@section('content')
    <section class="reg-form">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-3 col-sm-6">
                        @if(Session::has('message'))
                            <div class="alert {{ Session::get('alert-class') }} text-center" role="alert">

                                {{ Session::get('message') }}
                                <a href="#" class="alert-close pull-right" data-dismiss="alert">&times;</a>
                            </div>
                        @endif
                        <div class="dz-register-form">
                            <form method="post" id="registerForm" action="{{url('/registerData')}}">
                                {{csrf_field()}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2>Register</h2>
                                </div>
                            </div>
                                <input type="hidden" name="head_id" placeholder="Enter Aadhar No." value="{{$head_id}}">
                                <input type="hidden" name="subhead_id" placeholder="Enter Aadhar No." value="{{$subhead_id}}">
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-12">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>आधार नंबर </label>--}}
                                        {{--<input type="text" name="adhaar_card" placeholder="Enter Aadhar No." class="form-control validate[required]">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>उपयोगकर्ता नाम <span style="color: red;">*</span></label>
                                        <input type="text" name="username" placeholder="Enter Usename" class="form-control validate[required]">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>पारण शब्द<span style="color: red;">*</span></label>
                                        <input type="password" name="password" placeholder="••••••••" class="form-control validate[required]">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>पासवर्ड की पुष्टि कीजिये</label>
                                        <input type="password" name="con_password" placeholder="••••••••" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>पूरा नाम<span style="color: red;">*</span></label>
                                        <input type="text" name="name" placeholder="Enter Name" class="form-control validate[required]">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>घर का पता<span style="color: red;">*</span></label>
                                        <textarea name="address" placeholder="Address" class="form-control validate[required]"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>कार्यालय का पता</label>
                                        <textarea name="office_address" placeholder="Address" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>देश<span style="color: red;">*</span></label>
                                        <input type="text" name="country" placeholder="Country Name" class="form-control validate[required]">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>राज्य<span style="color: red;">*</span></label>
                                        <input type="text" name="state" placeholder="State Name" class="form-control validate[required]">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>मोबाइल<span style="color: red;">*</span></label>
                                        <input type="text" name="phone_number" placeholder="Enter Mobile No." class="form-control validate[required]" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>ईमेल<span style="color: red;">*</span></label>
                                        <input type="text" name="email" placeholder="Enter Email Address" class="form-control validate[required]">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-12">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>आय का स्रोत</label>--}}
                                        {{--<input type="text" name="source_of_income" placeholder="Source of Income" class="form-control validate[required]">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>संगठन<span style="color: red;">*</span></label>
                                        <input type="text" name="organisation" placeholder="Organisation Name" class="form-control validate[required]">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>पद</label>
                                        <input type="text" name="designation" placeholder="Designation" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="submit" name="" value="Register" class="btn btn-default btn-modal-login">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <br>
                                    <h5>पहले से पंजीकृत ? <a data-toggle="modal" data-target="#loginModal" class="dz-sign-up">यहां लॉगिन करें</a></h5>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
