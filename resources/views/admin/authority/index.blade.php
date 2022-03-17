@inject('request', 'Illuminate\Http\Request')
@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Authority List</h3>

    <p>
        <a href="{{ route('admin.authority.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table style="width:1200px!important;" class="table table-bordered table-striped {{ count($results) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>SubCategory Name</th>
                        <th>Authority Name</th>
                        <th>Contact Person</th>
                        <th>Email</th>
                        <th style="width:145px!important;">Actions</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($results) > 0)
                        @foreach ($results as $user)
                            <?php $catName = \App\Category::where('id',$user->cat_id)->first();
                            $subcatName = \App\SubCategory::where('id',$user->sub_cat_id)->first();
                            ?>
                            <tr data-entry-id="{{ $user->id }}">
                                <td>{{ $user->code }}</td>
                                <td>{{ $catName->name }}</td>
                                <td>@if($subcatName){{ $subcatName->name }}@endif</td>
                                <td>{{ $user->authority_name }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('admin.authority.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.authority.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}

                                    @if($user->status != 1)
                                        <a href="{{url('admin/authoritys/active/'.$user->id)}}"
                                           onclick="if(! confirm('Click Ok To Active This category')){ return false}"
                                           class="btn btn-xs btn-danger" data-toggle="tooltip" >In-Active</a>
                                    @else
                                        <a href="{{url('admin/authoritys/inactive/'.$user->id)}}"
                                           onclick="if(! confirm('Click Ok To InActivate This category')){ return false}"
                                           class="btn btn-xs btn-success" data-toggle="tooltip" >Active</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        
                    @endif
                </tbody>
            </table>
        </div>


@stop

@section('javascript')
@endsection