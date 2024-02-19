<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" key="t-menu">Menu</li>

        <li class="">
            <a href="#" class="waves-effect" aria-expanded="false">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboard">Dashboard</span>
            </a>
        </li>


        <li class="">
            <a href="{{ route('job-types.index') }}" class="waves-effect" aria-expanded="false">
                <i class="bx bx-home-circle"></i>
                <span key="t-job-type">Job Type</span>
            </a>
        </li>


        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="true">
                <i class="bx bx-user"></i>
                <span key="t-user-managment">User Managment</span>
            </a>
            <ul class="sub-menu mm-collapse" aria-expanded="false" style="">
                <li><a href="" key="t-admin">Admin</a></li>
                <li><a href="" key="t-trainer">Trainers</a></li>
                <li><a href="" key="t-users">Users</a></li>
            </ul>
        </li>
    </ul>
</div>
