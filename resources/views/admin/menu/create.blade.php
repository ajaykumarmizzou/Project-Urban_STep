@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Menu</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.menu.store'],'enctype'=>'multipart/form-data']) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label"> Menu Name</label>
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

