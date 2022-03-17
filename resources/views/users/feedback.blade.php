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
                            <a href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-user-circle"></i> प्रोफाइल</a>
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
                                <a  class="nav-link active" href="{{url('/my-feedback')}}"><i class="fa fa-file"></i>अतीत  प्रतिक्रिया</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('/my-query')}}"><i class="fa fa-file"></i>अतीत क्वेरी </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('/my-update')}}"><i class="fa fa-file"></i>अतीत अपडेट </a>
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
                                <h2 class="pageheader-title">प्रतिक्रिया</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="feedback-table">
                                <h4><b>परियोजनाओं पर प्रतिक्रिया</b></h4>
                                <div class="table-box">
                                    <table class="table table-bordered table-responsive clr-oddEven">
                                        <tr>
                                            <th class="text-center" width="100px">संख्या नंबर </th>
                                            <th>परियोजना का नाम</th>
                                            <th>परियोजना विवरण</th>
                                            <th>स्थान</th>
                                            <th>प्रतिक्रिया</th>
                                            <th>दिनांक समय</th>
                                        </tr>
                                        <?php
                                        $i= 0;?>
                                        @if(count($results) > 0)
                                            @foreach($results as $result)
                                                <?php
                                                    $i++;
                                                $projects = \App\OngoingProject:: where('status',1)->where('id',$result->project_id)->first();
                                                $location = '';
                                                if($projects){
                                                    $location = \App\Area:: where('status',1)->where('id',$projects->location)->first();
                                                }
                                                ?>
                                                <tr>
                                                    <td class="text-center">{{$i}}</td>
                                                    <td>@if($projects){{$projects->name}}@endif</td>
                                                    <td>@if($projects){{$projects->description}}@endif</td>
                                                    <td>@if($location){{$location->area}}@endif</td>
                                                    <td>{{$result->feedback}}</td>
                                                    <td>{{ date('d-m-Y H:i:s', strtotime($result->created_at)) }}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6">कोई प्रोजेक्ट नहीं मिला|</td>
                                            </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                            <div class="feedback-table">
                                <h4><b>अधिकारियों पर प्रतिक्रिया</b></h4>
                                <div class="table-box">
                                    <table class="table table-bordered table-responsive clr-oddEven">
                                        <tr>
                                            <th class="text-center" width="100px">संख्या नंबर </th>
                                            <th>प्राधिकरण का नाम</th>
                                            <th width="200px" class="text-center">Rating</th>
                                            <th>Reason</th>
                                        </tr>
                                        <?php
                                        $i= 0;?>
                                        @if(count($resultss) > 0)
                                            @foreach($resultss as $result)
                                                <?php
                                                $i++;
                                                $authoritys = \App\Authority:: where('status',1)->where('id',$result->authority_id)->first();
                                                ?>
                                                <tr>
                                                    <td class="text-center">{{$i}}</td>
                                                    <td>@if($authoritys){{$authoritys->authority_name}}@endif</td>
                                                    <td><?php
                                                        if($result->rating==1){?>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <?php }else if($result->rating==2){?>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <?php }else if($result->rating==3){?>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <?php }else if($result->rating==4){?>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <?php }else if($result->rating==5){?>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <?php }?></td>
                                                    <td>{{$result->feedback}}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="4">कोई डेटा नहीं मिला</td>
                                            </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                            <div class="feedback-table">
                                <h4><b>पोर्टल पर प्रतिक्रिया</b></h4>
                                <div class="table-box portal">
                                    <table class="table table-bordered table-responsive clr-oddEven">
                                        @if(count($resultsss) > 0)
                                            @foreach($resultsss as $result)
                                                <tr>
                                                    <td class="text-center">Rating</td>
                                                    <td class="text-center">
                                                        <?php
                                                        if($result->rating==1){?>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        <?php }else if($result->rating==2){?>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        <?php }else if($result->rating==3){?>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        <?php }else if($result->rating==4){?>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        <?php }else if($result->rating==5){?>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        <?php }?>
                                                    </td>
                                                    <td>Reason</td>
                                                    <td>{{$result->feedback}}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5">No Data Found</td>
                                            </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop