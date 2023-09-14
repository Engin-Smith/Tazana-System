<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Suppliers') }}
        </h2>
    </x-slot> --}}

    <!-- Header Start -->
    {{-- <div class="container-fluid pt-1 px-1">
        <div class="bg-white rounded-top p-2">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    <a href="#">TAZANA Coffee</a>, All Right.
                </div>
                <div class="col-12 col-sm-6 text-center text-sm-end">
                    <a href="{{ route('suppliers.create') }}" class="btn btn-primary me-md-2">add new</a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- header End -->

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif



    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Suppliers /</span> Table</h4>

        <!-- Hoverable Table rows -->
        <div class="card">

            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="card-header fs-2">Table Suppliers</h1>
                    </div>
                    <div class="col">

                    </div>
                    <div class="col">
                        <br>
                        <div class=" d-md-flex justify-content-md-end">
                            <button class="btn btn-primary text-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#createModal">
                                <i class="fa fa-plus"></i>Create</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            {{-- -----searching -------- --}}
            <form action="/suppliers" type="get">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Searching"
                        aria-label="Searching" />
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                    <button class="btn btn-outline-primary" title="Reload" type="submit"><i
                            class="fa fa-sync-alt"></i></button>
                </div>
            </form>
            {{-- ---end search------------- --}}
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Supplier name</th>
                            <th>Supplier Detail</th>
                            <th>Supplier Conatact</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($suppliers as $supplier)
                            <tr>
                                {{-- <th scope="row" id="">1</th> --}}
                                <td name="sup_id">{{ $supplier->sup_id }}</td>
                                <td name="sup_name">{{ $supplier->sup_name }}</td>
                                <td name="sup_detail">{{ $supplier->sup_detail }}</td>
                                <td name="sup_contact">{{ $supplier->sup_contact }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="{{ route('suppliers.edit', $supplier->sup_id) }}"
                                                class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <form action="{{ route('suppliers.destroy', $supplier->sup_id) }}"
                                                method="POST">
                                                <button data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                    class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-trash me-1"></i> Delete</button>
                                        </div>
                                    </div>
                                    @csrf
                                    @method('DELETE')
                                    <!-- Modal delete-->
                                    {{-- <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel1">DELETE Data</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <h5> Do you want to delete {{ $supplier->sup_id }}?</h5>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-bs-dismiss="modal">
                                                            Close
                                                        </button>
                                                        <button type="submit" class="btn btn-danger text-danger"
                                                            action="{{ route('suppliers.destroy', $supplier->sup_id) }}"
                                                            method="POST">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </form>
                                </td>
                            </tr>

                            <!-- Modal  edit-->
                            <div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalCenterTitle">Update Supplier</h5>
                                            <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('suppliers.store') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">

                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="sup_name" class="form-label">Supplier Name</label>
                                                        <input type="text" id="sup_name" class="form-control"
                                                            placeholder="Enter Name" name="sup_name" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="nameWithTitle" class="form-label">Supplier
                                                            Detail</label>
                                                        <input type="text" id="nameWithTitle" class="form-control"
                                                            placeholder="Enter Detail" name="sup_detail" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="nameWithTitle" class="form-label">Supplier
                                                            Contact</label>
                                                        <input type="text" id="nameWithTitle" class="form-control"
                                                            placeholder="Enter Contact" name="sup_contact" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-primary text-primary">Save
                                                    changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br>
            <div class="panel-footer">
                <div class="row">
                    <div class="col col-sm-6 col-xs-6"></div>
                    <div class="col-sm-6 col-xs-6">
                        <ul class="pagination hidden-xs pull-right">
                            {{ $suppliers->links() }}
                        </ul>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <!--/ Hoverable Table rows -->
    </div>
    <!-- / Content -->






</x-app-layout>
