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
                            <a  href="{{url('/dashboard')}}"><i class="fa fa-table"></i>क्या कहने के लिए कुछ है ?</a>
                        </li>
                        <li>
                            <a class="active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-user-circle"></i>मेरी प्रोफाइल</a>
                            <div id="submenu-1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li>
                                        <a href="{{url('/view-profile')}}"><i class="fa fa-eye"></i>प्रोफाइल देखिये</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/edit-profile')}}"><i class="fa fa-pencil"></i>प्रोफाइल एडिट करें</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/reset-password')}}"><i class="fa fa-lock"></i>पासवर्ड बदलें</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('/my-complain')}}"><i class="fa fa-file"></i>अतीत  शिकायत</a>
                        </li>
                        <li>
                            <a  class="nav-link" href="{{url('/my-suggestion')}}"><i class="fa fa-file"></i>अतीत  सुझाव</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('/my-feedback')}}"><i class="fa fa-file"></i>अतीत  प्रतिक्रिया</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('/my-query')}}"><i class="fa fa-file"></i>अतीत क्वेरी </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('/my-update')}}"><i class="fa fa-file"></i>अतीत  अपडेट</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('/my-discussion')}}"><i class="fa fa-file"></i>चर्चा मंच</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('/logout')}}"><i class="fa fa-sign-out"></i>लॉगआउट</a>
                        </li>
                    </ul>
                </div>
                <div class="dashboard-wrapper">
                    @if(Session::has('message'))
                        <div class="alert {{ Session::get('alert-class') }} text-center" role="alert">

                            {{ Session::get('message') }}
                            <a href="#" class="alert-close pull-right" data-dismiss="alert">&times;</a>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">प्रोफाइल एडिट करें</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row mgt40p">
                        <div class="col-sm-12">
                            <form method="post" enctype="multipart/form-data" action="{{url('/update')}}">
                                {{csrf_field()}}
                            <div class="user-profile">
                                <div class="imgbx">
                                    <?php if($results->profile_pic){?>
                                    <img src="{{url('/public/uploads/users/'.$results->profile_pic)}}">
                                    <?php }else{?>
                                    <img src="{{url('/images/avtar.jpg')}}">
                                    <?php }?>
                                    <input type="file" name="profile_pic">
                                    <input type="hidden" name="profile_pic_old" value="{{$results->profile_pic}}">
                                </div>
                                <div class="details">
                                    <div>
                                        <div>नाम</div>
                                        <div>
                                            <input type="text" name="name" value="{{$results->name}}" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div>
                                        <div>ईमेल</div>
                                        <div>
                                            <input type="email" name="email"  value="{{$results->email}}" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div>
                                        <div>फ़ोन</div>
                                        <div>
                                            <input type="tel" name="phone_number"  value="{{$results->phone_number}}" class="form-control" placeholder="Mobile">
                                        </div>
                                    </div>
                                    <div>
                                        <div>लिंग</div>
                                        <div>
                                            <select class="form-control" name="gender">
                                                <option value="Male" <?php if($results->gender=='Male'){echo 'selected';}?>>पुरुष</option>
                                                <option value="Female" <?php if($results->gender=='Female'){echo 'selected';}?>>महिला</option>
                                                <option value="Other" <?php if($results->gender=='Other'){echo 'selected';}?>>अन्य</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <div>जन्म की तारीख</div>
                                        <div>
                                            <input type="date" name="dob"  value="{{$results->dob}}" class="form-control" placeholder="Enter Date of Birth">
                                        </div>
                                    </div>
                                    {{--<div>--}}
                                        {{--<div>शहर</div>--}}
                                        {{--<div>--}}
                                            {{--<input type="text" name="city"  value="{{$results->city}}" class="form-control" placeholder="City">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div>
                                        <div>राज्य</div>
                                        <div>
                                            <input type="text" name="state"  value="{{$results->state}}" class="form-control" placeholder="State">
                                        </div>
                                    </div>
                                    <div>
                                        <div>पता</div>
                                        <div>
                                            <textarea class="form-control" placeholder="Address" name="address"> {{$results->address}}</textarea>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-default btnD1">Save</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@stop