@extends('layouts.app')

@section('content')
    <h3 class="page-title">Edit Product</h3>
    
    {!! Form::model($product, ['method' => 'PUT', 'route' => ['admin.product.update', $product->id],'enctype'=>'multipart/form-data']) !!}

    {!! Form::open(['method' => 'POST', 'route' => ['admin.product.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>

        <div class="panel-body">



            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('area_id', 'Area', ['class' => 'col-md-2  control-label']) !!}
                    <div class="col-md-7">
                        <select id="area_id" name="area_id[]" class="form-control select2" multiple data-placeholder="Select Area">
                            <?php $areass = explode(',', $product->area_id);?>
                            @foreach($area as $are)
                                <option value="{{$are->id}}" <?php foreach($areass as $aress){if($aress == $are->id){echo 'selected';}}?>>{{$are->city}}</option>
                            @endforeach
                        </select>

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
                    {!! Form::label('sub_cat_id', 'SubCategory', ['class' => 'col-md-2  control-label']) !!}
                    <div class="col-md-7">
                        {!! Form::select('sub_cat_id', $subcategory, old('sub_cat_id'), ['class' => 'form-control', 'required' => '']) !!}
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Normal Price</label>
                    <div class="col-md-7">
                        <input type="text" name="normal_price" id="normal_price" value="{{$product->normal_price}}" class="form-control" placeholder="Enter Normal Price" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Urgent Price</label>
                    <div class="col-md-7">
                        <input type="text" name="urgent_price" id="urgent_price" value="{{$product->urgent_price}}" class="form-control" placeholder="Enter Urgent Price" required>
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

