@extends('admin.layouts.app')
@section('title', 'Create Page')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Create Page</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.pages.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input name="title" type="text" class="form-control" id="title"
                                        placeholder="Enter Type title">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="thumbnail" class="form-label">Thumbnail</label>
                                    <input name="thumbnail" type="file" class="form-control" id="thumbnail">
                                    @error('thumbnail')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content" class="form-control" id="content" rows="3" placeholder="Enter content"></textarea>
                            @error('content')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-md"> <i class="bx bx-sync me-2"></i> Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
