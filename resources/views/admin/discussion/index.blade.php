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
    <h3 class="page-title">Discussion List</h3>
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
                        @can('user_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan
                        <th>DateTime</th>
                        <th>Discuss Id.</th>
                        <th>Category</th>
                        <th>Topic</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Discuss</th>
                        <th>Status</th>
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
                            $topic= \App\Topic::where('id',$user->topic_id)->first();
                            ?>
                            <tr data-entry-id="{{ $user->id }}">
                                <td>{{ date('d-m-Y H:i:s', strtotime($user->created_at)) }}</td>
                                <td>{{ $user->code }}</td>
                                <td field-key='name'>@if($categoryName){{$categoryName }}@endif</td>
                                <td field-key='name'>@if($topic){{$topic->name }}@endif</td>
                                <td >{{ $user->name }}</td>
                                <td >{{ $user->email }}</td>
                                <td >{{ $user->phone }}</td>
                                <td >{{ $user->query }}</td>
                                <td>
                                    <select class="form-control "  name="status"  id="status"  required onchange="changeStatus('<?php echo $user->id?>',this.value)">
                                        <option value="">Select</option>
                                        <option value="1" @if($user->is_status==0)  selected @endif >Pending</option>
                                        <option value="1" @if($user->is_status==1)  selected @endif >Approve</option>
                                        <option value="2" @if($user->is_status==2)  selected @endif >Reject</option>
                                    </select>
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
<script>

    function changeStatus(id,status){
        if(confirm('are you sure you want to change status')){
            $.ajax({
                type: 'post',
                url: "{{url('admin/changeStatusDiscuss')}}",
                data: {
                    'id': id,
                    'status':status,
                    '_token': "{{csrf_token()}}"
                },
                success: function (datas) {

                    alert(datas);
                    location.reload();
                }
            });
        }

    }
</script>

