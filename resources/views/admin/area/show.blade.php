@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Index</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>CategoryName</th>
                            <td field-key='categoryname'>{{ $category->categoryname }}</td>
                        </tr>
                        <tr>
                            <th>Images</th>
                            <td field-key='userfile'><img src="{{ url('uploads/category/'.$category->image) }}" style="width:50px;"</td>
                        </tr>

                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.category.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


