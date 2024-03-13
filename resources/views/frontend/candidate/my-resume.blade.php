@extends('frontend.layouts.app')
@section('frontend_content')
    @include('frontend.candidate.candidate-nav')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title-02">
                        <h3>My Resume</h3>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-primary btn-md mb-4 mb-lg-0" href="{{ route('candidate.my-resume.preview') }}">Preview
                        My Resume</a>
                </div>
                <form action="{{ route('candidate.my-resume.store') }}" method="POST">
                    @csrf
                    <div class="col-12">
                        <div class="user-dashboard-info-box">
                            <div class="form-group col-md-12 p-0">
                                <label for="cover_letter" class="form-label">Cover Letter</label>
                                <textarea class="form-control" rows="4" name="cover_letter" id="cover_letter"></textarea>
                            </div>
                        </div>
                        <div class="user-dashboard-info-box">
                            <div class="dashboard-resume-title d-flex align-items-center">
                                <div class="section-title-02 mb-sm-0">
                                    <h4 class="mb-0">Education</h4>
                                </div>

                            </div>
                            <div class="collapse show" id="dateposted-01">
                                <div class="bg-light p-3 mt-4">
                                    <div class="row">

                                        <div class="form-group mb-3 col-md-12">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" value="" name="title"
                                                id="title">
                                        </div>
                                        <div class="mb-3 col-md-6 datetimepickers">
                                            <label class="form-label">From</label>
                                            <div class="input-group date" id="datetimepicker-01"
                                                data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    value="08/11/1999" data-target="#datetimepicker-01">
                                                <div class="input-group-append d-flex" data-target="#datetimepicker-01"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                                            <label for="end_date" class="form-label">end_date</label>
                                            <div class="input-group date" id="datetimepicker-02"
                                                data-target-input="nearest">
                                                <input name="end_date" type="text"
                                                    class="form-control datetimepicker-input" value=""
                                                    data-target="#datetimepicker-02" id="end_date">
                                                <div class="input-group-append d-flex" data-target="#datetimepicker-02"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 col-md-12">
                                            <label for="institute" class="form-label">Institute</label>
                                            <input name="institute" type="text" class="form-control" value=""
                                                id="institute">
                                        </div>
                                        <div class="form-group mb-3 col-md-12">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" class="form-control" rows="4" id="description"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="user-dashboard-info-box">
                            <div class="dashboard-resume-title d-flex align-items-center">
                                <div class="section-title-02 mb-sm-0">
                                    <h4 class="mb-0">Work & Experience</h4>
                                </div>

                            </div>
                            <div class="collapse show" id="dateposted-05">
                                <div class="bg-light p-3 mt-4">
                                    <div class="row">

                                        <div class="form-group mb-3 col-md-12">
                                            <label for="title" class="form-label">Title</label>
                                            <input name="title" type="text" class="form-control" value=""
                                                id="title">
                                        </div>
                                        <div class="form-group mb-3 col-md-12">
                                            <label for="company" class="form-label">Company name</label>
                                            <input name="company" type="text" class="form-control" value=""
                                                id="company">
                                        </div>
                                        <div class="mb-3 col-md-6 datetimepickers">
                                            <label for="start_date" class="form-label">Start_Date</label>
                                            <div class="input-group date" id="datetimepicker-01"
                                                data-target-input="nearest">
                                                <input name="start_date" type="text"
                                                    class="form-control datetimepicker-input" value=""
                                                    data-target="#datetimepicker-01" id="start_date">
                                                <div class="input-group-append d-flex" data-target="#datetimepicker-01"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                                            <label for="end_date" class="form-label">End Date</label>
                                            <div class="input-group date" id="datetimepicker-02"
                                                data-target-input="nearest">
                                                <input name="end_date" type="text"
                                                    class="form-control datetimepicker-input" value=""
                                                    data-target="#datetimepicker-02" id="end_date">
                                                <div class="input-group-append d-flex" data-target="#datetimepicker-02"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 col-md-12">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" class="form-control" rows="4" id="description"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--=================================
                                  Work & Experience -->
                        <!--=================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Professional Skill -->
                        <div class="user-dashboard-info-box">
                            <div class="dashboard-resume-title d-flex align-items-center">
                                <div class="section-title-02 mb-sm-0">
                                    <h4 class="mb-0">Professional Skill</h4>
                                </div>

                            </div>
                            <div class="collapse show" id="dateposted-11">
                                <div class="bg-light p-3 mt-4">
                                    <div class="row align-items-center">

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="name" class="form-label">Name</label>
                                            <input name="name" type="text" class="form-control" value=""
                                                id="name">
                                        </div>
                                        <div class="form-group mb-3 col-md-4">
                                            <label for="percentage" class="form-label">Percentage</label>
                                            <input name="percentage" type="text" class="form-control" value="70%"
                                                id="percentage">
                                        </div>
                                        <div class="form-group col-md-4 mb-0 pt-2">
                                            <button class="btn btn-md btn-primary" href="#">Add</button>
                                            <button class="btn btn-md btn-primary" href="#"><i
                                                    class="far fa-trash-alt text-white"></i></button>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="name" class="form-label">Name</label>
                                            <input name="name" type="text" class="form-control" value=""
                                                id="name">
                                        </div>
                                        <div class="form-group mb-3 col-md-4">
                                            <label for="percentage" class="form-label">Percentage</label>
                                            <input name="percentage" type="text" class="form-control" value="70%"
                                                id="percentage">
                                        </div>
                                        <div class="form-group col-md-4 mb-0 pt-2">
                                            <button class="btn btn-md btn-primary" href="#">Add</button>
                                            <button class="btn btn-md btn-primary" href="#"><i
                                                    class="far fa-trash-alt text-white"></i></button>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="name" class="form-label">Name</label>
                                            <input name="name" type="text" class="form-control" value=""
                                                id="name">
                                        </div>
                                        <div class="form-group mb-3 col-md-4">
                                            <label for="percentage" class="form-label">Percentage</label>
                                            <input name="percentage" type="text" class="form-control" value="70%"
                                                id="percentage">
                                        </div>
                                        <div class="form-group col-md-4 mb-0 pt-2">
                                            <button class="btn btn-md btn-primary" href="#">Add</button>
                                            <button class="btn btn-md btn-primary" href="#"><i
                                                    class="far fa-trash-alt text-white"></i></button>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="name" class="form-label">Name</label>
                                            <input name="name" type="text" class="form-control" value=""
                                                id="name">
                                        </div>
                                        <div class="form-group mb-3 col-md-4">
                                            <label for="percentage" class="form-label">Percentage</label>
                                            <input name="percentage" type="text" class="form-control" value="70%"
                                                id="percentage">
                                        </div>
                                        <div class="form-group col-md-4 mb-0 pt-2">
                                            <button class="btn btn-md btn-primary" href="#">Add</button>
                                            <button class="btn btn-md btn-primary" href="#"><i
                                                    class="far fa-trash-alt text-white"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=================================
                                                       Professional Skill -->
                        <!--=================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Awards -->
                        <div class="user-dashboard-info-box">
                            <div class="dashboard-resume-title d-flex align-items-center">
                                <div class="section-title-02 mb-sm-0">
                                    <h4 class="mb-0">Awards</h4>
                                </div>

                            </div>
                            <div class="collapse show" id="dateposted-15">
                                <div class="bg-light p-3 mt-4">
                                    <div class="row">

                                        <div class="form-group mb-3 col-md-12">
                                            <label for="title" class="form-label">Title</label>
                                            <input name="title" type="text" class="form-control" value=""
                                                id="title">
                                        </div>


                                        <div class="form-group mb-3 col-md-12">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" class="form-control" rows="4" id="description"></textarea>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-md btn-primary" href="#">Save Settings</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
