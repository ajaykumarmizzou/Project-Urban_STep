@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Edit Governance</h3>
    
    {!! Form::model($result, ['method' => 'PUT', 'route' => ['admin.governance.update', $result->id],'enctype'=>'multipart/form-data']) !!}

    {!! Form::open(['method' => 'POST', 'route' => ['admin.governance.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>

        <div class="panel-body">

            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Name</label>
                    <div class="col-md-7">
                        <input type="text" name="name" id="name" value="{{$result->name}}" class="form-control" placeholder="Enter Name" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Designation</label>
                    <div class="col-md-7">
                        <input type="text" name="designation" id="designation" value="{{$result->designation}}" class="form-control" placeholder="Enter Designation" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Upload  image</label>
                    <div class="col-sm-5">
                        <label class="btn btn-primary" for="inputImage" title="Upload image file" >
                            <input type="file" id="userfile" name="userfile" accept="image/*" >
                            <input type="hidden" id="userfile" name="userimageold" accept="image/*" value="{{$result->image}}">
                        </label>
                        <img src="{{ url('public/uploads/governance/'.$result->image) }}" style="width:50px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Name2</label>
                    <div class="col-md-7">
                        <input type="text" name="name1" id="name" value="{{$result->name1}}" class="form-control" placeholder="Enter Name" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Designation2</label>
                    <div class="col-md-7">
                        <input type="text" name="designation1" id="designation" value="{{$result->designation1}}" class="form-control" placeholder="Enter Designation" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Upload  image2</label>
                    <div class="col-sm-5">
                        <label class="btn btn-primary" for="inputImage" title="Upload image file" >
                            <input type="file" id="userfile" name="userfile1" accept="image/*" >
                            <input type="hidden" id="userfile" name="userimageold1" accept="image/*" value="{{$result->image1}}">
                        </label>
                        <img src="{{ url('public/uploads/governance/'.$result->image1) }}" style="width:50px;">
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Name3</label>
                    <div class="col-md-7">
                        <input type="text" name="name2" id="name" value="{{$result->name2}}" class="form-control" placeholder="Enter Name" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Designation3</label>
                    <div class="col-md-7">
                        <input type="text" name="designation2" id="designation" value="{{$result->designation2}}" class="form-control" placeholder="Enter Designation" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Upload  image3</label>
                    <div class="col-sm-5">
                        <label class="btn btn-primary" for="inputImage" title="Upload image file" >
                            <input type="file" id="userfile" name="userfile2" accept="image/*" >
                            <input type="hidden" id="userfile" name="userimageold2" accept="image/*" value="{{$result->image2}}">
                        </label>
                        <img src="{{ url('public/uploads/governance/'.$result->image2) }}" style="width:50px;">
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Description</label>
                    <div class="col-md-7">
                        <textarea type="text" name="description" id="editor" class="form-control" placeholder="Enter Description" required>{{$result->description}}</textarea>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(function () {
        CKEDITOR.replace('editor');
        $(".textarea").wysihtml5();
    });

</script>


