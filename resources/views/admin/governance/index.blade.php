@inject('request', 'Illuminate\Http\Request')
@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Governance List</h3>

    <p>
        <a href="{{ route('admin.governance.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table style="width:1200px !important;" class="table table-bordered table-striped {{ count($results) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Decription</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($results) > 0)
                        <?php $i=1;?>
                        @foreach ($results as $user)
                            <tr data-entry-id="{{ $user->id }}">
                                <td>{{ $user->code }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->designation }}</td>
                                <td><?php echo $user->description;?></td>
                                <td>
                                    <a href="{{ route('admin.governance.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.governance.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}

                                    @if($user->status != 1)
                                        <a href="{{url('admin/governances/active/'.$user->id)}}"
                                           onclick="if(! confirm('Click Ok To Active This category')){ return false}"
                                           class="btn btn-xs btn-danger" data-toggle="tooltip" >In-Active</a>
                                    @else
                                        <a href="{{url('admin/governances/inactive/'.$user->id)}}"
                                           onclick="if(! confirm('Click Ok To InActivate This category')){ return false}"
                                           class="btn btn-xs btn-success" data-toggle="tooltip" >Active</a>
                                    @endif
                                </td>
                            </tr>
                            <?php $i++;?>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>


@stop

@section('javascript')
@endsection