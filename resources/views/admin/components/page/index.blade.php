@extends('admin.layouts.app')
@section('title', 'Page Manage')
@section('content')
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Total {{ count($pages) }} Page</h3>
                <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Add Page</a>
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive wrap w-100  dataTable" role="grid"
                    aria-describedby="datatable_info" style="width: 1048px;">
                    <thead>
                        <tr class="text-primary" role="row">
                            <th width="20%"> Thumbnail</th>
                            <th width="20%"> Title</th>
                            <th width="10%"> Status</th>
                            <th class="text-center" width="10%"> Created At</th>
                            <th width="15%" class="text-center text-dark">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $page)
                            <tr>
                                <td>{{ $page->thumbnail }}</td>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->status }}</td>
                                <td class="text-center">
                                    {{ $page->created_at->format('d-M-Y') }}
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
                                            <a href="#" class="dropdown-item">
                                                <i class="bx bx-edit align-middle me-2"></i> Edit
                                            </a>
                                            <button onclick="pageDelete({{ $page->id }})" class="dropdown-item"
                                                href="">
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
@endsection
