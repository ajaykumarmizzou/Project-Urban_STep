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
                            <li><a href="#">Feedback</a>
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
                                <h2>प्रतिक्रिया</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

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
                                <form id="feedbackForm" action="{{url('submit-feedback')}}" method="post" enctype="multipart/form-data" novalidate>
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select  name="category" id="category"  class="form-control validate[required]" onchange="categorys()">
                                            <option value="">श्रेणी का चयन करें</option>
                                            <option value="1">परियोजनाओं पर प्रतिक्रिया</option>
                                            <option value="2">प्राधिकरण पर प्रतिक्रिया</option>
                                            <option value="3">पोर्टल पर प्रतिक्रिया</option>
                                        </select>
                                    </div>
                                    <div id="proj" style="display: none;">
                                        <div class="form-group">
                                            {!! Form::label('project_id','Projects') !!}
                                            {!! Form::select('project_id', $project, old('project_id'), ['class' => 'form-control  validate[required]']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label>Feedback</label>
                                            <textarea onblur="checkWordLen(this,'feedback');" type="text" name="feedback" id="feedback"  placeholder="Feedback" class="form-control  validate[required]"></textarea>
                                        </div>
                                    </div>
                                    <div id="autho" style="display: none;">
                                        <div class="form-group" >
                                            {!! Form::label('authority_id','Authority') !!}
                                            {!! Form::select('authority_id', $authority, old('authority_ids'), ['class' => 'form-control  validate[required]', 'required' => '']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label>Rating</label>
                                            <select name="rating" id="rating" class="form-control  validate[required]">
                                                <option value="">रेटिंग</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Reason</label>
                                            <textarea onblur="checkWordLen(this,'feedback1');" type="text" name="feedback1" id="feedback1"  placeholder="Reason" class="form-control  validate[required]"></textarea>
                                        </div>
                                    </div>

                                    <div id="portal" style="display: none;">
                                        <div class="form-group">
                                            <label>Rating</label>
                                            <select name="rating1" id="rating1" class="form-control  validate[required]">
                                                <option value="">Rating</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Reason</label>
                                            <textarea onblur="checkWordLen(this,'feedback2');" type="text" name="feedback2" id="feedback2"  placeholder="Reason" class="form-control  validate[required]"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" name="name" id="name" value="{{$results->name}}" placeholder="Name" class="form-control" readonly>
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
            </div>
        </section>
    </div>
</section>

@stop

<script>
    function categorys(){
        if($('#category').val()==1){
            $('#proj').css('display','block');
            $('#autho').css('display','none');
            $('#portal').css('display','none');
        }else if($('#category').val()==2){
            $('#proj').css('display','none');
            $('#autho').css('display','block');
            $('#portal').css('display','none');
        }else if($('#category').val()==3){
            $('#proj').css('display','none');
            $('#autho').css('display','none');
            $('#portal').css('display','block');
        }else{
            $('#proj').css('display','none');
            $('#autho').css('display','none');
            $('#portal').css('display','none');
        }
    }
</script>
<script type="text/javascript">
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
