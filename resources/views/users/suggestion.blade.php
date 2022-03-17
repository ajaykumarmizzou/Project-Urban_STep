@extends('layouts.app')
@section('content')
    <section class="dashboard-main">
        <div class="container-fluid">
            <div class="container">
                <div class="dashboard-main-wrapper">
                    <div class="dashboard-navigation">
                        <a class="close-dashnav" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                        <ul class="dashboard-menu">
                            <li>
                                <a href="{{url('/dashboard')}}"><i class="fa fa-table"></i>आपके विचार?</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-user-circle"></i>प्रोफाइल</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                         <li>
                                            <a href="{{url('/view-profile')}}"><i class="fa fa-eye"></i>प्रोफाइल देखिये</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/edit-profile')}}"><i class="fa fa-pencil"></i>संपादित करें प्रोफाइल</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/reset-password')}}"><i class="fa fa-lock"></i>पासवर्ड बदलें</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('/my-complain')}}"><i class="fa fa-file"></i>अतीत  शिकायत </a>
                            </li>
                            <li>
                                <a class="nav-link active" href="{{url('/my-suggestion')}}"><i class="fa fa-file"></i>अतीत  सुझाव</a>
                            </li>
                            <li>
                                <a  class="nav-link" href="{{url('/my-feedback')}}"><i class="fa fa-file"></i>अतीत  प्रतिक्रिया</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('/my-query')}}"><i class="fa fa-file"></i>अतीत क्वेरी </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('/my-update')}}"><i class="fa fa-file"></i>अतीत  अपडेट </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('/my-discussion')}}"><i class="fa fa-file"></i>चर्चा मंच</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('/logout')}}"><i class="fa fa-sign-out"></i>लॉगआउट </a>
                            </li>
                        </ul>
                    </div>
                    <div class="dashboard-wrapper">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header">
                                    <h2 class="pageheader-title">Suggestion</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="feedback-table">
                                    <h4><b>Suggestion</b></h4>
                                    <div class="table-box">
                                        <table id="myTable" class="table table-bordered table-responsive">
                                            <thead>
                                            <tr>
                                                <th>DateTime</th>
                                                <th>Suggestion Id.</th>
                                                <th>Category</th>
                                                <th>SubCategory</th>
                                                <th>Zone</th>
                                                <th>Ward</th>
                                                <th>Suggestion</th>
                                                <!--<th>Status</th>-->

                                            </tr>
                                            </thead>

                                            <tbody>
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
                                                        <td style="min-width: 120px;">{{ $user->code  }}</td>
                                                        <td field-key='name'>{{ $categoryName }}</td>
                                                        <td field-key='name'>{{ $subcategoryName }}</td>
                                                        <td field-key='name' style="min-width: 80px;">@if($zone){{ $zone->city }}@endif</td>
                                                        <td field-key='name' style="min-width: 80px;">@if($ward){{ $ward->area }}@endif</td>
                                                        <td>{{ $user->suggestion }}</td>
                                                        <?php /*?><td style="min-width: 80px;">
                                                            <?php if($user->is_status==0){
                                                                echo 'Pending';
                                                            }else if($user->is_status==1){
                                                                echo 'Resolved';
                                                            }else if($user->is_status==2){
                                                                echo 'Cancel';
                                                            }
                                                            ?>

                                                        </td><?php */?>

                                                    </tr>
                                                    <?php $i++;?>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

