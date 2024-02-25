@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- banner -->
    @include('frontend.includes.banner')
    <!-- banner -->

    <!-- Action-box -->
    <section class="bg-primary py-4 py-lg-5 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 mb-4 mb-sm-4 mb-lg-0">
                    <div class="d-sm-flex">
                        <h4 class="text-white">Create free account to find thousands Jobs, Employment &amp; Career
                            Opportunities around you!</h4>
                    </div>
                </div>
                <div class="col-md-3 text-lg-end">
                    <a class="btn btn-dark" href="#">Post Job</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Action-box -->

    <!-- Browse listing -->
    <section class="space-ptb bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title center">
                        <h2 class="title">Browse Listing</h2>
                        <p>Data trends and insights, tips for employers, product updates and best practices</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-12 order-lg-2 mb-3 mb-lg-0">
                    <div class="browse-job d-flex border-0">
                        <div class="style-01">
                            <ul class="nav nav-tabs justify-content-center d-flex mt-0" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link  active" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                        role="tab" aria-controls="profile" aria-selected="false">Recent Jobs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                                        aria-controls="contact" aria-selected="false">Popular Jobs</a>
                                </li>
                            </ul>
                        </div>
                        <div class="job-found ms-auto">
                            <span class="badge badge-lg bg-primary">24123</span>
                            <h6 class="ms-3 mb-0">Job Found</h6>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row mt-4">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="job-list job-grid">
                                        <div class="job-list-logo ">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/10.svg"
                                                alt="">
                                        </div>
                                        <div class="job-list-details">
                                            <div class="job-list-info">
                                                <div class="job-list-title">
                                                    <h6><a href="job-detail.html">Marketing and Communications</a></h6>
                                                </div>
                                                <div class="job-list-option">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <span>via</span>
                                                            <a href="employer-detail.html">Wight Sound Hearing LLC</a>
                                                        </li>
                                                        <li><i class="fas fa-map-marker-alt pe-1"></i>New Castle, PA
                                                        </li>
                                                        <li><i class="fas fa-filter pe-1"></i>Banking</li>
                                                        <li><a class="temporary" href="#"><i
                                                                    class="fas fa-suitcase pe-1"></i>Temporary</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-list-favourite-time">
                                            <a class="job-list-favourite order-2" href="#"><i
                                                    class="far fa-heart"></i></a>
                                            <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2W
                                                ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="job-list job-grid">
                                        <div class="job-list-logo ">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/11.svg"
                                                alt="">
                                        </div>
                                        <div class="job-list-details">
                                            <div class="job-list-info">
                                                <div class="job-list-title">
                                                    <h6><a href="job-detail.html">Group Marketing Manager</a></h6>
                                                </div>
                                                <div class="job-list-option">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <span class="job-list-via">via</span>
                                                            <a class="job-list-company-name" href="#">Bright
                                                                Sparks PLC</a>
                                                        </li>
                                                        <li><i class="fas fa-map-marker-alt pe-1"></i>Botchergate,
                                                            Carlisle</li>
                                                        <li><i class="fas fa-filter pe-1"></i>Customer Service</li>
                                                        <li><a class="part-time" href="#"><i
                                                                    class="fas fa-suitcase pe-1"></i>Part-Time</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-list-favourite-time">
                                            <a class="job-list-favourite order-2" href="#"><i
                                                    class="far fa-heart"></i></a>
                                            <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2W
                                                ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="job-list job-grid">
                                        <div class="job-list-logo ">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/12.svg"
                                                alt="">
                                        </div>
                                        <div class="job-list-details">
                                            <div class="job-list-info">
                                                <div class="job-list-title">
                                                    <h6><a href="job-detail.html">Senior rolling stock technician</a>
                                                    </h6>
                                                </div>
                                                <div class="job-list-option">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <span>via</span>
                                                            <a href="employer-detail.html">Carphone Warehouse</a>
                                                        </li>
                                                        <li><i class="fas fa-map-marker-alt pe-1"></i>Canyon Village,
                                                            Ramon</li>
                                                        <li><i class="fas fa-filter pe-1"></i>IT &amp; Telecoms</li>
                                                        <li><a class="part-time" href="#"><i
                                                                    class="fas fa-suitcase pe-1"></i>Part-Time</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-list-favourite-time">
                                            <a class="job-list-favourite order-2" href="#"><i
                                                    class="far fa-heart"></i></a>
                                            <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2W
                                                ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="job-list job-grid">
                                        <div class="job-list-logo ">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/17.svg"
                                                alt="">
                                        </div>
                                        <div class="job-list-details">
                                            <div class="job-list-info">
                                                <div class="job-list-title">
                                                    <h6><a href="job-detail.html">Operational manager part-time</a>
                                                    </h6>
                                                </div>
                                                <div class="job-list-option">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <span>via</span>
                                                            <a href="employer-detail.html">Bright Sparks PLC</a>
                                                        </li>
                                                        <li><i class="fas fa-map-marker-alt pe-1"></i>Canyon Village,
                                                            Ramon</li>
                                                        <li><i class="fas fa-filter pe-1"></i>Financial Services</li>
                                                        <li><a class="freelance" href="#"><i
                                                                    class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-list-favourite-time">
                                            <a class="job-list-favourite order-2" href="#"><i
                                                    class="far fa-heart"></i></a>
                                            <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2W
                                                ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 justify-content-center d-flex mt-4">
                                <a class="btn btn-white btn-lg" href="#">View More Jobs</a>
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="contact" role="tabpanel"
                            aria-labelledby="contact-tab">
                            <div class="row mt-4">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="job-list job-grid">
                                        <div class="job-list-logo ">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/13.svg"
                                                alt="">
                                        </div>
                                        <div class="job-list-details">
                                            <div class="job-list-info">
                                                <div class="job-list-title">
                                                    <h6><a href="job-detail.html">Communications Trainee Scheme</a>
                                                    </h6>
                                                </div>
                                                <div class="job-list-option">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <span class="job-list-via">via</span>
                                                            <a class="job-list-company-name" href="#">Bright
                                                                Sparks PLC</a>
                                                        </li>
                                                        <li><i class="fas fa-map-marker-alt pe-1"></i>Botchergate,
                                                            Carlisle</li>
                                                        <li><i class="fas fa-filter pe-1"></i>Customer Service</li>
                                                        <li><a class="part-time" href="#"><i
                                                                    class="fas fa-suitcase pe-1"></i>Part-Time</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-list-favourite-time">
                                            <a class="job-list-favourite order-2" href="#"><i
                                                    class="far fa-heart"></i></a>
                                            <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2W
                                                ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="job-list job-grid">
                                        <div class="job-list-logo ">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/14.svg"
                                                alt="">
                                        </div>
                                        <div class="job-list-details">
                                            <div class="job-list-info">
                                                <div class="job-list-title">
                                                    <h6><a href="job-detail.html">Part-Time Sales Assistant</a></h6>
                                                </div>
                                                <div class="job-list-option">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <span>via</span>
                                                            <a href="employer-detail.html">Tan Electrics Ltd</a>
                                                        </li>
                                                        <li><i class="fas fa-map-marker-alt pe-1"></i>Park Avenue,
                                                            Mumbai</li>
                                                        <li><i class="fas fa-filter pe-1"></i>Charity &amp; Voluntary
                                                        </li>
                                                        <li><a class="full-time" href="#"><i
                                                                    class="fas fa-suitcase pe-1"></i>Full-time</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-list-favourite-time">
                                            <a class="job-list-favourite order-2" href="#"><i
                                                    class="far fa-heart"></i></a>
                                            <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2W
                                                ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="job-list job-grid">
                                        <div class="job-list-logo ">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/15.svg"
                                                alt="">
                                        </div>
                                        <div class="job-list-details">
                                            <div class="job-list-info">
                                                <div class="job-list-title">
                                                    <h6><a href="job-detail.html">Customer Service Assistant</a></h6>
                                                </div>
                                                <div class="job-list-option">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <span>via</span>
                                                            <a href="employer-detail.html">Wight Sound Hearing LLC</a>
                                                        </li>
                                                        <li><i class="fas fa-map-marker-alt pe-1"></i>New Castle, PA
                                                        </li>
                                                        <li><i class="fas fa-filter pe-1"></i>Banking</li>
                                                        <li><a class="temporary" href="#"><i
                                                                    class="fas fa-suitcase pe-1"></i>Temporary</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-list-favourite-time">
                                            <a class="job-list-favourite order-2" href="#"><i
                                                    class="far fa-heart"></i></a>
                                            <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2W
                                                ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="job-list job-grid">
                                        <div class="job-list-logo ">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/16.svg"
                                                alt="">
                                        </div>
                                        <div class="job-list-details">
                                            <div class="job-list-info">
                                                <div class="job-list-title">
                                                    <h6><a href="job-detail.html">Data Entry Administrator</a></h6>
                                                </div>
                                                <div class="job-list-option">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <span>via</span>
                                                            <a href="employer-detail.html">Fast Systems Consultants</a>
                                                        </li>
                                                        <li><i class="fas fa-map-marker-alt pe-1"></i>Wellesley Rd,
                                                            London</li>
                                                        <li><i class="fas fa-filter pe-1"></i>Automotive Jobs</li>
                                                        <li><a class="freelance" href="#"><i
                                                                    class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-list-favourite-time">
                                            <a class="job-list-favourite order-2" href="#"><i
                                                    class="far fa-heart"></i></a>
                                            <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2W
                                                ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 justify-content-center d-flex mb-4">
                                <a class="btn btn-white btn-lg" href="#">View More Jobs</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-1">
                    <div class="sidebar mb-0">
                        <div class="widget bg-white p-4">
                            <div class="widget-title widget-collapse">
                                <h5>Specialism</h5>
                            </div>
                            <div class="collapse show" id="specialism">
                                <div class="widget-content">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="specialism1">
                                        <label class="form-check-label" for="specialism1">IT Contractor</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="specialism2">
                                        <label class="form-check-label" for="specialism2">Charity &amp;
                                            Voluntary</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="specialism3">
                                        <label class="form-check-label" for="specialism3">Digital &amp;
                                            Creative</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="specialism4">
                                        <label class="form-check-label" for="specialism4">Estate Agency</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="specialism5">
                                        <label class="form-check-label" for="specialism5">Graduate</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="employers-grid bg-white mt-4 py-4">
                            <div class="widget-title widget-collapse mb-3">
                                <h5>Featured Company</h5>
                            </div>
                            <div class="mb-3">
                                <img class="img-fluid" src="{{ asset('frontend') }}/images/bg/bg-01.jpg" alt="">
                            </div>
                            <div class="employers-list-details">
                                <div class="employers-list-info">
                                    <div class="employers-list-title">
                                        <h5 class="mb-0"><a href="employer-detail.html">Bright Sparks PLC</a></h5>
                                    </div>
                                    <div class="employers-list-option">
                                        <ul class="list-unstyled">
                                            <li><i class="fas fa-map-marker-alt pe-1"></i>Botchergate, Carlisle</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="employers-list-position">
                                <a class="btn btn-sm btn-primary" href="#">Part-Time</a>
                            </div>
                        </div>
                        <div class="owl-carousel owl-nav-bottom-center mt-4" data-nav-arrow="false" data-nav-dots="true"
                            data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1"
                            data-space="15" data-autoheight="true">
                            <div class="item">
                                <div class="employers-grid bg-white py-4">
                                    <div class="employers-list-logo pt-0">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/09.svg"
                                            alt="">
                                    </div>
                                    <div class="employers-list-details">
                                        <div class="employers-list-info">
                                            <div class="employers-list-title">
                                                <h5 class="mb-0"><a href="employer-detail.html">Bright Sparks
                                                        PLC</a></h5>
                                            </div>
                                            <div class="employers-list-option">
                                                <ul class="list-unstyled">
                                                    <li><i class="fas fa-map-marker-alt pe-1"></i>Botchergate, Carlisle
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="employers-list-position">
                                        <a class="btn btn-sm btn-dark" href="#">25 Open position</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="employers-grid bg-white py-4">
                                    <div class="employers-list-logo pt-0">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/08.svg"
                                            alt="">
                                    </div>
                                    <div class="employers-list-details">
                                        <div class="employers-list-info">
                                            <div class="employers-list-title">
                                                <h5 class="mb-0"><a href="employer-detail.html">Suttons Financial
                                                        Ltd</a></h5>
                                            </div>
                                            <div class="employers-list-option">
                                                <ul class="list-unstyled">
                                                    <li><i class="fas fa-map-marker-alt pe-1"></i>Paris, Île-de-France
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="employers-list-position">
                                        <a class="btn btn-sm btn-dark" href="#">23 Open position</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="employers-grid bg-white py-4">
                                    <div class="employers-list-logo pt-0">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/06.svg"
                                            alt="">
                                    </div>
                                    <div class="employers-list-details">
                                        <div class="employers-list-info">
                                            <div class="employers-list-title">
                                                <h5 class="mb-0"><a href="employer-detail.html">Altenwerth and
                                                        Hamill</a></h5>
                                            </div>
                                            <div class="employers-list-option">
                                                <ul class="list-unstyled">
                                                    <li><i class="fas fa-map-marker-alt pe-1"></i>Taunton, London</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="employers-list-position">
                                        <a class="btn btn-sm btn-dark" href="#">35 Open position</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Browse listing -->

    <!-- Category-style -->
    <section class="space-ptb">
        <div class="container">
            <div class="section-title center">
                <h2 class="title">Choose Your Sector</h2>
                <p class="mb-0">What made each of these people so successful? Motivation.</p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="category-style text-center">
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-account"></i>
                            </div>
                            <h6>Accountancy</h6>
                            <span class="mb-0">301 Open Position </span>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-conversation"></i>
                            </div>
                            <h6>Apprenticeships</h6>
                            <span class="mb-0">287 Open Position </span>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-money"></i>
                            </div>
                            <h6>Banking</h6>
                            <span class="mb-0">542 Open Position </span>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-mortarboard"></i>
                            </div>
                            <h6>Education</h6>
                            <span class="mb-0">785 Open Position </span>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-worker"></i>
                            </div>
                            <h6>Engineering</h6>
                            <span class="mb-0">862 Open Position </span>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-businessman"></i>
                            </div>
                            <h6>Estate Agency</h6>
                            <span class="mb-0">423 Open Position </span>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-coding"></i>
                            </div>
                            <h6>IT & Telecoms</h6>
                            <span class="mb-0">253 Open Position </span>
                        </a>
                        <a href="#" class="category-item">
                            <div class="category-icon mb-4">
                                <i class="flaticon-balance"></i>
                            </div>
                            <h6>Legal</h6>
                            <span class="mb-0">689 Open Position </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category-style -->

    <!-- Top Companies -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title center">
                        <h2 class="title">Top Companies</h2>
                        <p>Data trends and insights, tips for employers, product updates and best practices</p>
                    </div>
                    <div class="owl-carousel owl-nav-bottom-center" data-nav-arrow="false" data-nav-dots="true"
                        data-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1" data-xx-items="1"
                        data-space="15" data-autoheight="true">
                        <div class="item">
                            <div class="employers-grid mb-4 mb-lg-0">
                                <div class="employers-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/07.svg"
                                        alt="">
                                </div>
                                <div class="employers-list-details">
                                    <div class="employers-list-info">
                                        <div class="employers-list-title">
                                            <h5 class="mb-0"><a href="employer-detail.html">Trout Design Ltd</a>
                                            </h5>
                                        </div>
                                        <div class="employers-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Wellesley Rd, London</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="employers-list-position">
                                    <a class="btn btn-sm btn-dark" href="#">30 Open position</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="employers-grid mb-4 mb-md-0">
                                <div class="employers-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/08.svg"
                                        alt="">
                                </div>
                                <div class="employers-list-details">
                                    <div class="employers-list-info">
                                        <div class="employers-list-title">
                                            <h5 class="mb-0"><a href="employer-detail.html">Lawn Hopper</a></h5>
                                        </div>
                                        <div class="employers-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Needham, MA</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="employers-list-position">
                                    <a class="btn btn-sm btn-dark" href="#">35 Open position</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="employers-grid mb-4 mb-lg-0">
                                <div class="employers-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/09.svg"
                                        alt="">
                                </div>
                                <div class="employers-list-details">
                                    <div class="employers-list-info">
                                        <div class="employers-list-title">
                                            <h5 class="mb-0"><a href="employer-detail.html">Trout Design Ltd</a>
                                            </h5>
                                        </div>
                                        <div class="employers-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Wellesley Rd, London</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="employers-list-position">
                                    <a class="btn btn-sm btn-dark" href="#">30 Open position</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="employers-grid mb-4 mb-md-0">
                                <div class="employers-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/10.svg"
                                        alt="">
                                </div>
                                <div class="employers-list-details">
                                    <div class="employers-list-info">
                                        <div class="employers-list-title">
                                            <h5 class="mb-0"><a href="employer-detail.html">Lawn Hopper</a></h5>
                                        </div>
                                        <div class="employers-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Needham, MA</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="employers-list-position">
                                    <a class="btn btn-sm btn-dark" href="#">35 Open position</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="employers-grid mb-4 mb-lg-0">
                                <div class="employers-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/11.svg"
                                        alt="">
                                </div>
                                <div class="employers-list-details">
                                    <div class="employers-list-info">
                                        <div class="employers-list-title">
                                            <h5 class="mb-0"><a href="employer-detail.html">Rippin LLC</a></h5>
                                        </div>
                                        <div class="employers-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Park Avenue, Mumbai</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="employers-list-position">
                                        <a class="btn btn-sm btn-dark" href="#">20 Open position</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="employers-grid mb-4 mb-lg-0">
                                <div class="employers-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/12.svg"
                                        alt="">
                                </div>
                                <div class="employers-list-details">
                                    <div class="employers-list-info">
                                        <div class="employers-list-title">
                                            <h5 class="mb-0"><a href="employer-detail.html">Trophy and Sons</a></h5>
                                        </div>
                                        <div class="employers-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Green Lanes, London</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="employers-list-position">
                                        <a class="btn btn-sm btn-dark" href="#">25 Open position</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="employers-grid mb-4 mb-md-0">
                                <div class="employers-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/13.svg"
                                        alt="">
                                </div>
                                <div class="employers-list-details">
                                    <div class="employers-list-info">
                                        <div class="employers-list-title">
                                            <h5 class="mb-0"><a href="employer-detail.html">Lawn Hopper</a></h5>
                                        </div>
                                        <div class="employers-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Needham, MA</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="employers-list-position">
                                    <a class="btn btn-sm btn-dark" href="#">35 Open position</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="employers-grid mb-4 mb-lg-0">
                                <div class="employers-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/14.svg"
                                        alt="">
                                </div>
                                <div class="employers-list-details">
                                    <div class="employers-list-info">
                                        <div class="employers-list-title">
                                            <h5 class="mb-0"><a href="employer-detail.html">Rippin LLC</a></h5>
                                        </div>
                                        <div class="employers-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Park Avenue, Mumbai</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="employers-list-position">
                                        <a class="btn btn-sm btn-dark" href="#">20 Open position</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="employers-grid mb-4 mb-lg-0">
                                <div class="employers-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/15.svg"
                                        alt="">
                                </div>
                                <div class="employers-list-details">
                                    <div class="employers-list-info">
                                        <div class="employers-list-title">
                                            <h5 class="mb-0"><a href="employer-detail.html">Trophy and Sons</a></h5>
                                        </div>
                                        <div class="employers-list-option">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Green Lanes, London</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="employers-list-position">
                                        <a class="btn btn-sm btn-dark" href="#">25 Open position</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Companies -->
@endsection
