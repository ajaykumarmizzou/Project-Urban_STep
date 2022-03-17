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
                                <a  class="active" href="{{url('/dashboard')}}"><i class="fa fa-table"></i>आपके विचार?</a>
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
                                </div 
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('/my-complain')}}"><i class="fa fa-file"></i>अतीत  शिकायत  </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('/my-suggestion')}}"><i class="fa fa-file"></i>अतीत  सुझाव</a>
                            </li>
                            <li>
                                <a  class="nav-link" href="{{url('/my-feedback')}}"><i class="fa fa-file"></i>अतीत  प्रतिक्रिया </a>
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
                        @if(Session::has('message'))
                            <div class="alert {{ Session::get('alert-class') }} text-center" role="alert">

                                {{ Session::get('message') }}
                                <a href="#" class="alert-close pull-right" data-dismiss="alert">&times;</a>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header">
                                    <h2 class="pageheader-title">आपके विचार? - स्वागतम {{$results->name}}</h2>
                                </div>
                            </div>
                        </div>
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<div class="graphBx">--}}
                                    {{--<div class="bxhead">--}}
                                        {{--<h3>SUGGESTIONS SHARE</h3>--}}
                                        {{--<ul class="graphBx-cntrl">--}}
                                            {{--<li><a href="#"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div id="chartContainerSuggesShare" style="height: 300px; width: 100%;"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<div class="graphBx">--}}
                                    {{--<div class="bxhead">--}}
                                        {{--<h3>UPDATE SHARE</h3>--}}
                                        {{--<ul class="graphBx-cntrl">--}}
                                            {{--<li><a href="#"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div id="chartContainerUpdateShare" style="height: 300px; width: 100%;"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="row mgt40p">
                            <div class="col-sm-12">
                                <div class="dashboard-grid">
                                    <div class="gridBx">
                                        <a href="{{url('/view-profile')}}">
                                            <img src="{{url('/images/001-user.png')}}">
                                            <h2>प्रोफ़ाइल </h2>
                                        </a>
                                    </div>
                                    <div class="gridBx">
                                        <a href="{{url('/complaints')}}">
                                            <img src="{{url('/images/003-customer.png')}}">
                                            <h2>नई शिकायत </h2>
                                        </a>
                                    </div>
                                    <div class="gridBx">
                                        <a href="{{url('/suggestions')}}">
                                            <img src="{{url('/images/002-good.png')}}">
                                            <h2>नए सुझाव</h2>
                                        </a>
                                    </div>
                                    <div class="gridBx">
                                        <a href="{{url('/feedback')}}">
                                            <img src="{{url('/images/004-feedback.png')}}">
                                            <h2>नई प्रतिक्रिया</h2>
                                        </a>
                                    </div>
                                    <div class="gridBx">
                                        <a href="{{url('/query')}}">
                                            <img src="{{url('/images/004-feedback.png')}}">
                                            <h2>नई क्वेरी </h2>
                                        </a>
                                    </div>
                                    <div class="gridBx">
                                        <a href="{{url('/updateus')}}">
                                            <img src="{{url('/images/004-feedback.png')}}">
                                            <h2>नई अपडेट</h2>
                                        </a>
                                    </div>
                                    <div class="gridBx">
                                        <a href="{{url('/discussion')}}">
                                            <img src="{{url('/images/004-feedback.png')}}">
                                            <h2>चर्चा मंच<h2>
                                        </a>
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
<script>
    window.onload = function () {
        var chartSugges = new CanvasJS.Chart("chartContainerSugges", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:{
                text: ""
            },
            axisY: {
                title: "No. of Suggestions"
            },
            data: [{
                type: "column",
                // showInLegend: true,
                legendMarkerColor: "grey",
                dataPoints: [
                        <?php foreach ($heads as $dep_data){
                        $users = \App\Suggestion::where('head_id',$dep_data->id)->where('user_id',Auth::guard('web')->id())->get();?>
                    {y:<?php echo count($users)?>,label: '<?php echo  $dep_data->name?>'},
                    <?php }?>
                ]
            }]
        });

        var chartUpdate = new CanvasJS.Chart("chartContainerUpdate", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:{
                text: ""
            },
            axisY: {
                title: "No. of Update"
            },
            data: [{
                type: "column",
                // showInLegend: true,
                legendMarkerColor: "grey",
                legendText: "",
                dataPoints: [
                        <?php foreach ($heads as $dep_data){
                        $users = \App\Updateus::where('head_id',$dep_data->id)->where('user_id',Auth::guard('web')->id())->get();?>
                    {y:<?php echo count($users)?>,label: '<?php echo  $dep_data->name?>'},
                    <?php }?>
                ]
            }]
        });
        chartSugges.render();
        chartUpdate.render();

    }
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>