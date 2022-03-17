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
                            <li><a href="{{url('/')}}">Home</a>
                            <li><a href="#">Discussion</a>
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
                                <h2>विचार-विमर्श</h2>
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
                        <div class="col-sm-offset-2 col-sm-8 tab-content">
                            <div class="tab-pane active text-style" id="tab4">
                                <div class="complaint-form">
                                    <form id="complainForm" action="{{url('submit-discuss')}}" method="post" enctype="multipart/form-data" novalidate>
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            {!! Form::label('cat_id','Category') !!}
                                            {!! Form::select('cat_id', $category, old('cat_id'), ['class' => 'form-control', 'required' => '','onChange'=>'subcategory()']) !!}
                                        </div>
                                        <div class="form-group row">
                                            <div id="subcat" style="display: none"  class="col-md-6">
                                                {!! Form::label('topic_id','Ongoing Topic') !!}
                                                {!! Form::select('topic_id',[''=>'Please Select'],null,['class'=>'form-control', 'required' => '','onChange'=>'getDiscuss()']) !!}
                                            </div>
                                            <div id="othertopic" style="display: none"  class="col-md-6">
                                                {!! Form::label('othertopic_id','Other Topic') !!}
                                                {!! Form::select('othertopic_id',[''=>'Please Select'],null,['class'=>'form-control', 'required' => '']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group" id="othercat" style="display: none">
                                            <label>Others</label>
                                            <input type="text" name="others" id="others" value="" placeholder="Others" class="form-control validate[required]">
                                        </div>
                                        <div class="form-group">

                                            <input type="hidden" name="name" id="name" value="{{$results->name}}" placeholder="Name" class="form-control" readonly>
                                        </div>
                                        <div id="alldiscuss"></div>
                                        <div class="form-group">
                                            <label>Discuss</label>
                                            <textarea onblur="checkWordLen(this,'query');" type="text" name="query" id="query" placeholder="Discuss" class="form-control validate[required]" ></textarea>
                                        </div>
                                        <div class="form-group">

                                            <input type="hidden" name="phone" id="phone" value="{{$results->phone_number}}" placeholder="Contact No" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">

                                            <input type="hidden" name="email" id="email" value="{{$results->email}}" placeholder="Email Id" class="form-control" readonly>
                                        </div>

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
        $('#alldiscuss').html('');
        if(valu==1000){
            $('#subcat').hide();
            $('#problm').hide();
            $('#othercat').show();
        }else{
            $('#loading').show();
            $('#subcat').show();
            $('#othertopic').show();
            $('#othercat').hide();
            $.ajax({
                type : 'POST',
                url : '{{url('topic')}}',
                data : {id : valu, _token: '{{csrf_token()}}' },
                success : function(res){
                    $('#loading').hide();
                    $('#topic_id').html(res);
                }
            });
            $.ajax({
                type : 'POST',
                url : '{{url('othertopic')}}',
                data : {id : valu, _token: '{{csrf_token()}}' },
                success : function(res){
                    $('#loading').hide();
                    $('#othertopic_id').html(res);
                }
            });
        }

    }
    function getDiscuss(){
        var valu = $('#cat_id').val();
        var topic = $('#topic_id').val();
        $('#loading').show();

        $.ajax({
            type : 'POST',
            url : '{{url('allDiscuss')}}',
            data : {id : valu, _token: '{{csrf_token()}}',topic:topic },
            success : function(res){
                $('#loading').hide();
                $('#alldiscuss').html(res);
            }
        });
    }
    var wordLen = 30; // Maximum word length
    function checkWordLen(obj,id){
        var len = obj.value.split(/[\s]+/);
        if(len.length > wordLen){
            alert("You cannot put more than "+wordLen+" words in this text area.");
            obj.oldValue = obj.value!=obj.oldValue?obj.value:obj.oldValue;
            obj.value = obj.oldValue?obj.oldValue:"";
            $('#'+id).val('');
            return false;
        }
        return true;
    }

</script>


