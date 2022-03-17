@extends('layouts.app')
@section('content')
<section class="dashboard-main">
    <div class="container-fluid">
        <div class="container">
            <div class="dashboard-main-wrapper">
                <div class="dashboard-navigation">
                    <a class="close-dashnav" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                    <ul class="dashboard-menu">
                        <li>
                            <a  href="{{url('/dashboard')}}"><i class="fa fa-table"></i>आपके विचार?</a>
                        </li>
                        <li>
                            <a class="active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-user-circle"></i>प्रोफाइल</a>
                            <div id="submenu-1" class="collapse submenu" style="">
                               <ul class="nav flex-column">
                                        <li>
                                            <a href="{{url('/view-profile')}}"><i class="fa fa-eye"></i>प्रोफाइल देखिये</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/edit-profile')}}"><i class="fa fa-pencil"></i>संपादित करें प्रोफाइल</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/reset-password')}}"><i class="fa fa-lock"></i>पासवर्ड बदलें</a>
                                        </li>
                                    </ul>
                            </div>
                        </li>
                        <li>
                                <a class="nav-link" href="{{url('/my-complain')}}"><i class="fa fa-file"></i>अतीत  शिकायत </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('/my-suggestion')}}"><i class="fa fa-file"></i>अतीत  सुझाव</a>
                            </li>
                            <li>
                                <a  class="nav-link" href="{{url('/my-feedback')}}"><i class="fa fa-file"></i>अतीत  प्रतिक्रिया</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('/my-query')}}"><i class="fa fa-file"></i>अतीत क्वेरी </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('/my-update')}}"><i class="fa fa-file"></i>अतीत  अपडेट </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('/my-discussion')}}"><i class="fa fa-file"></i>चर्चा मंच</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('/logout')}}"><i class="fa fa-sign-out"></i>लॉगआउट </a>
                            </li>
                    </ul>
                </div>
                <div class="dashboard-wrapper">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Profile</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mgt40p">
                        <div class="col-sm-12">
                            <div class="user-profile">
                                <div class="imgbx">
                                    <?php if($results->profile_pic){?>
                                        <img src="{{url('/public/uploads/users/'.$results->profile_pic)}}">
                                    <?php }else{?>
                                        <img src="{{url('/images/avtar.jpg')}}">
                                    <?php }?>
                                </div>
                                <div class="details">
                                    <div>
                                        <div>Name</div>
                                        <div>{{$results->name}}</div>
                                    </div>
                                    <div>
                                        <div>Email</div>
                                        <div>{{$results->email}}</div>
                                    </div>
                                    <div>
                                        <div>Phone</div>
                                        <div>{{$results->phone_number}}</div>
                                    </div>
                                    <div>
                                        <div>Gender</div>
                                        <div>{{$results->gender}}</div>
                                    </div>
                                    <div>
                                        <div>Date Of Birth</div>
                                        <div>{{$results->dob}}</div>
                                    </div>
                                    {{--<div>--}}
                                        {{--<div>City</div>--}}
                                        {{--<div>{{$results->city}}</div>--}}
                                    {{--</div>--}}
                                    <div>
                                        <div>State</div>
                                        <div>{{$results->state}}</div>
                                    </div>
                                    <div>
                                        <div>Address</div>
                                        <div>{{$results->address}}</div>
                                    </div>
                                    <div>
                                        <a class="btn btn-default btnD1" href="{{url('/edit-profile')}}">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop