@extends('layouts.app')

@section('content')
    <h3 class="page-title"> Product</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.product.store'],'enctype'=>'multipart/form-data']) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>


                <div class="panel-body">


                    <div class="row">
                        <div class="col-xs-12 form-group">
                            {!! Form::label('area_id', 'Area', ['class' => 'col-md-2  control-label']) !!}
                            <div class="col-md-7">
                                {!! Form::select('area_id[]', $area, old('area_id'), ['class' => 'form-control select2', 'required' => '', 'multiple','data-placeholder' => 'Select area']) !!}
                            </div>
                        </div>
                    </div>

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
                            <label class="col-md-2 control-label">Sub Category</label>
                            <div class="col-md-7">
                                <select class="form-control" id="sub_cat_id" name="sub_cat_id" required>
                                    <option value="">Please select</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="col-md-2 control-label">Normal Price</label>
                            <div class="col-md-7">
                                <input type="text" name="normal_price" id="normal_price" value="" class="form-control" placeholder="Enter Normal Price" required>
                                <?php //echo form_error('name'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="col-md-2 control-label">Urgent Price</label>
                            <div class="col-md-7">
                                <input type="text" name="urgent_price" id="urgent_price" value="" class="form-control" placeholder="Enter Urgent Price" required>
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
    $('#cat_id').on('change',function (){
        var valu = this.value;
        $.ajax({
            type : 'POST',
            url : '{{url('admin/products/subcategory')}}',
            data : {id : valu, _token: '{{csrf_token()}}' },
            success : function(res){
                $('#sub_cat_id').html(res);
            }
        });
    });
</script>
@endsection