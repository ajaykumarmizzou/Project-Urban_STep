@inject('request', 'Illuminate\Http\Request')
@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Colony List</h3>

    <p>
        <a href="{{ route('admin.colony.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right">Colony Import</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($results) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        <th>S.NO.</th>
                        <th>ID</th>
                        <th>Zone</th>
                        <th>Ward</th>
                        <th>Colony</th>
                        <th>Colony Category</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($results) > 0)
                        <?php $i=1;?>
                        @foreach ($results as $user)
                            <?php $catName = \App\Location::where('id',$user->location_id)->first();
                            $subcatName = \App\Area::where('id',$user->area_id)->first();
                            ?>
                            <tr data-entry-id="{{ $user->id }}">
                                <td>{{ $i }}</td>
                                <td>{{ $user->code }}</td>
                                <td field-key='categoryname'>{{ $catName->city }}</td>
                                <td field-key='subcategoryname'>{{ $subcatName->area }}</td>
                                <td field-key='categoryname'>{{ $user->name }}</td>
                                <td field-key='categoryname'>{{ $user->colony_category }}</td>
                                <td>
                                    <a href="{{ route('admin.colony.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.colony.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}

                                    @if($user->status != 1)
                                        <a href="{{url('admin/colonys/active/'.$user->id)}}"
                                           onclick="if(! confirm('Click Ok To Active This colony')){ return false}"
                                           class="btn btn-xs btn-danger" data-toggle="tooltip" >In-Active</a>
                                    @else
                                        <a href="{{url('admin/colonys/inactive/'.$user->id)}}"
                                           onclick="if(! confirm('Click Ok To InActivate This colony')){ return false}"
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
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="width:500px;">

                <div class="modal-header">
                    <h4 class="modal-title">Import Colony</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <span id="errorCu" style="color: red;margin-left: 180px; font-size:16px;"></span>
                            <div class="col-lg-12">
                                <div class="box-body" id="formBody">

                                    <form method="post" enctype="multipart/form-data" action="{{url('admin/colonys/import-colony')}}">
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