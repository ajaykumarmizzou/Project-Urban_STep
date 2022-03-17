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
    <h3 class="page-title">Order List</h3>
    @can('user_create')
    <p>

        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($order) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('user_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>S.No.</th>
                        <th>Order code</th>
                        <th name="customers" id="customers">Customer Name</th>
                        <th>Purchase Method</th>

                         <th name="price" id="price">Total Amount</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($order) > 0)
                        <?php $i = 1;?>
                        @foreach ($order as $user)
                            <?php
                            $customerid = \App\Customer::where('id',$user->customer_id)->first() ;
                            $productid = \App\Product::where('id',$user->product_id)->first() ;
                            ?>
                            <tr data-entry-id="{{ $user->id }}">
                                <td></td>
                                <td>{{ $i }}</td>
                                <td >{{ $user->code }}</td>
                                <td field-key='customers'>{{ $customerid->name }}</td>
                                <td >{{ $user->purchase_method }}</td>

                                <td field-key='price'>{{ $productid->normal_price }}</td>

                                <td>



                                    @if($user->status != 1)
                                        <a href="{{url('admin/orders/active/'.$user->id)}}"
                                           onclick="if(! confirm('Click Ok To Active This category')){ return false}"
                                           class="btn btn-xs btn-danger" data-toggle="tooltip" >In-Active</a>
                                    @else
                                        <a href="{{url('admin/orders/inactive/'.$user->id)}}"
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


