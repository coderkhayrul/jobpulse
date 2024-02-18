<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Sep 2023 13:24:01 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Job Pulse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.ico">
    {{-- data table --}}
    <link href="{{ asset('backend/assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" />


    <!-- App Css-->
    <link href="{{ asset('backend') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />


</head>

<body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('backend') }}/assets/images/logo.svg" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('backend') }}/assets/images/logo-dark.png" alt=""
                                    height="17">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('backend') }}/assets/images/logo-light.svg" alt=""
                                    height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('backend') }}/assets/images/logo-light.png" alt=""
                                    height="19">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bx bx-search-alt"></span>
                        </div>
                    </form>

                    <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                        <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                            aria-haspopup="false" aria-expanded="false">
                            <span key="t-megamenu">Mega Menu</span>
                            <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-megamenu">
                            <div class="row">
                                <div class="col-sm-8">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="font-size-14" key="t-ui-components">UI Components</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);" key="t-lightbox">Lightbox</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-range-slider">Range Slider</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-sweet-alert">Sweet Alert</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-rating">Rating</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-forms">Forms</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-tables">Tables</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-charts">Charts</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="font-size-14" key="t-applications">Applications</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);" key="t-ecommerce">Ecommerce</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-calendar">Calendar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-email">Email</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-projects">Projects</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-tasks">Tasks</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-contacts">Contacts</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="font-size-14" key="t-extra-pages">Extra Pages</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);" key="t-light-sidebar">Light
                                                        Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-compact-sidebar">Compact
                                                        Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-horizontal">Horizontal
                                                        layout</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-maintenance">Maintenance</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-coming-soon">Coming Soon</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-timeline">Timeline</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-faqs">FAQs</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5 class="font-size-14" key="t-ui-components">UI Components</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);" key="t-lightbox">Lightbox</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-range-slider">Range
                                                        Slider</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-sweet-alert">Sweet Alert</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-rating">Rating</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-forms">Forms</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-tables">Tables</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" key="t-charts">Charts</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-5">
                                            <div>
                                                <img src="{{ asset('backend') }}/assets/images/megamenu-img.png"
                                                    alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>





                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="bx bx-bell bx-tada"></i>
                            <span class="badge bg-danger rounded-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small" key="t-view-all"> View All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="javascript: void(0);" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="bx bx-cart"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1" key="t-your-order">Your order is placed</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-grammer">If several languages coalesce the
                                                    grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                        key="t-min-ago">3 min ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript: void(0);" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <img src="{{ asset('backend') }}/assets/images/users/avatar-3.jpg"
                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">James Lemire</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-simplified">It will seem like simplified
                                                    English.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                        key="t-hours-ago">1 hours ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript: void(0);" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="bx bx-badge-check"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1" key="t-shipped">Your item is shipped</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-grammer">If several languages coalesce the
                                                    grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                        key="t-min-ago">3 min ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <img src="{{ asset('backend') }}/assets/images/users/avatar-4.jpg"
                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Salena Layfield</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend
                                                    of mine occidental.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                        key="t-hours-ago">1 hours ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View
                                        More..</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user"
                                src="{{ asset('backend') }}/assets/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i
                                    class="bx bx-user font-size-16 align-middle me-1"></i> <span
                                    key="t-profile">Profile</span></a>
                            <a class="dropdown-item" href="#"><i
                                    class="bx bx-wallet font-size-16 align-middle me-1"></i> <span
                                    key="t-my-wallet">My Wallet</span></a>
                            <a class="dropdown-item d-block" href="#"><span
                                    class="badge bg-success float-end">11</span><i
                                    class="bx bx-wrench font-size-16 align-middle me-1"></i> <span
                                    key="t-settings">Settings</span></a>
                            <a class="dropdown-item" href="#"><i
                                    class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span
                                    key="t-lock-screen">Lock screen</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i
                                    class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                    key="t-logout">Logout</span></a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="bx bx-cog bx-spin"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-dashboards">Dashboards</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.html" key="t-default">Default</a></li>
                                <li><a href="dashboard-saas.html" key="t-saas">Saas</a></li>
                                <li><a href="dashboard-crypto.html" key="t-crypto">Crypto</a></li>
                                <li><a href="dashboard-blog.html" key="t-blog">Blog</a></li>
                                <li><a href="dashboard-job.html"><span
                                            class="badge rounded-pill text-bg-success float-end"
                                            key="t-new">New</span> <span key="t-jobs">Jobs</span></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-categoty"></i>
                                <span key="t-layouts">Category</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('categoryPage') }}" key="t-horizontal">Category List</a></li>


                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-horizontal"><i
                                    class="bx bx-home-circle"></i>
                                <span key="t-dashboards">Company</span></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal.html" key="t-horizontal">Horizontal</a></li>
                                <li><a href="layouts-hori-topbar-light.html" key="t-topbar-light">Topbar
                                        light</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-bitcoin"></i>
                                <span key="t-crypto">Employee</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="crypto-wallet.html" key="t-wallet">Wallet</a></li>
                                <li><a href="crypto-buy-sell.html" key="t-buy">Buy/Sell</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <span class="badge rounded-pill bg-success float-end" key="t-new">New</span>
                                <i class="bx bx-briefcase-alt"></i>
                                <span key="t-jobs">Jobs</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="job-list.html" key="t-job-list">Job List</a></li>
                                <li><a href="job-grid.html" key="t-job-grid">Job Grid</a></li>
                                <li><a href="job-apply.html" key="t-apply-job">Apply Job</a></li>
                                <li><a href="job-details.html" key="t-job-details">Job Details</a></li>
                                <li><a href="job-categories.html" key="t-Jobs-categories">Jobs Categories</a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" key="t-candidate">Candidate</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="candidate-list.html" key="t-list">List</a></li>
                                        <li><a href="candidate-overview.html" key="t-overview">Overview</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-receipt"></i>
                                <span key="t-invoices">Pages</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="invoices-list.html" key="t-invoice-list">Home</a></li>
                                <li><a href="invoices-detail.html" key="t-invoice-detail">About</a></li>
                                <li><a href="invoices-detail.html" key="t-invoice-detail">About</a></li>
                                <li><a href="invoices-detail.html" key="t-invoice-detail">About</a></li>
                                <li><a href="invoices-detail.html" key="t-invoice-detail">About</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-detail"></i>
                                <span key="t-blog">Blog</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="blog-list.html" key="t-blog-list">Blog List</a></li>
                                <li><a href="blog-grid.html" key="t-blog-grid">Blog Grid</a></li>
                                <li><a href="blog-details.html" key="t-blog-details">Blog Details</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span key="t-projects">Plugines</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="projects-grid.html" key="t-p-grid">Projects Grid</a></li>
                                <li><a href="projects-list.html" key="t-p-list">Projects List</a></li>

                            </ul>
                        </li>


                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bxs-user-detail"></i>
                                <span key="t-contacts">Contacts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="contacts-grid.html" key="t-user-grid">Users Grid</a></li>
                                <li><a href="contacts-list.html" key="t-user-list">Users List</a></li>
                                <li><a href="contacts-profile.html" key="t-profile">Profile</a></li>
                            </ul>
                        </li>



                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            @yield('content')
                        </div>
                    </div>
                    <!-- end page title -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © jobpulse.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="{{ asset('backend') }}/assets/images/layouts/layout-1.jpg" class="img-thumbnail"
                        alt="layout images">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ asset('backend') }}/assets/images/layouts/layout-2.jpg" class="img-thumbnail"
                        alt="layout images">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ asset('backend') }}/assets/images/layouts/layout-3.jpg" class="img-thumbnail"
                        alt="layout images">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ asset('backend') }}/assets/images/layouts/layout-4.jpg" class="img-thumbnail"
                        alt="layout images">
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                    <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                </div>


            </div>

        </div>
    </div>



    <div class="rightbar-overlay"></div>


    {{-- <script src="{{ asset('backend') }}/assets/libs/jquery/jquery-3.7.1.min.js"></script> --}}
    <script src="{{ asset('backend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('backend/assets/js/dataTables.min.js') }}"></script>
    <script src="{{ asset('backend') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/app.js"></script>

</body>

</html>
