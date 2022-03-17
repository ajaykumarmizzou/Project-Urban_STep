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
    <h3 class="page-title">Suggestion List</h3>
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
                    <th>Suggestion Id.</th>
                    <th>Zone</th>
                    <th>Ward</th>
                    <th>Category</th>
                    <th>SubCategory</th>
                    <th>Problems</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Suggestion</th>
                    <!--<th>Status</th>-->

                </tr>
                </thead>

                <tbody>
                @if (count($results) > 0)
                    <?php $i = 1;?>
                    @foreach ($results as $user)
                        <?php
                        $users = \App\User::where('id',$user->user_id)->first();
                        $subHead = \App\SubHead::where('id',$users->subhead_id)->first();
                        $category= \App\Category::where('id',$user->cat_id)->first();
                        $ward = \App\Area::where('id',$user->ward_id)->first();
                        $zone = \App\Location::where('id',$user->zone_id)->first();
                        if($user->cat_id != config('constants.OTHERS')){
                            $categoryName=$category->name;
                        }else if($user->cat_id==config('constants.OTHERS')){
                            $categoryName=$category->name;
                        }

                        if($user->sub_cat_id == config('constants.OTHERS')):
                            $subcategoryName='Others';
                        elseif($user->sub_cat_id):
                            $subcategory= \App\SubCategory::where('id',$user->sub_cat_id)->first();
                            $subcategoryName = $subcategory->name;
                        else:
                            $subcategoryName='';
                        endif;
                        ?>
                        <tr data-entry-id="{{ $user->id }}" <?php if($user->is_status == 0){?>style="background-color:#E9E1E1"<?php }?>>
                            <td>{{ date('d-m-Y H:i:s', strtotime($user->created_at)) }}</td>
                            <td>{{ $user->code  }}</td>
                            <td field-key='name'>@if($zone){{ $zone->city }}@endif</td>
                            <td field-key='name'>@if($ward){{ $ward->area }}@endif</td>
                            <td field-key='name'>{{ $categoryName }}</td>
                            <td field-key='name'>{{ $subcategoryName }}</td>
                            <td field-key='name'>{{ ucfirst($user->others) }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->suggestion }}</td>
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
                url: "{{url('admin/changestatus')}}",
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

