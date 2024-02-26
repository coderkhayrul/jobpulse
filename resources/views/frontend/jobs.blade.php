@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- banner -->
    <section class="header-inner header-inner-big bg-holder text-white"
        style="background-image: url({{ asset('frontend') }}/images/bg/banner-01.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="job-search-field">
                        <div class="job-search-item">
                            <form class="form row">
                                <div class="col-lg-5">
                                    <div class="form-group left-icon mb-3">
                                        <input type="text" class="form-control" name="job_title" placeholder="What?">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group left-icon mb-3">
                                        <input type="text" class="form-control" name="job_title" placeholder="Where?">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12">
                                    <div class="form-group form-action">
                                        <button type="submit" class="btn btn-primary mt-0"><i
                                                class="fas fa-search-location"></i> Find Job</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner -->



    <!-- job-grid -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- sidebar -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6 class="mb-0">Showing 1-12 of <span class="text-primary">28 Jobs</span></h6>
                        </div>
                    </div>
                    <div class="job-filter mb-4 d-sm-flex align-items-center">
                        <div class="job-alert-bt"> <a class="btn btn-md btn-dark" href="#"><i
                                    class="fa fa-envelope"></i>Get job alert </a> </div>
                        <div class="job-shortby ms-sm-auto d-flex align-items-center">
                            <form class="form-inline">
                                <div class="d-sm-flex align-items-center mb-0">
                                    <label class="justify-content-start me-2 mb-2 mb-sm-0">sort by :</label>
                                    <div class="short-by">
                                        <select class="form-control basic-select">
                                            <option>Newest</option>
                                            <option>Oldest</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                            <div class="filter-btn ms-sm-3 ms-auto"> <a class="btn btn-outline-primary"
                                    data-bs-toggle="collapse" href="#collapsefilter" role="button" aria-expanded="false"
                                    aria-controls="collapsefilter"><i class="fa fa-filter"></i>Show Filter </a>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="collapsefilter">
                        <div class="row  mb-4">
                            <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                                <h6 class="mb-3">Date Posted</h6>
                                <div class="widget-content">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dateposted1">
                                        <label class="form-check-label" for="dateposted1">Last hour</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dateposted2">
                                        <label class="form-check-label" for="dateposted2">Last 24 hour</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dateposted3">
                                        <label class="form-check-label" for="dateposted3">Last 7 days</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dateposted4">
                                        <label class="form-check-label" for="dateposted4">Last 14 days</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dateposted5">
                                        <label class="form-check-label" for="dateposted5">Last 30 days</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                                <h6 class="mb-3">Specialism</h6>
                                <div class="widget-content">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="specialism1">
                                        <label class="form-check-label" for="specialism1">IT Contractor</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="specialism2">
                                        <label class="form-check-label" for="specialism2">Charity & Voluntary</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="specialism3">
                                        <label class="form-check-label" for="specialism3">Digital & Creative</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="specialism4">
                                        <label class="form-check-label" for="specialism4">Estate Agency</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="specialism5">
                                        <label class="form-check-label" for="specialism5">Graduate</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
                                <h6 class="mb-3">Job Type</h6>
                                <div class="widget">
                                    <div class="widget-content">
                                        <div class="form-check fulltime-job">
                                            <input type="checkbox" class="form-check-input" id="jobtype1">
                                            <label class="form-check-label" for="jobtype1">Full Time</label>
                                        </div>
                                        <div class="form-check parttime-job">
                                            <input type="checkbox" class="form-check-input" id="jobtype2">
                                            <label class="form-check-label" for="jobtype2">Part-Time</label>
                                        </div>
                                        <div class="form-check freelance-job">
                                            <input type="checkbox" class="form-check-input" id="jobtype3">
                                            <label class="form-check-label" for="jobtype3">Freelance</label>
                                        </div>
                                        <div class="form-check temporary-job">
                                            <input type="checkbox" class="form-check-input" id="jobtype4">
                                            <label class="form-check-label" for="jobtype4">Temporary</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <h6 class="mb-3">Experience</h6>
                                <div class="collapse show" id="experience">
                                    <div class="widget-content">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="experience1">
                                            <label class="form-check-label" for="experience1">Fresher</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="experience2">
                                            <label class="form-check-label" for="experience2">Less than 1 year</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="experience3">
                                            <label class="form-check-label" for="experience3">2 Year</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="experience4">
                                            <label class="form-check-label" for="experience4">3 Year</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="experience5">
                                            <label class="form-check-label" for="experience5">4 Year</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="job-list job-grid">
                                <div class="job-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/01.svg"
                                        alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h5 class="mb-0"><a href="job-detail.html">Marketing and Communications</a>
                                            </h5>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li> <span>via</span> <a href="employer-detail.html">Fast Systems
                                                        Consultants</a> </li>
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Wellesley Rd, London</li>
                                                <li><i class="fas fa-filter pe-1"></i>Accountancy</li>
                                                <li><a class="freelance" href="#"><i
                                                            class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list-favourite-time"> <a class="job-list-favourite order-2"
                                        href="#"><i class="fas fa-heart"></i></a> <span
                                        class="job-list-time order-1"><i class="far fa-clock pe-1"></i>1M ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="job-list job-grid">
                                <div class="job-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/02.svg"
                                        alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h5 class="mb-0"><a href="job-detail.html">Web Developer – .net</a></h5>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li> <span>via</span> <a href="employer-detail.html">Pendragon Green
                                                        Ltd</a> </li>
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Canyon Village, Ramon</li>
                                                <li><i class="fas fa-filter pe-1"></i>IT &amp; Telecoms</li>
                                                <li><a class="part-time" href="#"><i
                                                            class="fas fa-suitcase pe-1"></i>Part-Time</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list-favourite-time"> <a class="job-list-favourite order-2"
                                        href="#"><i class="far fa-heart"></i></a> <span
                                        class="job-list-time order-1"><i class="far fa-clock pe-1"></i>3D ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="job-list job-grid">
                                <div class=" job-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/03.svg"
                                        alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h5 class="mb-0"><a href="job-detail.html">Payroll and Office
                                                    Administrator</a></h5>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li> <span>via</span> <a href="employer-detail.html">Wight Sound Hearing
                                                        LLC</a> </li>
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>New Castle, PA</li>
                                                <li><i class="fas fa-filter pe-1"></i>Hospitality & Catering</li>
                                                <li><a class="temporary" href="#"><i
                                                            class="fas fa-suitcase pe-1"></i>Temporary</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list-favourite-time"> <a class="job-list-favourite order-2"
                                        href="#"><i class="far fa-heart"></i></a> <span
                                        class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2W ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="job-list job-grid">
                                <div class="job-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/04.svg"
                                        alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h5 class="mb-0"><a href="job-detail.html">Data Entry Administrator</a></h5>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li> <span>via</span> <a href="employer-detail.html">Fleet Improvements
                                                        Pvt</a> </li>
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Park Avenue, Mumbai</li>
                                                <li><i class="fas fa-filter pe-1"></i>Charity &amp; Voluntary</li>
                                                <li><a class="full-time" href="#"><i
                                                            class="fas fa-suitcase pe-1"></i>Full time</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list-favourite-time"> <a class="job-list-favourite order-2"
                                        href="#"><i class="far fa-heart"></i></a> <span
                                        class="job-list-time order-1"><i class="far fa-clock pe-1"></i>3M ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="job-list job-grid">
                                <div class="job-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/05.svg"
                                        alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h5 class="mb-0"><a href="job-detail.html">Part-Time Sales Assistant</a>
                                            </h5>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li> <span>via</span> <a href="employer-detail.html">Wollens Building
                                                        Supplies</a> </li>
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Wellesley Rd, London</li>
                                                <li><i class="fas fa-filter pe-1"></i>Customer Service</li>
                                                <li><a class="part-time" href="#"><i
                                                            class="fas fa-suitcase pe-1"></i>Part-Time</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list-favourite-time"> <a class="job-list-favourite order-2"
                                        href="#"><i class="far fa-heart"></i></a> <span
                                        class="job-list-time order-1"><i class="far fa-clock pe-1"></i>6D ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="job-list job-grid">
                                <div class="job-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/06.svg"
                                        alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h5 class="mb-0"><a href="job-detail.html">Stockroom Assistant</a></h5>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li> <span>via</span> <a href="employer-detail.html">Suttons Financial
                                                        Ltd</a> </li>
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Botchergate, Carlisle</li>
                                                <li><i class="fas fa-filter pe-1"></i>Customer Service</li>
                                                <li><a class="temporary" href="#"><i
                                                            class="fas fa-suitcase pe-1"></i>Temporary</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list-favourite-time"> <a class="job-list-favourite order-2"
                                        href="#"><i class="far fa-heart"></i></a> <span
                                        class="job-list-time order-1"><i class="far fa-clock pe-1"></i>3D ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="job-list job-grid">
                                <div class="job-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/19.svg"
                                        alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h5 class="mb-0"><a href="job-detail.html">Operational manager part-time</a>
                                            </h5>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li> <span>via</span> <a href="employer-detail.html">Fleet Home
                                                        Improvements Pvt</a> </li>
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Green Lanes, London</li>
                                                <li><i class="fas fa-filter pe-1"></i>Accountancy (Qualified)</li>
                                                <li><a class="part-time" href="#"><i
                                                            class="fas fa-suitcase pe-1"></i>Part-Time</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list-favourite-time"> <a class="job-list-favourite order-2"
                                        href="#"><i class="far fa-heart"></i></a> <span
                                        class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2W ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="job-list job-grid">
                                <div class="job-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/08.svg"
                                        alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h5 class="mb-0"><a href="job-detail.html">Post Room Operative</a></h5>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li> <span>via</span> <a href="employer-detail.html">Playroom Day
                                                        Nursery</a> </li>
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Green Lanes, London</li>
                                                <li><i class="fas fa-filter pe-1"></i>Ormskirk Rd, Wigan</li>
                                                <li><a class="freelance" href="#"><i
                                                            class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list-favourite-time"> <a class="job-list-favourite order-2"
                                        href="#"><i class="far fa-heart"></i></a> <span
                                        class="job-list-time order-1"><i class="far fa-clock pe-1"></i>3D ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="job-list job-grid">
                                <div class="job-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/06.svg"
                                        alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h5 class="mb-0"><a href="job-detail.html">Communications Trainee Scheme</a>
                                            </h5>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li> <span>via</span> <a href="employer-detail.html">Northwood (Torbay)
                                                        Ltd</a> </li>
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Park Avenue, Mumbai</li>
                                                <li><i class="fas fa-filter pe-1"></i>Engineering</li>
                                                <li><a class="full-time" href="#"><i
                                                            class="fas fa-suitcase pe-1"></i>Full Time</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list-favourite-time"> <a class="job-list-favourite order-2"
                                        href="#"><i class="far fa-heart"></i></a> <span
                                        class="job-list-time order-1"><i class="far fa-clock pe-1"></i>6D ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="job-list job-grid">
                                <div class="job-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/12.svg"
                                        alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h5 class="mb-0"><a href="job-detail.html">Communications Trainee Scheme</a>
                                            </h5>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li> <span>via</span> <a href="employer-detail.html">Wollens Building
                                                        Supplies</a> </li>
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Ormskirk Rd, Wigan</li>
                                                <li><i class="fas fa-filter pe-1"></i>Financial Services</li>
                                                <li><a class="part-time" href="#"><i
                                                            class="fas fa-suitcase pe-1"></i>Part-Time</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list-favourite-time"> <a class="job-list-favourite order-2"
                                        href="#"><i class="far fa-heart"></i></a> <span
                                        class="job-list-time order-1"><i class="far fa-clock pe-1"></i>1w ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="job-list job-grid">
                                <div class="job-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/13.svg"
                                        alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h5 class="mb-0"><a href="job-detail.html">Part-Time Sales Assistant</a>
                                            </h5>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li> <span>via</span> <a href="employer-detail.html">NameThe Raj Douth</a>
                                                </li>
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Green Lanes, London</li>
                                                <li><i class="fas fa-filter pe-1"></i>Health & Medicine</li>
                                                <li><a class="temporary" href="#"><i
                                                            class="fas fa-suitcase pe-1"></i>Temporary</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list-favourite-time"> <a class="job-list-favourite order-2"
                                        href="#"><i class="far fa-heart"></i></a> <span
                                        class="job-list-time order-1"><i class="far fa-clock pe-1"></i>3M ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="job-list job-grid">
                                <div class="job-list-logo">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/svg/14.svg"
                                        alt="">
                                </div>
                                <div class="job-list-details">
                                    <div class="job-list-info">
                                        <div class="job-list-title">
                                            <h5 class="mb-0"><a href="job-detail.html">Anticoagulation Receptionist</a>
                                            </h5>
                                        </div>
                                        <div class="job-list-option">
                                            <ul class="list-unstyled">
                                                <li> <span>via</span> <a href="employer-detail.html">Fleet Home
                                                        Improvements Pvt</a> </li>
                                                <li><i class="fas fa-map-marker-alt pe-1"></i>Green Lanes, London</li>
                                                <li><i class="fas fa-filter pe-1"></i>Accountancy (Qualified)</li>
                                                <li><a class="part-time" href="#"><i
                                                            class="fas fa-suitcase pe-1"></i>Part-Time</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list-favourite-time"> <a class="job-list-favourite order-2"
                                        href="#"><i class="far fa-heart"></i></a> <span
                                        class="job-list-time order-1"><i class="far fa-clock pe-1"></i>6D ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center mt-4">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item disabled"> <span class="page-link b-radius-none">Prev</span> </li>
                                <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span
                                        class="sr-only">(current)</span></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">25</a></li>
                                <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- job-grid -->
@endsection
