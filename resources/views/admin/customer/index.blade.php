@inject('request', 'Illuminate\Http\Request')
@extends('admin.layouts.app')

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif

    @if (\Session::has('error'))
        <div class="alert alert-danger">
            <ul>
                <li>{!! \Session::get('error') !!}</li>
            </ul>
        </div>
    @endif
    <h3 class="page-title">Customers List</h3>
    @can('user_create')
    <p>

        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($customer) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('user_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone number</th>

                         <th>Location</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($customer) > 0)
                        <?php $i = 1;?>
                        @foreach ($customer as $user)
                            <tr data-entry-id="{{ $user->id }}">
                                <td></td>
                                <td>{{ $i }}</td>
                                <td >{{ $user->name }}</td>
                                <td >{{ $user->email }}</td>
                                <td >{{ $user->phone_number }}</td>

                                <td >{{ $user->location }}</td>

                                <td>



                                    @if($user->status != 1)
                                        <a href="{{url('admin/customers/active/'.$user->id)}}"
                                           onclick="if(! confirm('Click Ok To Active This category')){ return false}"
                                           class="btn btn-xs btn-danger" data-toggle="tooltip" >In-Active</a>
                                    @else
                                        <a href="{{url('admin/customers/inactive/'.$user->id)}}"
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
    </div>
@stop


