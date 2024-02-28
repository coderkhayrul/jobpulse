@extends('admin.layouts.app')
@section('title', 'user Manage')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Edit user</h3>
                    <a href="{{ route('admin.user.index') }}" class="btn btn-sm btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="firstName" class="col-md-2 col-form-label">First Name</label>
                                        <input name="firstName" class="form-control" type="text" value=""
                                            id="firstName">
                                        @error('firstName')
                                            <div class="text-danger">{{ $firstName }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="lastName" class="col-md-2 col-form-label">Last Name</label>
                                        <input name="lastName" class="form-control" type="text" value=""
                                            id="firstName">
                                        @error('lastName')
                                            <div class="text-danger">{{ $lastName }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="title" class="col-md-2 col-form-label">Title</label>
                                        <input class="form-control" type="text" value="" id="title">
                                        @error('title')
                                            <div class="text-danger">{{ $title }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="companyName" class="col-md-2 col-form-label">Company Name</label>
                                        <input class="form-control" type="text" value="" id="companyName">
                                        @error('companyName')
                                            <div class="text-danger">{{ $companyName }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="email" class="col-md-2 col-form-label">Email</label>
                                        <input name="email" class="form-control" type="email" value=""
                                            placeholder="Enter Email" id="email">
                                        @error('email')
                                            <div class="text-danger">{{ $email }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="mobile" class="col-md-2 col-form-label">Mobile</label>
                                        <input class="form-control" name="mobile" type="text" value=""
                                            placeholder="Enter Mobile" id="mobile">
                                        @error('mobile')
                                            <div class="text-danger">{{ $mobile }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="country" class="col-md-2 col-form-label">Country</label>
                                        <input class="form-control" type="text" value="" id="country">
                                        @error('country')
                                            <div class="text-danger">{{ $country }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="dateOfBirth" class="col-md-2 col-form-label">Date Of Birth</label>
                                        <input class="form-control" type="date" value="2019-08-19" id="dateOfBirth">
                                        @error('dateOfBirth')
                                            <div class="text-danger">{{ $dateOfBirth }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="companyType" class="col-md-2 col-form-label">Company Type</label>
                                        <input class="form-control" type="text" value="" id="companyType">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="address" class="col-md-2 col-form-label">Address</label>
                                        <input class="form-control" type="text" value="" id="address">
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="profileImage" class="col-md-2 col-form-label">Profile Image</label>
                                        <input class="form-control w-15" type="file" value=""
                                            id="profileImage">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="coverImage" class="col-md-2 col-form-label">Cover Image</label>
                                        <input class="form-control w-15" type="file" value="" id="coverImage">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="col-md-2 col-form-label">Gender</label>
                                        <select class="form-select">
                                            <option value="">select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="salary" class="col-md-2 col-form-label">Salary</label>
                                        <input class="form-control" type="text" value="" id="salary">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="website" class="col-md-2 col-form-label">Website</label>
                                        <input class="form-control" type="url" value=""
                                            placeholder="Enter URL" id="website">

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="lang" class="col-md-2 col-form-label">Language</label>
                                        <input class="form-control" type="url" value="" placeholder=""
                                            id="lang">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="nationality" class="col-md-2 col-form-label">Nationality</label>
                                        <input class="form-control" type="text" value="" id="nationality">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="socialFacebook" class="col-md-2 col-form-label">Facebook</label>
                                        <input class="form-control" type="url" value=""
                                            placeholder="Enter URL" id="socialFacebook">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="socialTwitter" class="col-md-2 col-form-label">Twitter</label>
                                        <input class="form-control" type="url" value=""
                                            placeholder="Enter URL" id="socialTwitter">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="socialLinkedin" class="col-md-2 col-form-label">Linkedin</label>
                                        <input class="form-control" type="url" value=""
                                            placeholder="Enter URL" id="socialLinkedin">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="details" class="col-md-2 col-form-label">Details</label>
                                    <textarea class="form-control" type="text" rows="5"></textarea>
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary w-md">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
