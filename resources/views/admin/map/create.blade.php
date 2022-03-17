@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title"> Map Kml File</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.map.store'],'enctype'=>'multipart/form-data']) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>


                <div class="panel-body">




                    <div class="row">
                        <div class="col-xs-12 form-group">
                            {!! Form::label('ward_id', 'Ward', ['class' => 'col-md-2  control-label']) !!}
                            <div class="col-md-7">
                            {!! Form::select('ward_id', $category, old('ward_id'), ['class' => 'form-control', 'required' => '']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="col-md-2 control-label">Kml Name</label>
                            <div class="col-md-7">
                                <input type="text" name="kml_name" id="kml_name" value="" class="form-control" placeholder="Enter title" required>
                                <?php //echo form_error('name'); ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="col-md-2 control-label">Icon</label>
                            <div class="col-md-7">
                                <input type="file" name="userfile" id="userfile" value="" class="form-control" placeholder="Enter title" required>
                                <?php //echo form_error('name'); ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="col-md-2 control-label">Kml Text</label>
                            <div class="col-md-7">
                                <textarea type="text" name="kml_text" id="editor" value="" class="form-control" placeholder="Enter title" required></textarea>
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