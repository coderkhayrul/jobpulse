@extends('admin.layouts.app')
@section('title', 'Blogs')
@section('content')
    <div class="col-md-8 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Total {{ count($blogs) }} Blogs</h3>
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive wrap w-100  dataTable" role="grid"
                    aria-describedby="datatable_info" style="width: 1048px;">
                    <thead>
                        <tr class="text-primary" role="row">
                            <th width="10%"> Photo</th>
                            <th width="20%"> Title</th>
                            <th class="text-center" width="20%"> Created At</th>
                            <th width="30%"> Description</th>

                            <th width="10%" class="text-center text-dark">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td><img class="rounded" alt="" src="{{ asset($blog->img) }}" style="width:100px ">
                                </td>
                                <td>{{ $blog->title }}</td>
                                <td class="text-center">
                                    {{ $blog->created_at->format('d-M-Y') }}
                                </td>

                                <td>{{ Str::limit($blog->body, 35, '...') }}</td>

                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary waves-effect dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-grid-alt font-size-15 align-middle me-2"> </i>
                                            Manage
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <button onclick="blogView({{ $blog->id }})" class="dropdown-item">
                                                <i class="bx bx-show align-middle me-2"></i> View
                                            </button>
                                            <button onclick="blogEdit({{ $blog->id }})" class="dropdown-item">
                                                <i class="bx bx-edit align-middle me-2"></i> Edit
                                            </button>
                                            <button onclick="blogDelete({{ $blog->id }})" class="dropdown-item"
                                                href="#">
                                                <i class="bx bx-trash-alt align-middle me-2"></i> Delete
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Create A blog</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="img" class="form-label">Image</label>
                        <input type="file" id="img" class="form-control " name="img">
                        @error('img')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="title"
                            placeholder="Enter Type Title">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">description</label>
                        <textarea name="body" class="form-control" id="body" rows="10" placeholder="Enter description"></textarea>
                        @error('body')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    @include('admin.components.blog.editModal')
@endsection
@push('scripts')
    <script>
        function blogEdit(id) {
            var url = "{{ route('admin.blogs.edit', ':id') }}";
            url = url.replace(':id', id);

            console.log(url, id);
            $.ajax({
                type: "GET",
                url: url,
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    $('#blogImg' ?? 'img').attr('src', response.img);
                    $('#blogTitle').val(response.title);
                    $('#blogdescription').val(response.body);
                    $('#blogEditModal form').attr('action', 'blogs/' + response.id);
                    $('#blogEditModal').modal('show');
                }
            });
        }



        function blogDelete(id) {
            let url = "";
            url = url.replace(':id', id);

            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this blog!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#2f4cdd',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    event.preventDefault();
                    let url = "{{ route('admin.blogs.destroy', ':id') }}";
                    url = url.replace(':id', id);
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(response) {
                            if (response.status) {
                                Swal.fire(
                                    'Deleted!',
                                    'blog has been deleted.',
                                    'success'
                                ).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                })
                            } else {
                                Swal.fire(
                                    'Deleted!',
                                    'blog has not been deleted.',
                                    'error'
                                )
                            }
                        }
                    });
                }
            })
        }

        function blogView(id) {
            var url = "{{ route('admin.blogs.show', ':id') }}";
            url = url.replace(':id', id);

            $.ajax({
                type: "GET",
                url: url,
                data: {
                    _token: "{{ csrf_token() }}",
                },

            });
        }
    </script>
@endpush
