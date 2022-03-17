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
                                <a href="{{url('/dashboard')}}"><i class="fa fa-table"></i>आपके विचार?</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-user-circle"></i>प्रोफाइल</a>
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
                                <a class="nav-link" href="{{url('/my-complain')}}"><i class="fa fa-file"></i>पास्ट  ग्रीवांस  </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('/my-suggestion')}}"><i class="fa fa-file"></i>पास्ट  सुझाव</a>
                            </li>
                            <li>
                                <a  class="nav-link" href="{{url('/my-feedback')}}"><i class="fa fa-file"></i>पास्ट  फीडबैक </a>
                            </li>
                            <li>
                                <a class="nav-link active" href="{{url('/my-query')}}"><i class="fa fa-file"></i>पास्ट क्वेरी   </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('/my-update')}}"><i class="fa fa-file"></i>पास्ट  अपडेट </a>
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
                                    <h2 class="pageheader-title">Query</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="feedback-table">
                                    <h4><b>Query</b></h4>
                                    <div class="table-box">
                                        <table class="table table-bordered table-striped" id="myTable">
                                            <thead>
                                            <tr>
                                                <th>Query Id.</th>
                                                <th>Category</th>
                                                <th>Query</th>
                                                <th>DateTime</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                                <?php $i = 1;?>
                                                @foreach ($results as $user)
                                                    <?php  $category= \App\Category::where('id',$user->cat_id)->first();
                                                    if($user->cat_id != config('constants.OTHERS')){
                                                        $categoryName=$category->name;
                                                    }else if($user->cat_id==config('constants.OTHERS')){
                                                        $categoryName=$category->name.'( '.ucfirst($user->others).' )';
                                                    }?>
                                                    <tr data-entry-id="{{ $user->id }}">
                                                        <td>{{ $user->code }}</td>
                                                        <td field-key='name'>@if($categoryName){{$categoryName }}@endif</td>
                                                        <td >{{ $user->query }}</td>
                                                        <td>{{ date('d-m-Y H:i:s', strtotime($user->created_at)) }}</td>
                                                    </tr>
                                                    <?php $i++;?>
                                                @endforeach
                                            </tbody>
                                        </table>
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

