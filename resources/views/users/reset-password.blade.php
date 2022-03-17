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
                            <a  href="{{url('/dashboard')}}"><i class="fa fa-table"></i>Have something to say?</a>
                        </li>
                        <li>
                            <a class="active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-user-circle"></i>My Profile</a>
                            <div id="submenu-1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li>
                                        <a href="{{url('/view-profile')}}"><i class="fa fa-eye"></i>View Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/edit-profile')}}"><i class="fa fa-pencil"></i>Edit Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/reset-password')}}"><i class="fa fa-lock"></i>Change Password</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('/my-complain')}}"><i class="fa fa-file"></i>Past Grievance</a>
                        </li>
                        <li>
                            <a  class="nav-link" href="{{url('/my-suggestion')}}"><i class="fa fa-file"></i>Past Suggestion</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('/my-feedback')}}"><i class="fa fa-file"></i>Past Feedback</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('/my-query')}}"><i class="fa fa-file"></i>Past Query</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('/my-update')}}"><i class="fa fa-file"></i>Past Update</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('/my-discussion')}}"><i class="fa fa-file"></i>Discussion Forum</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('/logout')}}"><i class="fa fa-sign-out"></i>Logout</a>
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
                                <h2 class="pageheader-title">Change Password</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row mgt40p">
                        <div class="col-sm-12">
                            <form id="changepass" method="post" action="{{url('/update-password')}}" onSubmit="return checkPasswordConfirm()">
                                {{csrf_field()}}
                                <div class="user-profile">
                                <div class="details">
                                    <div>
                                        <div>Old Password</div>
                                        <div>
                                            <input type="password" name="old_password"  id="old_password" class="form-control" placeholder="Enter Old Password" required>
                                        </div>
                                    </div>
                                    <div>
                                        <div>New Password</div>
                                        <div>
                                            <input type="password" name="password"  id="password" class="form-control" placeholder="Enter New Password" required>
                                        </div>
                                    </div>
                                    <div>
                                        <div>Confirm Password</div>
                                        <div>
                                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm New Password" required>
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
<script>
    function checkPasswordConfirm(){
        var pass = $('#password').val();
        var cpass = $('#confirm_password').val();
        if(cpass!=pass){
            alert('Confirm password does not match');
            $('#password').val('');
            $('#confirm_password').val('');
            return false;
        }else{
            return true;
        }
    }
</script>