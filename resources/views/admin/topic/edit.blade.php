@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Edit Topic</h3>
    
    {!! Form::model($subcategory, ['method' => 'PUT', 'route' => ['admin.topic.update', $subcategory->id],'enctype'=>'multipart/form-data']) !!}

    {!! Form::open(['method' => 'POST', 'route' => ['admin.topic.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>

        <div class="panel-body">



            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cat_id', 'Category', ['class' => 'col-md-2  control-label']) !!}
                    <div class="col-md-7">
                    {!! Form::select('cat_id', $category, old('cat_id'), ['class' => 'form-control', 'required' => '']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Topic Type</label>
                    <div class="col-md-7">
                        <select  name="type" id="type" value="" class="form-control"  required>
                            <option value="">Select</option>
                            <option value="1" @if($subcategory->type==1) selected @endif>Ongoing</option>
                            <option value="2" @if($subcategory->type==2) selected @endif>Other</option>
                        </select>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Topic</label>
                    <div class="col-md-7">
                        <input type="text" name="name" id="subcategoryname" value="{{$subcategory->name}}" class="form-control" placeholder="Enter title" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>


   

        </div>
    </div>
    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop



