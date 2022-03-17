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
                            <li><a href="{{url('/')}}">Home</a>
                            <li><a href="#">Update Us</a>
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
                                <h2>Update Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sec-tabs-form">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif

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
                                    <form id="complainForm" action="{{url('submit-update')}}" method="post" enctype="multipart/form-data" novalidate>
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
                                            {!! Form::select('cat_id', $category, old('cat_id'), ['class' => 'form-control', 'required' => '','onChange'=>'subcategory()']) !!}
                                        </div>
                                        <div class="form-group"  id="subcat" style="display: none">
                                            {!! Form::label('sub_cat_id','SubCategory') !!}
                                            {!! Form::select('sub_cat_id',[''=>'Please Select'],null,['class'=>'form-control', 'required' => '','onChange'=>'problem()']) !!}
                                        </div>
                                        <div class="form-group" id="problm" style="display: none">
                                            {!! Form::label('updateus_id','Update Us') !!}
                                            {!! Form::select('updateus_id',[''=>'Please Select'],null,['class'=>'form-control validate[required]', 'required' => '','onChange'=>'showForm()']) !!}
                                        </div>
                                       
                                        <div class="row" id="addition_fl" style="display: none">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Existing Floors</label>
                                                    <input type="text" name="existing_floors" id="existing_floors" value="" placeholder="Existing Floors" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>New Added Floors</label>
                                                    <input type="text" name="new_floors_added" id="new_floors_added" value="" placeholder="New Added Floors" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="new_deve" style="display: none">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>From Stilts</label>
                                                    <input type="text" name="from_stilts" id="from_stilts" value="" placeholder="From Stilts" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>From Basement</label>
                                                    <input type="text" name="from_basement" id="from_basement" value="" placeholder="From Basement" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Total No. Of Floors</label>
                                                    <input type="text" name="total_no_of_floors" id="total_no_of_floors" value="" placeholder="Total No. Of Floors" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row" id="main_road" style="display: none">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Yes</label>
                                                    <input type="radio" name="maintenance_of_roads" id="maintenance_of_roads" value="Yes" placeholder="Existing Floors" >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>No</label>
                                                    <input type="radio" name="maintenance_of_roads" id="maintenance_of_roads" value="No" placeholder="New Added Floors">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row" id="plan_park" style="display: none">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Yes</label>
                                                    <input type="radio" name="planned_parking" id="planned_parking" value="Yes" placeholder="Existing Floors" >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>No</label>
                                                    <input type="radio" name="planned_parking" id="planned_parking" value="No" placeholder="New Added Floors">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="plan_load" style="display: none">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Yes</label>
                                                    <input type="radio" name="planned_loading" id="planned_loading" value="Yes" placeholder="Existing Floors" >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>No</label>
                                                    <input type="radio" name="planned_loading" id="planned_loading" value="No" placeholder="New Added Floors">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row" id="generar" style="display: none">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Name of the industry</label>
                                                    <input type="text" name="name_of_industry" id="name_of_industry" value="" placeholder="Name of the industry" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" name="address_gen" id="address_gen" value="" placeholder="Address" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">

                                            <input type="hidden" name="name" id="name" value="{{$results->name}}" placeholder="Name" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Attach Photo</label>
                                            <input type="file" name="myfile" id="myfile" value="" placeholder="Email Id" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <input type="hidden" name="lat" id="lat"  value="28.5398">
                                        <input type="hidden" name="lon" id="lon" value="77.2490">
                                        <input type="hidden" name="radius" id="radius" value="5">
                                        <div style="margin-top: 20px;padding: 10px 10px 5px 17px;font-size: 13px;" id="result">loading..</div>
                                        <div id="map"></div>
                                    </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea type="text" name="address" id="address" placeholder="Address" class="form-control validate[required]" ></textarea>
                                        </div>
                                        <div class="form-group">

                                            <input type="hidden" name="phone" id="phone" value="{{$results->phone_number}}" placeholder="Contact No" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">

                                            <input type="hidden" name="email" id="email" value="{{$results->email}}" placeholder="Email Id" class="form-control" readonly>
                                        </div>

                                        {{--<div class="form-group">--}}
                                        {{--<label>Complaint</label>--}}
                                        {{--<select class="form-control" name="complain_type" id="complain_type validate[required]">--}}
                                        {{--<option>Water logging</option>--}}
                                        {{--<option>Blocked drain</option>--}}
                                        {{--<option>Water logging</option>--}}
                                        {{--<option>Need of new drain</option>--}}
                                        {{--<option>Upgradation of Kuchha drain to Pucca drain</option>--}}
                                        {{--</select>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group">--}}
                                        {{--<label>Description</label>--}}
                                        {{--<textarea class="form-control" placeholder="Description" id="description" name="description"></textarea>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group">--}}
                                        {{--<label>Upload Images</label>--}}
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
                                        {{--Upload Image--}}
                                        {{--<i class="fa fa-camera" aria-hidden="true"></i></button>--}}
                                        {{--<input type="file" name="myfile1" />--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-sm-4">--}}
                                        {{--<div class="upload-btn-wrapper">--}}
                                        {{--<button class="btn-file">--}}
                                        {{--Upload Image--}}
                                        {{--<i class="fa fa-camera" aria-hidden="true"></i></button>--}}
                                        {{--<input type="file" name="myfile2" />--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group">--}}
                                        {{--<label>Any Previous Complaint Document</label>--}}
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
            $('#subcat').hide();
            $('#problm').hide();
            $('#othercat').show();
        }else{
            $('#loading').show();
            $('#subcat').show();
            $('#othercat').hide();
            $.ajax({
                type : 'POST',
                url : '{{url('updateussubcategory')}}',
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
                url: '{{url('updateusm')}}',
                data: {id: valu, _token: '{{csrf_token()}}'},
                success: function (res) {
                    $('#loading').hide();
                    $('#updateus_id').html(res);
                }
            });
        }
    }
    
    

    function showForm(){
        var valu = $('#updateus_id').val();
        var id = valu.split('@@');
        if(id[1]==1){
            $('#addition_fl').show();
            $('#new_deve').hide();
            $('#main_road').hide();
            $('#plan_park').hide();
            $('#plan_load').hide();
            $('#generar').hide();
        }else if(id[1]==2){
            $('#new_deve').show();
            $('#addition_fl').hide();
            $('#main_road').hide();
            $('#plan_park').hide();
            $('#plan_load').hide();
            $('#generar').hide();
        }else if(id[1]==3){
            $('#main_road').show();
            $('#new_deve').hide();
            $('#addition_fl').hide();
            $('#plan_park').hide();
            $('#plan_load').hide();
            $('#generar').hide();
        }else if(id[1]==4){
            $('#main_road').hide();
            $('#new_deve').hide();
            $('#addition_fl').hide();
            $('#plan_park').show();
            $('#plan_load').hide();
            $('#generar').hide();
        }else if(id[1]==5){
            $('#plan_park').hide();
            $('#main_road').hide();
            $('#new_deve').hide();
            $('#addition_fl').hide();
            $('#plan_load').show();
            $('#generar').hide();
        }else if(id[1]==6){
            $('#plan_park').hide();
            $('#main_road').hide();
            $('#new_deve').hide();
            $('#addition_fl').hide();
             $('#plan_load').hide();
            $('#generar').show();
        }else{
            $('#main_road').hide();
             $('#new_deve').hide();
            $('#addition_fl').hide();
             $('#plan_load').hide();
              $('#plan_park').hide();
               $('#generar').hide();
        }
    }
 
</script>
<script src="https://apis.mapmyindia.com/advancedmaps/v1/5klgounjtvu8ih2zfu2fefl63tr9qkl7/map_load?v=1.2"></script>
<script>

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

                var lat = document.getElementById('lat').value;
                var lon = document.getElementById('lon').value;
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
        }
    }
        </script>