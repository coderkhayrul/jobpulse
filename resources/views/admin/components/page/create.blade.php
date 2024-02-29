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
                    <form method="POST" action="#">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Enter Type Name">
                                    @error('name')
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
                            <label for="remarks" class="form-label">Content</label>
                            <textarea name="remarks" class="form-control" id="remarks" rows="3" placeholder="Enter Remarks"></textarea>
                            @error('remarks')
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
