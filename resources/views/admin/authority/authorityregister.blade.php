@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Authority User</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.authority.authorityuser-save'],'enctype'=>'multipart/form-data']) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>


                <div class="panel-body">




                    <div class="row">
                        <div class="col-xs-12 form-group">
                            {!! Form::label('authority_id', 'Authority Name', ['class' => 'col-md-2  control-label']) !!}
                            <div class="col-md-7">
                            {!! Form::select('authority_id', $category, old('authority_id'), ['class' => 'form-control', 'required' => true]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-7">
                                <input type="text" name="username" id="username" value="" class="form-control" placeholder="Enter Name" required>
                                <?php //echo form_error('name'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="col-md-2 control-label">Email</label>
                            <div class="col-md-7">
                                <input type="text" name="email" id="subcategoryname" value="" class="form-control" placeholder="Enter Email" required>
                                <?php //echo form_error('name'); ?>
                            </div>
                        </div>
                    </div>
                    
                     <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="col-md-2 control-label">Password</label>
                            <div class="col-md-7">
                                <input type="password" name="password" id="password" value="" class="form-control" placeholder="Enter Password" required>
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