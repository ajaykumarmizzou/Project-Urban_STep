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
    <h3 class="page-title">Feedback List</h3>
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
                    <th>Category</th>
                    <th>Project Name</th>
                    <th>Authority Name</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Rating</th>
                    <th>Feedback</th>
                    <!--<th style="width: 85px !important;">Status</th>-->

                </tr>
                </thead>

                <tbody>
                @if (count($results) > 0)
                    <?php $i = 1;?>
                    @foreach ($results as $user)
 <?php
                        $users = \App\User::where('id',$user->user_id)->first();
                        $project = \App\OngoingProject::where('id',$user->project_id)->first();
                        $authority = \App\Authority::where('id',$user->authority_id)->first();?>
                        <tr data-entry-id="{{ $user->id }}">
                            <td>{{ date('d-m-Y H:i:s', strtotime($user->created_at)) }}</td>
                            <td>
                                <?php if($user->category==1){
                                    echo 'Project';
                                }elseif($user->category==2){
                                    echo 'Authority';
                                }elseif($user->category==3){
                                    echo 'Portal';
                                }?>
                            </td>
                            <td>@if($project){{ $project->name }}@endif</td>
                            <td>@if($authority){{ $authority->authority_name }}@endif</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->email }}</td>
                            <td>{{ $user->rating }}</td>
                            <td>{{ $user->feedback }}</td>
                            <!--<td>-->
                            <!--    <select class="form-control "  name="status"  id="status"  required onchange="changeStatus('<?php echo $user->id?>',this.value)">-->
                            <!--        <option value="">Select</option>-->
                            <!--        <option value="1" @if($user->is_status==0)  selected @endif >Pending</option>-->
                            <!--        <option value="1" @if($user->is_status==1)  selected @endif >Resolved</option>-->
                            <!--        <option value="2" @if($user->is_status==2)  selected @endif >Cancel</option>-->
                            <!--    </select>-->
                            <!--</td>-->

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
                url: "{{url('admin/changeStatusFeedback')}}",
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
