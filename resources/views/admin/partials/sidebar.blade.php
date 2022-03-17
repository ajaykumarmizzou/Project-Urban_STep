
@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'dashboard' ? 'active' : '' }}">
                <a href="{{ url('/admin/dashboard') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>


            <?php if(Auth::guard('admins')->id()==1){?>
            <li>
            <li>
                <a href="{{ route('admin.category.index') }}">
                    <i class="fa fa-chain-broken"></i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.subcategory.index') }}">
                    <i class="fa fa-chain-broken"></i>
                    <span>SubCategory</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.problem.index') }}">
                    <i class="fa fa-chain-broken"></i>
                    <span>Problems</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.topic.index') }}">
                    <i class="fa fa-chain-broken"></i>
                    <span>Topic</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.updateuscategory.index') }}">
                    <i class="fa fa-chain-broken"></i>
                    <span>UpdateUsCategory</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.updateussubcategory.index') }}">
                    <i class="fa fa-chain-broken"></i>
                    <span>UpdateUsSubCategory</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.updateusmaster.index') }}">
                    <i class="fa fa-chain-broken"></i>
                    <span>UpdateUsMaster</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.authority.index') }}">
                    <i class="fa fa-chain-broken"></i>
                    <span>Authority</span>
                </a>
            </li>
             <li>
                <a href="{{ route('admin.authority.authorityuser') }}">
                    <i class="fa fa-chain-broken"></i>
                    <span>Authority Users</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.location.index') }}">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Zone</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.area.index') }}">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Ward</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.colony.index') }}">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Colony</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.map.index') }}">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Map KmlFile</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.governance.index') }}">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Governance</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.ongoingproject.index') }}">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Ongoing Project</span>
                </a>
            </li>
            <?php }?>
            <li>
                <a href="{{ url('admin/complain') }}">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Grievance</span>
                </a>
            </li>
           
            <li>
                <a href="{{ url('admin/suggestion') }}">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Suggestion</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/updateus') }}">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Updateus</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/query') }}">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Query</span>
                </a>
            </li>
            <?php if(Auth::guard('admins')->id()==1){?>
             <li>
                <a href="{{ url('admin/feedback') }}">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Feedback</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/discuss') }}">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Discussion</span>
                </a>
            </li>
            
            <li>
                <a href="{{ url('admin/users') }}">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Users</span>
                </a>
            </li>
			<li>
                <a href="{{ route('admin.head.index') }}">
                    <i class="fa fa-chain-broken"></i>
                    <span>Head</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.subhead.index') }}">
                    <i class="fa fa-chain-broken"></i>
                    <span>SubHead</span>
                </a>
            </li>

            {{--<li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">--}}
                {{--<a href="{{ route('auth.change_password') }}">--}}
                    {{--<i class="fa fa-key"></i>--}}
                    {{--<span class="title">@lang('quickadmin.qa_change_password')</span>--}}
                {{--</a>--}}
            {{--</li>--}}
<?php }?>
            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
            
            
        </ul>
    </section>
</aside>

