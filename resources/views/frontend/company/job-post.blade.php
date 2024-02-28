@extends('frontend.layouts.app')
@section('frontend_content')
    @include('frontend.company.company-nav')
    <!--=================================
                          Dashboard Nav -->

    <!--=================================
                          Post New Job -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-dashboard-info-box">
                        <div class="section-title-02 mb-4 d-inline-block">
                            <h4>Post a New Job</h4>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <form class="row">
                                    <div class="form-group mt-0 mb-3 col-md-12">
                                        <label class="form-label">Job Title</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                    <div class="form-group mt-0 mb-3 col-md-12">
                                        <label class="form-label">Job Description</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="form-group mt-0 mb-3 col-md-6 datetimepickers">
                                        <label class="form-label">Job Expire Date</label>
                                        <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                placeholder="Date" data-target="#datetimepicker-01">
                                            <div class="input-group-append d-flex" data-target="#datetimepicker-01"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-0 mb-3 col-md-6 select-border">
                                        <label class="form-label">Job Type</label>
                                        <select class="form-control basic-select">
                                            <option value="value 01" selected="selected">Energy</option>
                                            <option value="value 02">Human Resources</option>
                                            <option value="value 03">IT & Telecoms</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-0 mb-3 col-md-6 select-border">
                                        <label class="form-label">Job Sector</label>
                                        <select class="form-control basic-select">
                                            <option value="value 01" selected="selected">Select Sector</option>
                                            <option value="value 02">Human Resources</option>
                                            <option value="value 03">IT & Telecoms</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-0 mb-3 col-md-6 select-border">
                                        <label class="form-label">Application Type</label>
                                        <select class="form-control basic-select">
                                            <option value="value 01" selected="selected">External</option>
                                            <option value="value 02">Human Resources</option>
                                            <option value="value 03">IT & Telecoms</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-0 mb-3 col-md-6 select-border">
                                        <label class="form-label">Salary Type</label>
                                        <select class="form-control basic-select">
                                            <option value="value 02">Yearly</option>
                                            <option value="value 01">Monthly</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-0 mb-3 col-md-6">
                                        <label class="form-label">Salary Min.</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                    <div class="form-group mt-0 col-md-6 mb-3 mb-md-0">
                                        <label class="form-label">Salary Max</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                    <div class="form-group mt-0 col-md-6 mb-0">
                                        <label class="form-label">Job skill</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="user-dashboard-info-box">
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="mb-3">File attachment</h4>
                                    <div class="upload-file mb-0">
                                        <label for="formFile" class="form-label">Upload File</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="user-dashboard-info-box">
                        <div class="form-group mb-0">
                            <h4 class="mb-4">Address</h4>
                            <div class="form-group mb-3">
                                <label class="form-label">Enter Your Location</label>
                                <input type="text" class="form-control" value="" placeholder="Enter Your location">
                            </div>
                            <div class="company-address-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.95373531590414!3d-37.817323442021134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1559039794237!5m2!1sen!2sin"
                                    height="400" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-lg btn-primary" href="#">Save</a>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                          Post New Job -->
@endsection

@push('frontend_styles')
    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/datetimepicker/datetimepicker.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/select2/select2.css" />
@endpush
@push('frontend_scripts')
    <script src="{{ asset('frontend') }}/js/select2/select2.full.js"></script>
    <script src="{{ asset('frontend') }}/js/datetimepicker/moment.min.js"></script>
    <script src="{{ asset('frontend') }}/js/datetimepicker/datetimepicker.min.js"></script>
@endpush
