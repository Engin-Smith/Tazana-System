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
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Employee /</span> Table</h4>

        <!-- Hoverable Table rows -->
        <div class="card">

            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="card-header fs-2 fw-bold">Employee</h1>
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
                        {{-- <div class=" d-md-flex justify-content-md-end">
                            <a href="{{route('suppliers.create')}}" class="btn btn-primary text-primary" type="button">
                                <i class="fa fa-plus"></i>test</a>
                        </div> --}}
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
                            <th>Image</th>
                            <th>Employee name</th>
                            <th>Employee Gender</th>
                            <th>Employee DOB</th>
                            <th>Employee Address</th>
                            <th>Employee Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($employees as $employee)
                            <tr>
                                <td name="sup_id">{{ $employee->emp_id }}</td>
                                <th scope="row" id="">
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li
                                          data-bs-toggle="tooltip"
                                          data-popup="tooltip-custom"
                                          data-bs-placement="top"
                                          class="avatar avatar-xs pull-up"
                                          title="{{$employee->emp_name}}">
                                          <img src="/image/{{($employee->emp_img)}}" alt="Avatar" class="rounded-circle" />
                                        </li>
                                        
                                      </ul>
                                </th>
                                <td name="sup_name">{{ $employee->emp_name }}</td>
                                <td name="sup_detail">{{ $employee->emp_gender }}</td>
                                <td name="sup_contact">{{ $employee->emp_dob }}</td>
                                <td name="sup_contact">{{ $employee->emp_address }}</td>
                                <td name="sup_contact">{{ $employee->emp_phone }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="{{ route('employee.edit', $employee->emp_id) }}"
                                                class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <form action="{{ route('employee.destroy', $employee->emp_id) }}"
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
                            {{ $employees->links() }}
                        </ul>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <!--/ Hoverable Table rows -->
    </div>
    <!-- / Content -->


<!-- Modal  edit-->
<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="modalCenterTitle">Update Supplier</h1>
                <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <!-- Upload photo -->
                    <div class="photo-wraper">
                        <div class="photo">
                            <img src="{{asset('assets/img/avatars/smith-sample.png')}}" class="rounded mx-auto d-block" id="upload_image" style="width: 120px; height: 120px; box-shadow: 0 0 0 1px red;">
                        </div><br>
                        <div class="button">
                            <input class="rounded mx-auto d-block" id="register-photo" onchange="readURL(this);" type="file" name="emp_img">
                        </div><br>
                    </div>
                    <!-- End Upload photo -->
                    
                    <div class="row">
                        <div class="col mb-3">
                            <label for="sup_name" class="form-label">Employee Name</label>
                            <input type="text" id="sup_name" class="form-control"
                                placeholder="Enter Name" name="emp_name" style="border-radius: 5px;"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Employee Gender</label>
                            <input type="text" id="nameWithTitle" class="form-control"
                                placeholder="Enter Detail" name="emp_gender" style="border-radius: 5px;"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Employee DateOfBirdth</label>
                            <input type="text" id="nameWithTitle" class="form-control"
                                placeholder="Enter Contact" name="emp_dob" style="border-radius: 5px;"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Employee Address</label>
                            <input type="text" id="nameWithTitle" class="form-control"
                                placeholder="Enter Contact" name="emp_address" style="border-radius: 5px;"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Employee Phone</label>
                            <input type="text" id="nameWithTitle" class="form-control"
                                placeholder="Enter Contact" name="emp_phone" style="border-radius: 5px;"/>
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


</x-app-layout>
