@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dt-buttons btn-group flex-wrap"> <button
                                class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1"
                                type="button"><span>Copy</span></button> <button
                                class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1"
                                type="button"><span>CSV</span></button> <button
                                class="btn btn-secondary buttons-excel buttons-html5" tabindex="0"
                                aria-controls="example1" type="button"><span>Excel</span></button> <button
                                class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1"
                                type="button"><span>PDF</span></button> <button class="btn btn-secondary buttons-print"
                                tabindex="0" aria-controls="example1" type="button"><span>Print</span></button>
                            <div class="btn-group"><button
                                    class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis"
                                    tabindex="0" aria-controls="example1" type="button" aria-haspopup="true"><span>Column
                                        visibility</span><span class="dt-down-arrow"></span></button></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="example1_filter" class="dataTables_filter">
                            <label>Search:
                                <input type="search" class="form-control form-control-sm" placeholder=""
                                    aria-controls="example1">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="{{ route('admin.roles.create') }}" type="submit" class="btn btn-success w-25 float-right my-2">New Role</a>
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                            aria-describedby="example1_info">
                            <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">ID
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Engine version: activate to sort column ascending">Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Engine version: activate to sort column ascending">Edit
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending">Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($roles as $role)
                                    @if ($loop->odd)
                                        <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td><a href="{{ route('admin.roles.edit', $role->id) }}"
                                                    class="btn btn-block btn-info">Edit</a></td>
                                            <td>
                                                <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-block btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @else
                                        <tr class="even">
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td><a href="{{ route('admin.roles.edit', $role->id) }}"
                                                    class="btn btn-block btn-info">Edit</a></td>
                                            <td>
                                                <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-block btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <h3>No roles found</h3>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to
                            10 of 57 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="example1_previous"><a
                                        href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                        class="page-link">Previous</a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="example1"
                                        data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                        data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                        data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                        data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                        data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                        data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                <li class="paginate_button page-item next" id="example1_next"><a href="#"
                                        aria-controls="example1" data-dt-idx="7" tabindex="0"
                                        class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
