@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Edit Menu</h3>
    
    {!! Form::model($category, ['method' => 'PUT', 'route' => ['admin.updateuscategory.update', $category->id],'enctype'=>'multipart/form-data']) !!}

    {!! Form::open(['method' => 'POST', 'route' => ['admin.updateuscategory.store'],'enctype'=>'multipart/form-data']) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label"> Update Category Name</label>
                    <div class="col-md-7">
                        <input type="text" name="name" id="categoryname" value="{{$category->name}}" class="form-control" placeholder="Enter title" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>

            {{--<div class="row">--}}
                {{--<div class="col-xs-12 form-group">--}}
                    {{--<label class="col-md-2 control-label">Upload  image</label>--}}
                    {{--<div class="col-sm-5">--}}
                        {{--<label class="btn btn-primary" for="inputImage" title="Upload image file">--}}
                            {{--<input type="file" id="userfile" name="categoryimage" accept="image/*">--}}
                            {{--<input type="hidden" id="userfile" name="categoryimageold" accept="image/*" value="{{$category->image}}">--}}
                        {{--</label>--}}
                        {{--<img src="{{ url('public/uploads/category/'.$category->image) }}" style="width:50px;">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


        </div>
    </div>
    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop



