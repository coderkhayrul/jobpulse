@extends('frontend.layouts.app')
@section('frontend_content')
    @include('frontend.company.company-nav')
    <!--=================================
                                                                                                                                                                                                                                                                            Dashboard Nav -->

    <!--=================================
                                                                                                                                                                                                                                                                            Change Password -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session('message'))
                        <h5 class="alert alert-success mb-2">{{ session('message') }}</h5>
                    @endif

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="user-dashboard-info-box">
                        <div class="section-title-02 mb-4">
                            <h4>Change Password</h4>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <form method="POST" action="{{ route('company.change-password') }}" class="row">
                                    @csrf
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="current_password" class="form-label">Current Password</label>
                                        <input type="password" class="form-control" name="current_password" value="">
                                    </div>
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="password" class="form-label">New Password</label>
                                        <input type="password" class="form-control" name="password" value="">
                                    </div>
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                            value="">
                                    </div>
                                    <div class="form-group col-md-12 mb-3">
                                        <button type="submit" class="btn btn-primary">Change
                                            Password</button>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
