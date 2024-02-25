@include('frontend.includes.header')

<body>

    @include('frontend.includes.navigation')

    @yield('frontend_content')

    <!-- Feature info section -->
    <section class="feature-info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="feature-info feature-info-02 p-4 p-lg-5 bg-primary">
                        <div class="feature-info-icon mb-3 mb-sm-0 text-dark">
                            <i class="flaticon-team"></i>
                        </div>
                        <div class="feature-info-content text-white ps-sm-4 ps-0">
                            <p>Jobseeker</p>
                            <h5 class="text-white">Looking For Job?</h5>
                        </div>
                        <a class="ms-auto align-self-center" href="#">Apply now<i
                                class="fas fa-long-arrow-alt-right"></i> </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-info feature-info-02 p-4 p-lg-5 bg-dark">
                        <div class="feature-info-icon mb-3 mb-sm-0 text-primary">
                            <i class="flaticon-job-3"></i>
                        </div>
                        <div class="feature-info-content text-white ps-sm-4 ps-0">
                            <p>Recruiter</p>
                            <h5 class="text-white">Are You Recruiting?</h5>
                        </div>
                        <a class="ms-auto align-self-center" href="#">Post a job<i
                                class="fas fa-long-arrow-alt-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature info section -->

    <!-- Footer -->
    <footer class="footer bg-light">
        <div class="position-relative">
            <svg class="footer-shape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                width="100%" height="85px">
                <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                    d="M-0.000,-0.001 L1923.000,-0.001 L1923.000,84.999 C1608.914,41.669 1279.532,19.653 962.500,19.000 C635.773,18.326 323.692,40.344 -0.000,84.999 C-0.000,-83.334 -0.000,168.332 -0.000,-0.001 Z" />
            </svg>
        </div>
        <div class="container pt-5">
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-link">
                        <h5 class="text-dark mb-4">Trending Job</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Browse Jobs</a></li>
                            <li><a href="#">Browse Categories</a></li>
                            <li><a href="#">Submit Resume</a></li>
                            <li><a href="#">Candidate Dashboard</a></li>
                            <li><a href="#">Job Alerts</a></li>
                            <li><a href="#">My Bookmarks</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                    <div class="footer-link">
                        <h5 class="text-dark mb-4">Trending Companies</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Shortcodes</a></li>
                            <li><a href="#">Job Page</a></li>
                            <li><a href="#">Job Page Alternative</a></li>
                            <li><a href="#">Resume Page</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <h5 class="text-dark mb-4">Subscribe Us</h5>
                    <div class="footer-subscribe">
                        <p>Sign Up to our Newsletter to get the latest news and offers.</p>
                        <form>
                            <div class="form-group mb-3">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn btn-primary btn-md">Get Notified</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <h5 class="text-dark mb-4">Download App</h5>
                    <div class="footer-subscribe">
                        <p>Download the latest Slick new job apps now</p>
                        <div class="d-inline-block">
                            <a class="btn btn-white btn-sm btn-app " href="#">
                                <i class="fab fa-apple"></i>
                                <div class="btn-text text-start">
                                    <small class="fw-normal">Download on the </small>
                                    <span class="mb-0 d-block">App Store</span>
                                </div>
                            </a>
                            <a class="btn btn-white btn-sm btn-app mt-3" href="#">
                                <i class="fab fa-google-play"></i>
                                <div class="btn-text text-start">
                                    <small class="fw-normal">Get it on </small>
                                    <span class="mb-0 d-block">Google Play</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-dark mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="d-flex justify-content-md-start justify-content-center">
                            <ul class="list-unstyled d-flex mb-0">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-end mt-4 mt-md-0">
                        <p class="mb-0"> &copy;Copyright <span id="copyright">
                                <script>
                                    document.getElementById('copyright').appendChild(document.createTextNode(new Date()
                                        .getFullYear()))
                                </script>
                            </span> <a href="#"> Jobber </a> All Rights Reserved </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer-->

    <!-- Back To Top-->
    <div id="back-to-top" class="back-to-top">
        <i class="fas fa-angle-up"></i>
    </div>
    <!-- Back To Top-->

    <!-- Signin Modal Popup -->
    @include('frontend.signinModal')
    <!-- Signin Modal Popup -->

    @include('frontend.includes.footer')
