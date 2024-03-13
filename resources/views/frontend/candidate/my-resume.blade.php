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
                    <a class="btn btn-primary btn-md mb-4 mb-lg-0" href="my-resume.html">Preview My Resume</a>
                </div>
                <div class="col-12">
                    <div class="user-dashboard-info-box">
                        <div class="form-group col-md-12 p-0">
                            <label class="form-label">Cover Letter</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="user-dashboard-info-box">
                        <div class="dashboard-resume-title d-flex align-items-center">
                            <div class="section-title-02 mb-sm-0">
                                <h4 class="mb-0">Education</h4>
                            </div>

                        </div>
                        <div class="collapse show" id="dateposted">
                            <div class="bg-light p-3 mt-4">
                                <form action="{{ route('candidate.my-profile.store') }}" class="row" method="POST">
                                    @csrf
                                    <div class="form-group mb-3 col-md-12">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                    <div class="mb-3 col-md-6 datetimepickers">
                                        <label class="form-label">From</label>
                                        <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                value="08/11/1999" data-target="#datetimepicker-01">
                                            <div class="input-group-append d-flex" data-target="#datetimepicker-01"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                                        <label class="form-label">Two</label>
                                        <div class="input-group date" id="datetimepicker-02" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                value="08/11/1999" data-target="#datetimepicker-02">
                                            <div class="input-group-append d-flex" data-target="#datetimepicker-02"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 col-md-12">
                                        <label class="form-label">Institute</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                    <div class="form-group mb-3 col-md-12">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 mb-0">
                                        <a class="btn btn-md btn-primary" href="#">Add</a>
                                    </div>
                                </form>
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
                                <form class="row">
                                    <div class="form-group mb-3 col-md-12">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                    <div class="form-group mb-3 col-md-12">
                                        <label class="form-label">Company name</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                    <div class="mb-3 col-md-6 datetimepickers">
                                        <label class="form-label">From</label>
                                        <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                value="08/11/1999" data-target="#datetimepicker-01">
                                            <div class="input-group-append d-flex" data-target="#datetimepicker-01"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                                        <label class="form-label">Two</label>
                                        <div class="input-group date" id="datetimepicker-02" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                value="08/11/1999" data-target="#datetimepicker-02">
                                            <div class="input-group-append d-flex" data-target="#datetimepicker-02"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 col-md-12">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 mb-0">
                                        <a class="btn btn-md btn-primary" href="#">Add</a>
                                    </div>
                                </form>
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
                                <form class="row align-items-center">
                                    <div class="form-group mb-3 col-md-4">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" value="Photoshop">
                                    </div>
                                    <div class="form-group mb-3 col-md-4">
                                        <label class="form-label">Percentage</label>
                                        <input type="text" class="form-control" value="70%">
                                    </div>
                                    <div class="form-group col-md-4 mb-0 pt-2">
                                        <button class="btn btn-md btn-primary" href="#">Add</button>
                                        <button class="btn btn-md btn-primary" href="#"><i
                                                class="far fa-trash-alt text-white"></i></button>
                                    </div>
                                </form>
                                <form class="row align-items-center">
                                    <div class="form-group mb-3 col-md-4">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" value="HTML/CSS">
                                    </div>
                                    <div class="form-group mb-3 col-md-4">
                                        <label class="form-label">Percentage</label>
                                        <input type="text" class="form-control" value="55%">
                                    </div>

                                    <div class="form-group col-md-4 mb-0 pt-2">
                                        <button class="btn btn-md btn-primary" href="#">Add</button>
                                        <button class="btn btn-md btn-primary" href="#"><i
                                                class="far fa-trash-alt text-white"></i></button>
                                    </div>
                                </form>
                                <form class="row align-items-center">
                                    <div class="form-group mb-3 col-md-4">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" value="JavaScript">
                                    </div>
                                    <div class="form-group mb-3 col-md-4">
                                        <label class="form-label">Percentage</label>
                                        <input type="text" class="form-control" value="80%">
                                    </div>

                                    <div class="form-group col-md-4 mb-0 pt-2">
                                        <button class="btn btn-md btn-primary" href="#">Add</button>
                                        <button class="btn btn-md btn-primary" href="#"><i
                                                class="far fa-trash-alt text-white"></i></button>
                                    </div>
                                </form>
                                <form class="row align-items-center">
                                    <div class="form-group col-md-4">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" value="PHP">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label">Percentage</label>
                                        <input type="text" class="form-control" value="60%">
                                    </div>

                                    <div class="form-group col-md-4 mb-0 pt-2">
                                        <button class="btn btn-md btn-primary" href="#">Add</button>
                                        <button class="btn btn-md btn-primary" href="#"><i
                                                class="far fa-trash-alt text-white"></i></button>
                                    </div>
                                </form>
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
                                <form class="row">
                                    <div class="form-group mb-3 col-md-12">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                    <div class="form-group mb-3 col-md-12">
                                        <label class="form-label">Institute</label>
                                        <input type="text" class="form-control" value="">
                                    </div>

                                    <div class="form-group mb-3 col-md-12">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 mb-0">
                                        <button class="btn btn-md btn-primary" href="#">Add</button>
                                    </div>
                                </form>
                            </div>
                            {{-- <div class="jobber-candidate-timeline mt-4">
                                <div class="jobber-timeline-icon">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div class="jobber-timeline-item">
                                    <div class="jobber-timeline-cricle">
                                        <i class="far fa-circle"></i>
                                    </div>
                                    <div class="jobber-timeline-info">
                                        <div class="dashboard-timeline-info">
                                            <div class="dashboard-timeline-edit">
                                                <ul class="list-unstyled d-flex">
                                                    <li><a class="text-end" data-bs-toggle="collapse"
                                                            href="#dateposted-16" role="button" aria-expanded="false"
                                                            aria-controls="dateposted"> <i
                                                                class="fas fa-pencil-alt text-info me-2"></i> </a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt text-danger"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="jobber-timeline-time">2008 - 2012</span>
                                            <h6 class="mb-2">Perfect Attendance Programs</h6>
                                            <span>- Engineering High School</span>
                                            <p class="mt-2">Having clarity of purpose and a clear picture of what you
                                                desire, is probably the single most important factor in achievement. Why is
                                                Clarity so important?</p>
                                        </div>
                                        <div class="collapse show" id="dateposted-16">
                                            <div class="bg-light p-3">
                                                <form class="row collapse show" id="dateposted-form-07">
                                                    <div class="form-group mb-3 col-md-12">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" class="form-control"
                                                            value="Perfect Attendance Programs">
                                                    </div>
                                                    <div class="form-group mb-3 col-md-12">
                                                        <label class="form-label">Institute</label>
                                                        <input type="text" class="form-control"
                                                            value="Engineering High School">
                                                    </div>
                                                    <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                                                        <label class="form-label">From</label>
                                                        <div class="input-group date" id="datetimepicker-11"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                value="08/11/1999" data-target="#datetimepicker-11">
                                                            <div class="input-group-append d-flex"
                                                                data-target="#datetimepicker-11"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="far fa-calendar-alt"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                                                        <label class="form-label">Two</label>
                                                        <div class="input-group date" id="datetimepicker-12"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                value="08/11/1999" data-target="#datetimepicker-12">
                                                            <div class="input-group-append d-flex"
                                                                data-target="#datetimepicker-12"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="far fa-calendar-alt"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 col-md-12">
                                                        <label class="form-label">Description</label>
                                                        <textarea class="form-control" rows="4"
                                                            placeholder="Having clarity of purpose and a clear picture of what you desire, is probably the single most important factor in achievement. Why is Clarity so important?"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12 mb-0">
                                                        <a class="btn btn-md btn-primary" href="#">Update</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jobber-timeline-item mb-0">
                                    <div class="jobber-timeline-cricle">
                                        <i class="far fa-circle"></i>
                                    </div>
                                    <div class="jobber-timeline-info">
                                        <div class="dashboard-timeline-info">
                                            <div class="dashboard-timeline-edit">
                                                <ul class="list-unstyled d-flex">
                                                    <li><a class="text-end" data-bs-toggle="collapse"
                                                            href="#dateposted-17" role="button" aria-expanded="false"
                                                            aria-controls="dateposted"> <i
                                                                class="fas fa-pencil-alt text-info me-2"></i> </a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt text-danger"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="jobber-timeline-time">2012 - 2014</span>
                                            <h6 class="mb-2">Secondary School Certificate</h6>
                                            <span>- Engineering High School</span>
                                            <p class="mt-2">So, make the decision to move forward. Commit your decision
                                                to paper, just to bring it into focus. Then, go for it!</p>
                                        </div>
                                        <div class="collapse" id="dateposted-17">
                                            <div class="bg-light p-3">
                                                <form class="row collapse show" id="dateposted-form-08">
                                                    <div class="form-group mb-3 col-md-12">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" class="form-control"
                                                            value="Secondary School Certificate">
                                                    </div>
                                                    <div class="form-group mb-3 col-md-12">
                                                        <label class="form-label">Institute</label>
                                                        <input type="text" class="form-control"
                                                            value="Engineering High School">
                                                    </div>
                                                    <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                                                        <label class="form-label">From</label>
                                                        <div class="input-group date" id="datetimepicker-13"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                value="08/11/1999" data-target="#datetimepicker-13">
                                                            <div class="input-group-append d-flex"
                                                                data-target="#datetimepicker-13"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="far fa-calendar-alt"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                                                        <label class="form-label">Two</label>
                                                        <div class="input-group date" id="datetimepicker-14"
                                                            data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control datetimepicker-input"
                                                                value="08/11/1999" data-target="#datetimepicker-14">
                                                            <div class="input-group-append d-flex"
                                                                data-target="#datetimepicker-14"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i
                                                                        class="far fa-calendar-alt"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 col-md-12">
                                                        <label class="form-label">Description</label>
                                                        <textarea class="form-control" rows="4"
                                                            placeholder="So, make the decision to move forward. Commit your decision to paper, just to bring it into focus. Then, go for it!"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12 mb-0">
                                                        <a class="btn btn-md btn-primary" href="#">Update</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <!--=================================
                                                                                                                                                                                                                                                                Awards -->
                    <a class="btn btn-md btn-primary" href="#">Save Settings</a>
                </div>
            </div>
        </div>
    </section>
@endsection
