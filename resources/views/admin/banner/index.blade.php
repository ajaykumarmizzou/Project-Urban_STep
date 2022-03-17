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
    <h3 class="page-title">Banner List</h3>
    @can('user_create')
    <p>
        <a href="{{ route('admin.banner.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($banner) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('user_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan
                        <th>S.NO.</th>
                        <th>ID</th>
                        <th>BannerName</th>
                        <th>Images</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($banner) > 0)
                        <?php $i=1;?>
                        @foreach ($banner as $user)
                            <tr data-entry-id="{{ $user->id }}">
                                <td></td>
                                <td>{{ $i }}</td>
                                <td>{{ $user->code }}</td>
                                <td field-key='bannername'>{{ $user->name }}</td>
                                <td field-key='userfile'><img src="{{ url('public/uploads/banner/'.$user->image) }}" style="width:50px;height: 35px;"></td>
                                <td>
                                    <a href="{{ route('admin.banner.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.banner.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}

                                    @if($user->status != 1)
                                        <a href="{{url('admin/banners/active/'.$user->id)}}"
                                           onclick="if(! confirm('Click Ok To Active This category')){ return false}"
                                           class="btn btn-xs btn-danger" data-toggle="tooltip" >In-Active</a>
                                    @else
                                        <a href="{{url('admin/banners/inactive/'.$user->id)}}"
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
    <script>
        @can('user_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.banner.mass_destroy') }}';
        @endcan

    </script>
@endsection