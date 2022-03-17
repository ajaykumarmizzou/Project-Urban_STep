@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title"> Governance</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.governance.store'],'enctype'=>'multipart/form-data']) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>


                <div class="panel-body">




                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 form-group">--}}
                            {{--{!! Form::label('cat_id', 'Menu', ['class' => 'col-md-2  control-label']) !!}--}}
                            {{--<div class="col-md-7">--}}
                            {{--{!! Form::select('cat_id', $category, old('cat_id'), ['class' => 'form-control', 'required' => '']) !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-7">
                                <input type="text" name="name" id="name" value="" class="form-control" placeholder="Enter Name" required>
                                <?php //echo form_error('name'); ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="col-md-2 control-label">Designation</label>
                            <div class="col-md-7">
                                <input type="text" name="designation" id="designation" value="" class="form-control" placeholder="Enter Designation" required>
                                <?php //echo form_error('name'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="col-md-2 control-label">Upload  image</label>
                            <div class="col-sm-5">
                                <label class="btn btn-primary" for="inputImage" title="Upload image file" >
                                    <input type="file" id="userfile" name="userfile" accept="image/*" required>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="col-md-2 control-label">Name2</label>
                            <div class="col-md-7">
                                <input type="text" name="name1" id="name" value="" class="form-control" placeholder="Enter Name" required>
                                <?php //echo form_error('name'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="col-md-2 control-label">Designation2</label>
                            <div class="col-md-7">
                                <input type="text" name="designation1" id="designation" value="" class="form-control" placeholder="Enter Designation" required>
                                <?php //echo form_error('name'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="col-md-2 control-label">Upload  image2</label>
                            <div class="col-sm-5">
                                <label class="btn btn-primary" for="inputImage" title="Upload image file" >
                                    <input type="file" id="userfile1" name="userfile1" accept="image/*">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="col-md-2 control-label">Description</label>
                            <div class="col-md-7">
                                <textarea type="text" name="description" id="editor" value="" class="form-control" placeholder="Enter Description" required></textarea>
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