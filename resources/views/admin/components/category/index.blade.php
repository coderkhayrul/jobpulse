@extends('admin.layouts.app')
@section('title', 'Categories Manage')
@section('content')
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Total {{ count($categories) }} Category</h3>
                <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
                    <i class="fas fa-edit m-2"></i>Create Category</a>
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive wrap w-100  dataTable" role="grid"
                    aria-describedby="datatable_info" style="width: 1048px;">
                    <thead>
                        <tr class="text-primary" role="row">
                            <th width="10%"> Image</th>
                            <th width="20%"> Name</th>
                            <th width="10%"> Remark</th>
                            <th class="text-center" width="20%"> Created At</th>
                            <th width="20%" class="text-center text-dark">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->img_url }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ Str::limit($category->remarks, 35, '...') ?? 'N/A' }}</td>
                                <td class="text-center">
                                    {{ $category->created_at->format('d-M-Y') }}
                                </td>

                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary waves-effect dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-grid-alt font-size-15 align-middle me-2"> </i>
                                            Manage
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <button onclick="categoryEdit({{ $category->id }})" class="dropdown-item">
                                                <i class="bx bx-edit align-middle me-2"></i> Edit
                                            </button>
                                            <button onclick="categoryDelete({{ $category->id }})" class="dropdown-item"
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


    @include('admin.components.category.editModal')
@endsection
@push('scripts')
    <script>
        function categoryEdit(id) {
            var url = "{{ route('admin.categories.edit', ':id') }}";
            url = url.replace(':id', id);

            $.ajax({
                type: "GET",
                url: url,
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    $('#categoryName').val(response.name);
                    $('#categoryRemarks').val(response.remarks);
                    $('#categoryEditModal form').attr('action', 'categories/' + response.id);
                    $('#categoryEditModal').modal('show');
                }
            });
        }



        function categoryDelete(id) {
            console.log(id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#4b3e61',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    event.preventDefault();
                    let url = "{{ route('admin.categories.destroy', ':id') }}";
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
                                    response.message,
                                    'success'
                                ).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                })
                            } else {
                                Swal.fire(
                                    'Deleted!',
                                    'User has not been deleted.',
                                    'error'
                                )
                            }
                        }
                    });
                }
            })
        }
    </script>
@endpush
