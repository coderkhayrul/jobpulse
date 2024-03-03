<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" key="t-menu">Menu</li>

        <li class="">
            <a href="" class="waves-effect" aria-expanded="false">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboard">Dashboard</span>
            </a>
        </li>
        <li class="">
            <a href="" class="waves-effect" aria-expanded="false">
                <i class="bx bx-briefcase-alt"></i>
                <span key="t-Jobs">Jobs</span>
            </a>
        </li>

        {{-- <li>
            <a href="javascript: void(0);" class="waves-effect has-arrow"">
                <i class="bx bx-briefcase-alt"></i>
                <span key="t-jobs">Jobs</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="job-list.html" key="t-job-list">Job List</a></li>
                <li><a href="job-grid.html" key="t-job-grid">Job Grid</a></li>
                <li><a href="job-apply.html" key="t-apply-job">Apply Job</a></li>
                <li><a href="job-details.html" key="t-job-details">Job Details</a></li>
                <li><a href="{{ route('admin.categories.index') }}" key="t-Jobs-categories"> <i
                            class="bx bx-purchase-tag-alt"></i>Jobs Categories</a></li>
            </ul>
        </li> --}}

        <li class="">
            <a href="{{ route('admin.job-types.index') }}" class="waves-effect" aria-expanded="false">
                <i class="bx bx-briefcase-alt"></i>
                <span key="t-job-type">Job Type</span>
            </a>
        </li>

        {{-- <li class="">
            <a href="{{ route('admin.categories.index') }}" class="waves-effect" aria-expanded="false">
                <i class="bx bx-purchase-tag-alt"></i>
                <span key="t-categories">Categories</span>
            </a>
        </li> --}}

        <li class="">
            <a href="{{ route('admin.blogs.index') }}" class="waves-effect" aria-expanded="false">
                <i class="bx bx-detail"></i>
                <span key="t-blogs">Blogs</span>
            </a>
        </li>


        <li>
            <a href="{{ route('admin.position.index') }}" class="waves-effect" aria-expanded="false">
                <i class="bx bx-map"></i>
                <span key="t-positions">Positions</span>
            </a>
        </li>
        <li>
            <a href="#" class="waves-effect has-arrow" aria-expanded="false">
                <i class="bx bx-user"></i>
                <span key="t-users">Users</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('admin.user.index') }}" key="t-user">All User</a></li>
                <li><a href="{{ route('admin.user.index') }}?role=2" key="t-company">Company</a></li>
                <li><a href="{{ route('admin.user.index') }}?role=3" key="t-candidate">Candidate</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('admin.skill.index') }}" class="waves-effect" aria-expanded="false">
                <i class="bx bxs-brightness"></i>
                <span key="t-skills">Skills</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.pages.index') }}" class="waves-effect" aria-expanded="false">
                <i class="bx bxs-badge-check"></i>
                <span key="t-pages">Pages</span>
            </a>
        </li>
        {{-- <li>
            <a href="{{ route('admin.education.index') }}" class="waves-effect" aria-expanded="false">
                <i class="bx bxs-institution"></i>
                <span key="t-educations">Educations</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.experience.index') }}" class="waves-effect" aria-expanded="false">
                <i class="bx bx-calendar"></i>
                <span key="t-experiences">Experiences</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.award.index') }}" class="waves-effect" aria-expanded="false">
                <i class="bx bxs-badge-check"></i>
                <span key="t-awards">Awards</span>
            </a>
        </li> --}}
    </ul>
</div>
