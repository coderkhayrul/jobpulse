<header class="header bg-dark">
    <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
        <div class="container-fluid">
            <button id="nav-icon4" type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target=".navbar-collapse">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand" href="{{ route('web.home') }}">
                <img class="img-fluid" src="{{ asset('frontend') }}/images/logo.svg" alt="logo">
            </a>
            <div class="navbar-collapse collapse justify-content-start">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown active">
                        <a class="nav-link" href="{{ route('web.home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('web.jobs') }}">Jobs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('web.about') }}">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('web.contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="add-listing">
                <div class="login d-inline-block me-4">
                    <a href="{{ route('login') }}"><i class="far fa-user pe-2"></i>Sign in</a>
                </div>
                <a class="btn btn-white btn-md" href="#"> <i class="fas fa-plus-circle"></i>Post a
                    job</a>
            </div>
        </div>
    </nav>
</header>
