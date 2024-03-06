@extends('admin.layouts.app')
@section('title', 'General Setting')
@section('content')
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Create A Category</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="#" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="site_logo" class="form-label">Logo</label>
                                <input name="site_logo" type="file"
                                    class="form-control @error('site_logo') is-invalid @enderror" id="site_logo"
                                    placeholder="Enter Title">
                                @error('site_logo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <div class="mb-3">
                                <img src="{{ asset('backend/assets/images/clients/2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="site_favicon" class="form-label">Favicon</label>
                                <input name="site_favicon" type="file"
                                    class="form-control @error('site_favicon') is-invalid @enderror" id="site_favicon"
                                    placeholder="Enter Email">
                                @error('site_favicon')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <div class="mb-3">
                                <img src="{{ asset('backend/assets/images/clients/2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="site_title" class="form-label">Site Title</label>
                                <input name="site_title" type="text"
                                    class="form-control @error('site_title') is-invalid @enderror" id="site_title"
                                    placeholder="Enter Title">
                                @error('site_title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="site_email" class="form-label">Site Email</label>
                                <input name="site_email" type="text"
                                    class="form-control @error('site_email') is-invalid @enderror" id="site_email"
                                    placeholder="Enter Email">
                                @error('site_email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="site_phone" class="form-label">Phone</label>
                                <input name="site_phone" type="text"
                                    class="form-control @error('site_phone') is-invalid @enderror" id="site_phone"
                                    placeholder="Enter Phone">
                                @error('site_phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="site_fax" class="form-label">Fax</label>
                                <input name="site_fax" type="text"
                                    class="form-control @error('site_fax') is-invalid @enderror" id="site_fax"
                                    placeholder="Enter Fax">
                                @error('site_fax')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="site_url" class="form-label">Url</label>
                                <input name="site_url" type="text"
                                    class="form-control @error('site_url') is-invalid @enderror" id="site_url"
                                    placeholder="Enter Url">
                                @error('site_url')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="site_author" class="form-label">Author</label>
                                <input name="site_author" type="text"
                                    class="form-control @error('site_author') is-invalid @enderror" id="site_author"
                                    placeholder="Enter Author Name">
                                @error('site_author')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="site_footer" class="form-label">Footer</label>
                                <textarea name="site_footer" id="" class="form-control"></textarea>
                                @error('site_footer')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="site_description" class="form-label">Description</label>
                                <textarea name="site_description" id="" class="form-control"></textarea>
                                @error('site_description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-md"> <i class="bx bx-sync"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
