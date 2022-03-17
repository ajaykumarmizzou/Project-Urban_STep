@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Banner List</h3>
    
    {!! Form::model($banner, ['method' => 'PUT', 'route' => ['admin.banner.update', $banner->id],'enctype'=>'multipart/form-data']) !!}

    {!! Form::open(['method' => 'POST', 'route' => ['admin.banner.store'],'enctype'=>'multipart/form-data']) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            edit
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Banner Name</label>
                    <div class="col-md-7">
                        <input type="text" name="name" id="bannername" value="{{$banner->name}}" class="form-control" placeholder="Enter title" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Upload  image</label>
                    <div class="col-sm-5">
                        <label class="btn btn-primary" for="inputImage" title="Upload image file">
                            <input type="file" id="userfile" name="categoryimage" accept="image/*">
                            <input type="hidden" id="userfile" name="categoryimageold" accept="image/*" value="{{$banner->image}}">
                        </label>
                        <img src="{{ url('public/uploads/banner/'.$banner->image) }}" style="width:50px;">
                    </div>
                </div>
            </div>


        </div>
    </div>
    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop



