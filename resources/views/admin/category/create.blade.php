@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Category</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.category.store'],'enctype'=>'multipart/form-data']) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>

        <div class="panel-body">
            <!--<div class="row">-->
            <!--    <div class="col-xs-12 form-group">-->
            <!--        <label class="col-md-2 control-label"> Type</label>-->
            <!--        <div class="col-md-7">-->
            <!--            <select id="type_id" name="type_id" class="form-control" required>-->
            <!--                <option value="">Select</option>-->
            <!--                <option value="1">Grievance</option>-->
            <!--                <option value="2">Suggestions</option>-->
            <!--                <option value="3">Discuss</option>-->
            <!--                <option value="4">Feedback</option>-->
            <!--                <option value="5">Query</option>-->
            <!--                <option value="6">Update Us</option>-->
            <!--            </select>-->
                        <?php //echo form_error('name'); ?>
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label"> Category Name</label>
                    <div class="col-md-7">
                        <input type="text" name="name" id="categoryname" value="" class="form-control" placeholder="Enter title" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>

            {{--<div class="row">--}}
                {{--<div class="col-xs-12 form-group">--}}
                    {{--<label class="col-md-2 control-label">Upload  image</label>--}}
                    {{--<div class="col-sm-5">--}}
                        {{--<label class="btn btn-primary" for="inputImage" title="Upload image file">--}}
                            {{--<input type="file" id="userfile" name="categoryimage" accept="image/*" required>--}}
                        {{--</label>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

