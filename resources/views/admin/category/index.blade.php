@inject('request', 'Illuminate\Http\Request')
@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Category List</h3>

    <p>
        <a href="{{ route('admin.category.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($category) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        <th>S.NO.</th>
                        <th>ID</th>
                        
                        <th>Category</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($category) > 0)
                        <?php $i=1;?>
                        @foreach ($category as $user)
                            <tr data-entry-id="{{ $user->id }}">

                                <td>{{ $i }}</td>
                                
                                <td>{{ $user->code }}</td>
                               <?php /* ?><td>
                                    <?php if($user->type_id==1){
                                            echo 'Grievance';
                                        }else if($user->type_id==2){
                                            echo 'Suggestions';
                                        }else if($user->type_id==3){
                                            echo 'Discuss';
                                        }else if($user->type_id==4){
                                            echo 'Feedback';
                                        }else if($user->type_id==5){
                                            echo 'Query';
                                        }else if($user->type_id==6){
                                            echo 'Update Us';
                                        }?>
                                </td><?php */?>
                                <td field-key='categoryname'>{{ $user->name }}</td>
                                {{--<td field-key='userfile'><img src="{{ url('public/uploads/category/'.$user->image) }}" style="width:50px;height: 35px;"></td>--}}
                                <td>
                                    <a href="{{ route('admin.category.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.category.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @if($user->status != 1)
                                        <a href="{{url('admin/categorys/active/'.$user->id)}}"
                                           onclick="if(! confirm('Click Ok To Active This category')){ return false}"
                                           class="btn btn-xs btn-danger" data-toggle="tooltip" >In-Active</a>
                                    @else
                                        <a href="{{url('admin/categorys/inactive/'.$user->id)}}"
                                           onclick="if(! confirm('Click Ok To InActivate This category')){ return false}"
                                           class="btn btn-xs btn-success" data-toggle="tooltip" >Active</a>
                                    @endif

                                </td>
                            </tr>
                            <?php $i++;?>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
@endsection