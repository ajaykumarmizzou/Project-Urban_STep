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
    <h3 class="page-title">Query List</h3>
    @can('user_create')
    <p>

        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($results) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                   
                       
                            <th>DateTime</th>
                        <th>Query Id.</th>
                        <th>Category</th>
                        <th>SubCategory</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Query</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($results) > 0)
                        <?php $i = 1;?>
                        @foreach ($results as $user)
                            <?php  $category= \App\Category::where('id',$user->cat_id)->first();
                            if($user->cat_id != config('constants.OTHERS')){
                                $categoryName=$category->name;
                            }else if($user->cat_id==config('constants.OTHERS')){
                                $categoryName=$category->name.'( '.ucfirst($user->others).' )';
                            }
                            if($user->sub_cat_id == config('constants.OTHERS')):
                                $subcategoryName='Others( '.ucfirst($user->others).' )';
                            elseif($user->sub_cat_id):
                                $subcategory= \App\SubCategory::where('id',$user->sub_cat_id)->first();
                                $subcategoryName = $subcategory->name;
                            else:
                                $subcategoryName='';
                            endif;
                            ?>
                            <tr data-entry-id="{{ $user->id }}">
                                <td>{{ date('d-m-Y H:i:s', strtotime($user->created_at)) }}</td>
                                <td>{{ $user->code }}</td>
                                <td field-key='name'>@if($categoryName){{$categoryName }}@endif</td>
                                <td field-key='name'>{{ $subcategoryName }}</td>
                                <td >{{ $user->name }}</td>
                                <td >{{ $user->email }}</td>
                                <td >{{ $user->phone }}</td>

                                <td >{{ $user->query }}</td>

                            </tr>
                            <?php $i++;?>
                        @endforeach
                    @else
                       
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop


