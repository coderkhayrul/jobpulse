@extends('admin.layouts.app')
@section('title', 'User Manage')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">User List</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">
                                <h3>Total {{ count($users) }} User</h3>
                            </a></li>
                        <li class="breadcrumb-item active">User Profile List</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive wrap w-100  dataTable"
                            role="grid" aria-describedby="datatable_info" style="width: 1048px;">
                            <thead class="table-light">
                                <tr class="text-primary" role="row">
                                    <th width="20%">Image</th>
                                    <th width="20%">Name</th>
                                    <th width="20%">Email</th>
                                    <th width="20%">Role</th>
                                    <th width="20%">Status</th>
                                    <th class="text-center" width="10%"> Created At</th>
                                    <th width="10%" class="text-center text-dark">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>Image</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            {{ roleName($user->role) }}
                                        </td>
                                        <td class="text-center">
                                            {{ $user->created_at->format('d-M-Y') }}
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-sm btn-primary waves-effect dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-grid-alt font-size-15 align-middle me-2"> </i>
                                                    Manage
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="" class="dropdown-item">
                                                        <i class="bx bx-edit align-middle me-2"></i> Edit
                                                    </a>
                                                    <button onclick="" class="dropdown-item" href="#">
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
        </div>
    </div>
@endsection
