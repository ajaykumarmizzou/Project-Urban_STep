@extends('layouts.app')

@section('content')
    <style>
        .alert-success, .alert-danger{
            width: 46%;
            text-align: center;
            margin-left: 345px;
        }
        ul {
            list-style-type: none;
        }
    </style>
    
    <style type="text/css">
            /*map css **/
           
            #map{position: relative;right: 2px; bottom: 2px;border: 1px solid #cccccc;padding: 120px 10px 150px 10px; }
            #menu {position: absolute;left: 2px; top: 46px;width: 306px;bottom: 2px;border: 1px solid #cccccc;background-color: #FAFAFA;overflow-x:hidden;overflow-y: auto;}
           
        </style>
    <section class="dt-breadcrumbs">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul>
                            <li><a href="{{url('/')}}">होम</a>
                            <li><a href="#">शिकायत</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec2">
        <div class="container-fluid">
            <section class="sec-complaint">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-offset-1 col-sm-10 text-center">
                                <h2>शिकायत</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sec-tabs-form">
                {{--@if (\Session::has('success'))--}}
                    {{--<div class="alert alert-success">--}}
                        {{--<ul>--}}
                            {{--<li>{!! \Session::get('success') !!}</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--@endif--}}

                @if (\Session::has('error'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('error') !!}</li>
                        </ul>
                    </div>
                @endif
                <div class="container-fluid">
                    <div class="container">
                        <div class="col-sm-offset-3 col-sm-6 tab-content">
                            <div class="tab-pane active text-style" id="tab4">
                                <div class="complaint-form">
                                <form id="complainForm" action="{{url('submit-complain')}}" method="post" enctype="multipart/form-data" novalidate>
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        {!! Form::label('zone_id','Zone') !!}
                                        {!! Form::select('zone_id', $zones, old('zone_id'), ['class' => 'form-control validate[required]', 'required' => '','onChange'=>'ward()']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('ward_id','Ward') !!}
                                        {!! Form::select('ward_id', [''=>'Please Select'],null, ['class' => 'form-control validate[required]', 'required' => '','onChange'=>'wardcheck(this.value)']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('cat_id','Category') !!}

                                        <select class="form-control validate[required]" id="cat_id" name="cat_id" onchange="subcategory()" required>
                                            <option value="">श्रेणी का चयन करें</option>
                                            @if($resultss)
                                                @foreach($resultss as $result)
                                                    <option value="{{$result->id}}">{{$result->name}}</option>
                                                @endforeach;
                                            @endif;
                                        </select>
                                    </div>
                                    <div class="form-group" id="subcat" style="display: none">
                                        {!! Form::label('sub_cat_id','SubCategory') !!}
                                        {!! Form::select('sub_cat_id',[''=>'Please Select'],null,['class'=>'form-control validate[required]', 'required' => '','onChange'=>'problem()']) !!}
                                    </div>
                                    <div class="form-group" id="problm" style="display: none">
                                        {!! Form::label('problem_id','Problem') !!}
                                        {!! Form::select('problem_id',[''=>'Please Select'],null,['class'=>'form-control validate[required]', 'required' => '','onChange'=>'problemOthershow()']) !!}
                                    </div>
                                    <div class="form-group" id="othercat" style="display: none">
                                        <label>समस्या</label>
                                        <input type="text" name="others" id="others" value="" placeholder="Problems" class="form-control validate[required]">
                                    </div>
                                    <div class="form-group">

                                        <input type="hidden" name="name" id="name" value="{{$results->name}}" placeholder="Name" class="form-control" readonly>
                                    </div>
                                      <div class="form-group">
                                        <input type="hidden" name="lat" id="lat"  >
                                        <input type="hidden" name="lon" id="lon" >
                                        <input type="hidden" name="radius" id="radius" >
                                        <div style="margin-top: 20px;padding: 10px 10px 5px 17px;font-size: 13px;" id="result">loading..</div>
                                        <div id="map"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>फोटो संलग्न करें 1</label>
                                        <input type="file" name="myfile" id="myfile" value="" placeholder="Email Id" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>फोटो संलग्न करें 2</label>
                                        <input type="file" name="myfile1" id="myfile" value="" placeholder="Email Id" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>फोटो संलग्न करें 3</label>
                                        <input type="file" name="myfile2" id="myfile" value="" placeholder="Email Id" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>पता</label>
                                        <textarea  type="text" name="address" id="address" placeholder="Address" class="form-control validate[required]" ></textarea>
                                    </div>
                                    
                                    <div class="form-group">

                                        <input type="hidden" name="phone" id="phone" value="{{$results->phone_number}}" placeholder="Contact No" class="form-control" readonly>
                                    </div>
                                    <div class="form-group">

                                        <input type="hidden" name="email" id="email" value="{{$results->email}}" placeholder="Email Id" class="form-control" readonly>
                                    </div>

                                    {{--<div class="form-group">--}}
                                        {{--<label>शिकायत</label>--}}
                                        {{--<select class="form-control" name="complain_type" id="complain_type validate[required]">--}}
                                            {{--<option>जल भराव </option>--}}
                                            {{--<option>अवरुद्ध नाला</option>--}}
                                          
                                            {{--<option>नई नाली की जरूरत है</option>--}}
                                            {{--<option>कुच्चा नाले का उन्नयन पक्की नाली तक</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>विवरण</label>--}}
                                        {{--<textarea class="form-control" placeholder="Description" id="description" name="description"></textarea>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>तश्वीरें अपलोड करो</label>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-4">--}}
                                                {{--<div class="upload-btn-wrapper">--}}
                                                    {{--<button class="btn-file">--}}
                                                        {{--Upload Image--}}
                                                        {{--<i class="fa fa-camera" aria-hidden="true"></i></button>--}}
                                                    {{--<input type="file" name="myfile" />--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-4">--}}
                                                {{--<div class="upload-btn-wrapper">--}}
                                                    {{--<button class="btn-file">--}}
                                                        {{--Attach Photo 2--}}
                                                        {{--<i class="fa fa-camera" aria-hidden="true"></i></button>--}}
                                                    {{--<input type="file" name="myfile1" />--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-4">--}}
                                                {{--<div class="upload-btn-wrapper">--}}
                                                    {{--<button class="btn-file">--}}
                                                        {{--Attach Photo 3--}}
                                                        {{--<i class="fa fa-camera" aria-hidden="true"></i></button>--}}
                                                    {{--<input type="file" name="myfile2" />--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>कोई पिछला शिकायत दस्तावेज</label>--}}
                                        {{--<label>कोई पिछला शिकायत दस्तावेज</label>--}}
                                        {{--<textarea class="form-control" placeholder="Any Previous Complaint Document" name="previous_complain" id="previous_complain"></textarea>--}}
                                    {{--</div>--}}
                                    
                                  
                                    <div class="form-group">
                                        <input type="submit" name="" class="btn btnD2">
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
        </div>
    </section>

@stop
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    function ward(){
        $('#loading').show();
        var valu = $('#zone_id').val();
        $.ajax({
            type : 'POST',
            url : '{{url('ward')}}',
            data : {id : valu, _token: '{{csrf_token()}}' },
            success : function(res){
                $('#loading').hide();
                $('#ward_id').html(res);
            }
        });
    }

    function subcategory(){
        var valu = $('#cat_id').val();
        if(valu==1000){
            $('#loading').hide();
            $('#subcat').hide();
            $('#problm').hide();
            $('#othercat').show();
        }else{
            $('#loading').show();
            $('#subcat').show();
            $('#othercat').hide();
            $.ajax({
                type : 'POST',
                url : '{{url('subcategory')}}',
                data : {id : valu, _token: '{{csrf_token()}}' },
                success : function(res){
                    $('#loading').hide();
                    $('#sub_cat_id').html(res);
                }
            });
        }

    }

    function problem(){
        var valu = $('#sub_cat_id').val();
        if(valu==1000){
            $('#problm').hide();
            $('#othercat').show();
        }else {
            $('#loading').show();
            $('#problm').show();
            $('#othercat').hide();
            $.ajax({
                type: 'POST',
                url: '{{url('problem')}}',
                data: {id: valu, _token: '{{csrf_token()}}'},
                success: function (res) {
                    $('#loading').hide();
                    $('#problem_id').html(res);
                }
            });
        }
    }
    
    function problemOthershow(){
        var valu = $("#problem_id option:selected").text();
        if(valu=='Other (write in not more than 15 words)'){
           
            $('#othercat').show();
        }else {
            
            $('#othercat').hide();
           
        }
    }




</script>
<script src="https://apis.mapmyindia.com/advancedmaps/v1/5klgounjtvu8ih2zfu2fefl63tr9qkl7/map_load?v=1.2"></script>
<script>
function wardcheck(valu){
        if(valu==166){
            var lat = 28.5398;
            var lon = 77.2490;
            var radius = 500;
            $('#lat').val(lat);
            $('#lon').val(lon);
            $('#radius').val(radius);
            mapfunction(lat,lon,radius);
        }else if(valu==160){
            var lat = 28.627887;
            var lon = 77.136468;
            var radius = 500;
            $('#lat').val(lat);
            $('#lon').val(lon);
            $('#radius').val(radius);
            mapfunction(lat,lon,radius);
        }else{
            var lat = 28.5353;
            var lon = 77.2509;
            var radius = 500;
            mapfunction(lat,lon,radius);
        }
    }
             var marker;
            var currentDiameter;
             window.onload = function () {
                  mapfunction(28.627887,77.136468,5);
             }
            function mapfunction(lat,lon,radius) {
                // document.getElementById('lat').value = lat;
                // document.getElementById('lon').value = lon;
                // document.getElementById('radius').value = radius;
                if (lat != '' && lon != '' && radius != '') {
                    if (checkValidLatlong(parseFloat(lat), parseFloat(lon))) {
                        var centre = new L.LatLng(lat, lon);
                        map = new MapmyIndia.Map('map', {center: centre, zoomControl: true, hybrid: true});
                        /*1.create a MapmyIndia Map by simply calling new MapmyIndia.Map() and passsing it at the minimum div object, all others are optional...
                         2.all leaflet mapping functions can be called simply on the L object
                         3.MapmyIndia may extend and in future modify the customised/forked Leaflet object to enhance mapping functionality for developers, which will be clearly documented in the MapmyIndia API documentation section.*/
                        var icon = L.icon({iconUrl: 'images/Marker.png', iconRetinaUrl: 'images/Marker.png', iconSize: [30, 30]});
                        marker = L.marker(centre, {icon: icon, draggable: true}).addTo(map);
                        marker.on('dragend', function (event) {
                            var position = event.target.getLatLng();
                            document.getElementById('lat').value = position.lat;/***set div elements values***/
                            document.getElementById('lon').value = position.lng;
                            showCircle();
                        });
                        showCircle();
                    }
                }
                else {
                    document.getElementById('result').innerHTML = "Please enter lat/lon/radius";
                }
            };

            function showCircle() {
                document.getElementById('result').innerHTML = "";
                if (currentDiameter)
                    map.removeLayer(currentDiameter);

                lat = document.getElementById('lat').value;
                lon = document.getElementById('lon').value;
                radius = document.getElementById('radius').value;
                if (lat != '' && lon != '' && radius != '') {
                    if (checkValidLatlong(parseFloat(lat), parseFloat(lon))) {
                        if (marker)
                            marker.setLatLng([lat, lon]);
                        currentDiameter = L.circle([lat, lon], { 
                            color: 'pink',
                            fillColor: '#FFC0CB',
                            fillOpacity: 0.5,
                            radius: radius
                        });
                        currentDiameter.addTo(map);
                        map.fitBounds(currentDiameter.getBounds());
                    }
                }
                else {
                    document.getElementById('result').innerHTML = "Insufficient parameters";
                }
            }


            function isNumberKeyDecimals(evt) {
                /*check for input boxes*/
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode != 46 && (charCode < 48 || charCode > 57)))
                    return false;
                return true;
            }

            function checkValidLatlong(lat, lon) {
                /*check for input as valid lat lon*/
                if (lat >= 180 || lat <= -180 || lon >= 180 || lon <= -180) {
                    document.getElementById('result').innerHTML = "Invalid Lat lon values";
                    return false;
                } else {
                    return true;
                }
            }


        </script>
