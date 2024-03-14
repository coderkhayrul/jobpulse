@extends('frontend.layouts.app')
@section('frontend_content')
    @include('frontend.company.company-nav')
    <!--=================================
                                                                          Dashboard Nav -->

    <!--=================================
                                                                          Manage Candidates -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-dashboard-info-box table-responsive pb-4 mb-0">
                        <table class="table manage-candidates-top mb-0">
                            <thead>
                                <tr>
                                    <th>Candidate Name</th>
                                    <th class="text-center">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="candidates-list">
                                    <td class="title">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/images/avatar/06.jpg"
                                                alt="">
                                        </div>
                                        <div class="candidate-list-details">
                                            <div class="candidate-list-info">
                                                <div class="candidate-list-title">
                                                    <h5 class="mb-0"><a href="#">Sara Lisbon</a></h5>
                                                </div>
                                                <div class="candidate-list-option">
                                                    <ul class="list-unstyled">
                                                        <li><i class="fas fa-filter pe-1"></i>Strategy & Consultancy</li>
                                                        <li><i class="fas fa-map-marker-alt pe-1"></i>Canyon Village, Ramon
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <a class="candidate-list-favourite order-2 text-danger" href="#"><i
                                                class="fas fa-heart"></i></a>
                                        <span class="candidate-list-time order-1">Shortlisted</span>
                                    </td>

                                </tr>
                                <tr class="candidates-list">
                                    <td class="title">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/images/avatar/02.jpg"
                                                alt="">
                                        </div>
                                        <div class="candidate-list-details">
                                            <div class="candidate-list-info">
                                                <div class="candidate-list-title">
                                                    <h5 class="mb-0"><a href="#">Paul Flavius</a></h5>
                                                </div>
                                                <div class="candidate-list-option">
                                                    <ul class="list-unstyled">
                                                        <li><i class="fas fa-filter pe-1"></i>General Insurance</li>
                                                        <li><i class="fas fa-map-marker-alt pe-1"></i>Ormskirk Rd, Wigan
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <a class="candidate-list-favourite order-2 text-danger" href="#"><i
                                                class="fas fa-heart"></i></a>
                                        <span class="candidate-list-time order-1">Shortlisted</span>
                                    </td>

                                </tr>
                                <tr class="candidates-list">
                                    <td class="title">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/images/avatar/08.jpg"
                                                alt="">
                                        </div>
                                        <div class="candidate-list-details">
                                            <div class="candidate-list-info">
                                                <div class="candidate-list-title">
                                                    <h5 class="mb-0"><a href="#">Carolyn & Dan</a></h5>
                                                </div>
                                                <div class="candidate-list-option">
                                                    <ul class="list-unstyled">
                                                        <li><i class="fas fa-filter pe-1"></i>Recruitment Consultancy</li>
                                                        <li><i class="fas fa-map-marker-alt pe-1"></i>Paris, Île-de-France
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <a class="candidate-list-favourite order-2 text-danger" href="#"><i
                                                class="fas fa-heart"></i></a>
                                        <span class="candidate-list-time order-1">Shortlisted</span>
                                    </td>

                                </tr>
                                <tr class="candidates-list">
                                    <td class="title">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/images/avatar/05.jpg"
                                                alt="">
                                        </div>
                                        <div class="candidate-list-details">
                                            <div class="candidate-list-info">
                                                <div class="candidate-list-title">
                                                    <h5 class="mb-0"><a href="#">Felica Queen</a></h5>
                                                </div>
                                                <div class="candidate-list-option">
                                                    <ul class="list-unstyled">
                                                        <li><i class="fas fa-filter pe-1"></i>General Insurance</li>
                                                        <li><i class="fas fa-map-marker-alt pe-1"></i>Union St, New Delhi
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <a class="candidate-list-favourite order-2 text-danger" href="#"><i
                                                class="fas fa-heart"></i></a>
                                        <span class="candidate-list-time order-1">Shortlisted</span>
                                    </td>

                                </tr>
                                <tr class="candidates-list">
                                    <td class="title">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/images/avatar/04.jpg"
                                                alt="">
                                        </div>
                                        <div class="candidate-list-details">
                                            <div class="candidate-list-info">
                                                <div class="candidate-list-title">
                                                    <h5 class="mb-0"><a href="#">Melissa Doe</a></h5>
                                                </div>
                                                <div class="candidate-list-option">
                                                    <ul class="list-unstyled">
                                                        <li><i class="fas fa-filter pe-1"></i>Construction &amp; Property
                                                        </li>
                                                        <li><i class="fas fa-map-marker-alt pe-1"></i>Botchergate, Carlisle
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <a class="candidate-list-favourite order-2 text-danger" href="#"><i
                                                class="fas fa-heart"></i></a>
                                        <span class="candidate-list-time order-1">Shortlisted</span>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-12 text-center mt-3 mb-4 mt-sm-3">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item disabled"> <span class="page-link b-radius-none">Prev</span>
                                    </li>
                                    <li class="page-item active" aria-current="page"><span class="page-link">1 </span>
                                        <span class="sr-only">(current)</span>
                                    </li>
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
        </div>
    </section>
    <!--=================================
                                                                          Manage Candidates -->
@endsection
