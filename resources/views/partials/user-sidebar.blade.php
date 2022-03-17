<div class="dashboard-navigation">
    <a class="close-dashnav" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
    <ul class="dashboard-menu">
        <li>
            <a class="active" href="dashboard.html"><i class="fa fa-table"></i>Have something to say?</a>
        </li>
        <li>
            <a href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-user-circle"></i>My Profile</a>
            <div id="submenu-1" class="collapse submenu" style="">
                <ul class="nav flex-column">
                    <li>
                        <a href="profile.html"><i class="fa fa-eye"></i>View Profile</a>
                    </li>
                    <li>
                        <a href="edit-profile.html"><i class="fa fa-pencil"></i>Edit Profile</a>
                    </li>
                    <li>
                        <a href="reset-passowrd.html"><i class="fa fa-lock"></i>Change Password</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a class="nav-link" href="complain-dashboard.html"><i class="fa fa-file"></i>Past grievances</a>
        </li>
        <li>
            <a class="nav-link" href="suggestion-dashboard.html"><i class="fa fa-file"></i>Past Suggestion</a>
        </li>
        <li>
            <a class="nav-link" href="feedback-dashboard.html"><i class="fa fa-file"></i>Past Feedback</a>
        </li>
        <li>
            <a class="nav-link" href="{{url('/logout')}}"><i class="fa fa-sign-out"></i>Logout</a>
        </li>
    </ul>
</div>