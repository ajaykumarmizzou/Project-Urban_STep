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
    <section class="dt-breadcrumbs">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul>
                            <li><a href="#">Home</a>
                            <li><a href="#">Query</a>
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
                                <h2>Query</h2>
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
                                    <form id="complainForm" action="{{url('submit-query')}}" method="post" enctype="multipart/form-data" novalidate>
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            {!! Form::label('cat_id','Category') !!}
                                            {!! Form::select('cat_id', $category, old('cat_id'), ['class' => 'form-control', 'required' => '','onChange'=>'subcategory()']) !!}
                                        </div>
                                        <div class="form-group"  id="subcat" style="display: none">
                                            {!! Form::label('sub_cat_id','SubCategory') !!}
                                            {!! Form::select('sub_cat_id',[''=>'Please Select'],null,['class'=>'form-control', 'required' => '']) !!}
                                        </div>
                                        <div class="form-group" id="othercat" style="display: none">
                                            <label>Others</label>
                                            <input type="text" name="others" id="others" value="" placeholder="Please Mention your subcategory" class="form-control validate[required]">
                                        </div>
                                        <div class="form-group">

                                            <input type="hidden" name="name" id="name" value="{{$results->name}}" placeholder="Name" class="form-control" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label>Query</label>
                                            <textarea onkeyup="checkWordLen(this,'query');" type="text" name="query" id="query" placeholder="Please enter 30 words" class="form-control validate[required]" ></textarea>
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
            </section>

        </div>
    </section>

@stop
<script type="text/javascript">
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
                url : '{{url('subcategory')}}',
                data : {id : valu, _token: '{{csrf_token()}}' },
                success : function(res){
                    $('#loading').hide();
                    $('#sub_cat_id').html(res);
                }
            });
        }

    }
    var wordLen = 30; // Maximum word length
    function checkWordLen(obj){
        var len = obj.value.split(/[\s]+/);
        if(len.length > wordLen){
            alert("You cannot put more than "+wordLen+" words in this text area.");
            obj.oldValue = obj.value!=obj.oldValue?obj.value:obj.oldValue;
            obj.value = obj.oldValue?obj.oldValue:"";
            //$('#suggestion').val('');
            return false;
        }
        return true;
    }
  
</script>


