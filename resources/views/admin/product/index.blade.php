@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">Product List</h3>
    @can('user_create')
    <p>
        <a href="{{ route('admin.product.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($result) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>S.NO.</th>
                        <th>CategoryName</th>
                        <th>Sub CategoryName</th>
                        <th>Normal Price</th>
                        <th>Urgent Price</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($result) > 0)
                        <?php $i=1;?>
                        @foreach ($result as $user)
                            <?php
                            //$areaName = \App\Area::where('id',$user->area_id)->first();
                            $catName = \App\Category::where('id',$user->cat_id)->first();
                            $subcatName = \App\SubCategory::where('id',$user->sub_cat_id)->first();
                            ?>
                            <tr data-entry-id="{{ $user->id }}">
                                <td></td>
                                <td>{{ $i }}</td>
                                <td field-key='subcategoryname'>{{ $catName->name }}</td>
                                <td field-key='categoryname'>{{ $subcatName->name }}</td>
                                <td field-key='normalprice'>{{ $user->normal_price }}</td>
                                <td field-key='urgentprice'>{{ $user->urgent_price }}</td>

                                <td>
                                    <a href="{{ route('admin.product.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.product.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}

                                    @if($user->status != 1)
                                        <a href="{{url('admin/products/active/'.$user->id)}}"
                                           onclick="if(! confirm('Click Ok To Active This category')){ return false}"
                                           class="btn btn-xs btn-danger" data-toggle="tooltip" >In-Active</a>
                                    @else
                                        <a href="{{url('admin/products/inactive/'.$user->id)}}"
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
    {{--<script>--}}

            {{--window.route_mass_crud_entries_destroy = '{{ route('admin.subcategory.mass_destroy') }}';--}}

    {{--</script>--}}
@endsection