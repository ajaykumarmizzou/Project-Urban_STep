@inject('request', 'Illuminate\Http\Request')
@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Authority List</h3>

    <p>
        <a href="{{ route('admin.authority.authorityuser-create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($results) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        <th>ID</th>
                       
                        <th>Authority Name</th>
                        <th>Contact Person</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th style="width:145px!important;">Actions</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($results) > 0)
                        @foreach ($results as $user)
                            <?php 
                            $authrity = '';
                            if($user->role_id==1){
                                $authrity = 'SuperAdmin';
                            }else{
                                $authName = \App\Authority::where('id',$user->authority_id)->first();
                                if($authName){
                                    $authrity = $authName->name;
                                }
                            }?>
                            <tr data-entry-id="{{ $user->id }}">
                                <td>{{ $user->id }}</td>
                                <td>{{ $authrity }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td field-key='role'>{{ $user->passkey }}</td>
                                <td>
                                    <!--<a href="{{ route('admin.authority.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>-->
                                @if($user->id != 1)
                
                                    @if($user->status != 'Active')
                                        <a href="{{url('admin/authoritys/authorityactive/'.$user->id)}}"
                                           onclick="if(! confirm('Click Ok To Active This user')){ return false}"
                                           class="btn btn-xs btn-danger" data-toggle="tooltip" >In-Active</a>
                                    @else
                                        <a href="{{url('admin/authoritys/authorityinactive/'.$user->id)}}"
                                           onclick="if(! confirm('Click Ok To InActivate This user')){ return false}"
                                           class="btn btn-xs btn-success" data-toggle="tooltip" >Active</a>
                                    @endif
                                @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>


@stop

@section('javascript')
@endsection