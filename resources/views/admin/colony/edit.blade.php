@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Edit Colony</h3>

    {!! Form::model($subcategory, ['method' => 'PUT', 'route' => ['admin.colony.update', $subcategory->id],'enctype'=>'multipart/form-data']) !!}

    {!! Form::open(['method' => 'POST', 'route' => ['admin.colony.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>

        <div class="panel-body">



            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('location_id', 'Zone', ['class' => 'col-md-2  control-label']) !!}
                    <div class="col-md-7">
                        {!! Form::select('location_id', $category, old('location_id'), ['class' => 'form-control', 'required' => '']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('area_id', 'Ward', ['class' => 'col-md-2  control-label']) !!}
                    <div class="col-md-7">
                        <select id="area_id" name="area_id" class="form-control " >
                            @foreach($subcategorys as $subcateg)
                                <option value="{{$subcateg->id}}" <?php if($subcateg->id == $subcategory->area_id){echo 'selected';}?>>{{$subcateg->area}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Colony Name</label>
                    <div class="col-md-7">
                        <input type="text" name="name" id="subcategoryname" value="{{$subcategory->name}}" class="form-control" placeholder="Enter title" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Colony Category</label>
                    <div class="col-md-7">
                        <input type="text" name="colony_category" id="colony_category" value="{{$subcategory->colony_category}}" class="form-control" placeholder="Enter colony category" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Colony Content</label>
                    <div class="col-md-7">
                        <textarea type="text" name="content" id="editor" class="form-control" placeholder="Enter Colony">{{$subcategory->content}}</textarea>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>


        </div>
    </div>
    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop
@section('javascript')
<script>
    $('#location_id').on('change',function (){
        var valu = this.value;
        $.ajax({
            type : 'POST',
            url : '{{url('admin/colonys/area')}}',
            data : {id : valu, _token: '{{csrf_token()}}' },
            success : function(res){
                $('#area_id').html(res);
            }
        });
    });
</script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(function () {
        CKEDITOR.replace('editor');
        $(".textarea").wysihtml5();
    });

</script>
@endsection
