@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Ongoing Project Edit</h3>
    
    {!! Form::model($result, ['method' => 'PUT', 'route' => ['admin.ongoingproject.update', $result->id],'enctype'=>'multipart/form-data']) !!}

    {!! Form::open(['method' => 'POST', 'route' => ['admin.ongoingproject.store'],'enctype'=>'multipart/form-data']) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            edit
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('location', 'Area', ['class' => 'col-md-2  control-label']) !!}
                    <div class="col-md-7">
                        {!! Form::select('location', $areas, old('location'), ['class' => 'form-control', 'required' => '']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Project Name</label>
                    <div class="col-md-7">
                        <input type="text" name="name" id="name" value="{{$result->name}}" class="form-control" placeholder="Enter Project title" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Upload  image</label>
                    <div class="col-sm-5">
                        <label class="btn btn-primary" for="inputImage" title="Upload image file">
                            <input type="file" id="userfile" name="userfile" accept="image/*">
                            <input type="hidden" id="userfile" name="userfileold" accept="image/*" value="{{$result->image}}">
                        </label>
                        <img src="{{ url('public/uploads/project/'.$result->image) }}" style="width:50px;">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Description</label>
                    <div class="col-md-7">
                        <textarea type="text" name="description" id="description" value="" class="form-control" placeholder="Enter Description" required>{{$result->description}}</textarea>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop



