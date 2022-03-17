@inject('request', 'Illuminate\Http\Request')
@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Zone List</h3>

    <p>
        <a href="{{ route('admin.location.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right">Zone Import</a>
    </p>
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($area) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        <th>Zone Number</th>
                        <th>Zone</th>
                        <th>Image</th>
                        <th>Url</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($area) > 0)
                        @foreach ($area as $user)
                            <tr data-entry-id="{{ $user->id }}">

                                <td field-key='cityname'>{{ $user->zone_number }}</td>
                                <td field-key='areaname'>{{ $user->city }}</td>
                                    <?php if($user->image){?>
                                    <td field-key='userfile'><img src="{{ url('public/uploads/location/'.$user->image) }}" style="width:50px;height: 35px;"></td>
                                    <?php }else{?>
                                <td></td>
                                <?php }?>
                                    <td field-key='areaname'>{{ $user->map_url }}</td>
<td>
                                    <a href="{{ route('admin.location.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>

{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.location.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}

                                                @if($user->status != 1)
                                                    <a href="{{url('admin/locations/active/'.$user->id)}}"
                                                       onclick="if(! confirm('Click Ok To Active This category')){ return false}"
                                                       class="btn btn-xs btn-danger" data-toggle="tooltip" >In-Active</a>
                                                @else
                                                    <a href="{{url('admin/locations/inactive/'.$user->id)}}"
                                                       onclick="if(! confirm('Click Ok To InActivate This category')){ return false}"
                                                       class="btn btn-xs btn-success" data-toggle="tooltip" >Active</a>
                                                @endif

                                </td>

                            </tr>
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
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="width:500px;">

                <div class="modal-header">
                    <h4 class="modal-title">Import Zone</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <span id="errorCu" style="color: red;margin-left: 180px; font-size:16px;"></span>
                            <div class="col-lg-12">
                                <div class="box-body" id="formBody">

                                    <form method="post" enctype="multipart/form-data" action="{{url('admin/locations/import-zone')}}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="baseurl" id="baseurl" value="">

                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">File</label>

                                            <div class="col-sm-6">
                                                <input type="file" value="" name="importfile" id="importfile" class=="form-control" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-default" id="importHoliday" value="Submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
@stop

@section('javascript')
@endsection