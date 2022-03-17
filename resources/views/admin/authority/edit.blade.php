@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Edit Authority</h3>

    {!! Form::model($subcategory, ['method' => 'PUT', 'route' => ['admin.authority.update', $subcategory->id],'enctype'=>'multipart/form-data']) !!}

    {!! Form::open(['method' => 'POST', 'route' => ['admin.authority.store']]) !!}

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
                    {!! Form::label('sub_cat_id', 'SubCategory', ['class' => 'col-md-2  control-label']) !!}
                    <div class="col-md-7">
                        <select id="sub_cat_id" name="sub_cat_id" class="form-control " >
                            <option value="">Select Subcategory</option>
                            @foreach($subcategorys as $subcateg)
                                <option value="{{$subcateg->id}}" <?php if($subcateg->id == $subcategory->sub_cat_id){echo 'selected';}?>>{{$subcateg->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Authority Name</label>
                    <div class="col-md-7">
                        <input type="text" name="authority_name" id="subcategoryname" value="{{$subcategory->authority_name}}" class="form-control" placeholder="Enter Authority Name" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Contact Person</label>
                    <div class="col-md-7">
                        <input type="text" name="name" id="subcategoryname" value="{{$subcategory->name}}" class="form-control" placeholder="Enter Contact Person" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">Email</label>
                    <div class="col-md-7">
                        <input type="text" name="email" id="subcategoryname" value="{{$subcategory->email}}" class="form-control" placeholder="Enter Email" required>
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
            url : '{{url('admin/problems/subcategory')}}',
            data : {id : valu, _token: '{{csrf_token()}}' },
            success : function(res){
                $('#sub_cat_id').html(res);
            }
        });
    });
</script>
@endsection
