{{-- <x-app-layout>

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
        <!-- Basic -->
        <div class="col-md-6">
            <form action="{{ route('employee.update', $employee->emp_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card mb-4">
                    <h5 class="card-header">Update</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <!-- Upload photo -->
                        <div class="photo-wraper">
                            <div class="photo">
                                <img src="/image/employee/{{($employee->emp_img)}}" id="upload_image" class="rounded mx-auto d-block" style="width: 120px; height: 120px;">
                            </div>
                            <div class="button">
                                <input id="register-photo" class="rounded mx-auto d-block" onchange="readURL(this);" type="file" name="">
                            </div>
                        </div>
                        <!-- End Upload photo -->
                        <div class="form-password-toggle">
                            <label class="form-label" for="basic-default-password12">Employee ID</label>
                            <div class="input-group">
                                <input type="text" value="{{ $employee->emp_id }}" class="form-control" disabled
                                    id="basic-default-password12" aria-describedby="basic-default-password2" style="border-radius: 5px;"/>
                            </div>
                        </div>
                        <div class="form-password-toggle">
                            <label class="form-label" for="basic-default-password12">Employee Name</label>
                            <div class="input-group">
                                <input type="text" name="emp_name" value="{{ $employee->emp_name }}"
                                    class="form-control" id="basic-default-password12"
                                    aria-describedby="basic-default-password2" style="border-radius: 5px;"/>
                            </div>
                        </div>
                        <div class="form-password-toggle">
                            <label class="form-label" for="basic-default-password12">Employee Gender</label>
                            <div class="input-group">
                                <input type="text" name="emp_gender" value="{{ $employee->emp_gender }}"
                                    class="form-control" id="basic-default-password12"
                                    aria-describedby="basic-default-password2" style="border-radius: 5px;"/>
                            </div>
                        </div>
                        <div class="form-password-toggle">
                            <label class="form-label" for="basic-default-password12">Employee Date of Bidth</label>
                            <div class="input-group">
                                <input type="text" name="emp_dob" value="{{ $employee->emp_dob }}"
                                    class="form-control" id="basic-default-password12"
                                    aria-describedby="basic-default-password2" style="border-radius: 5px;"/>
                            </div>
                        </div>
                        <div class="form-password-toggle">
                            <label class="form-label" for="basic-default-password12">Employee Address</label>
                            <div class="input-group">
                                <input type="text" name="emp_address" value="{{ $employee->emp_address }}"
                                    class="form-control" id="basic-default-password12"
                                    aria-describedby="basic-default-password2" style="border-radius: 5px;" />
                            </div>
                        </div>
                        <div class="form-password-toggle">
                            <label class="form-label" for="basic-default-password12">Employee Phone</label>
                            <div class="input-group">
                                <input type="text" name="emp_phone" value="{{ $employee->emp_phone }}"
                                    class="form-control" id="basic-default-password12"
                                    aria-describedby="basic-default-password2" style="border-radius: 5px;" />
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary text-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- / Content -->

</x-app-layout> --}}
<x-app-layout>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
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
        <div class="col-md-6">
            <form action="{{ route('employee.update', $employee->emp_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card mb-4">
                    <h5 class="card-header">Update</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <!-- Upload photo -->
                        <div class="photo-wrapper text-center">
                            <div class="photo">
                                <img src="/image/employee/{{ $employee->emp_img }}" id="upload_image" class="rounded mx-auto d-block" style="width: 120px; height: 120px;">
                            </div>
                            <div class="button">
                                <input id="register-photo" class="rounded mx-auto d-block" onchange="readURL(this);" type="file" name="">
                            </div>
                        </div>
                        <!-- End Upload photo -->
                        <div class="card-body demo-vertical-spacing demo-only-element">
                            
                            <div class="form-password-toggle">
                                <label class="form-label" for="basic-default-password12">Employee ID</label>
                                <div class="input-group">
                                    <input type="text" value="{{ $employee->emp_id }}" class="form-control" disabled
                                        id="basic-default-password12" aria-describedby="basic-default-password2" style="border-radius: 5px;"/>
                                </div>
                            </div>
                            <div class="form-password-toggle">
                                <label class="form-label" for="basic-default-password12">Employee Name</label>
                                <div class="input-group">
                                    <input type="text" name="emp_name" value="{{ $employee->emp_name }}"
                                        class="form-control" id="basic-default-password12"
                                        aria-describedby="basic-default-password2" style="border-radius: 5px;"/>
                                </div>
                            </div>
                            <div class="form-password-toggle">
                                <label class="form-label" for="basic-default-password12">Employee Gender</label>
                                <div class="input-group">
                                    <input type="text" name="emp_gender" value="{{ $employee->emp_gender }}"
                                        class="form-control" id="basic-default-password12"
                                        aria-describedby="basic-default-password2" style="border-radius: 5px;"/>
                                </div>
                            </div>
                            <div class="form-password-toggle">
                                <label class="form-label" for="basic-default-password12">Employee Date of Bidth</label>
                                <div class="input-group">
                                    <input type="text" name="emp_dob" value="{{ $employee->emp_dob }}"
                                        class="form-control" id="basic-default-password12"
                                        aria-describedby="basic-default-password2" style="border-radius: 5px;"/>
                                </div>
                            </div>
                            <div class="form-password-toggle">
                                <label class="form-label" for="basic-default-password12">Employee Address</label>
                                <div class="input-group">
                                    <input type="text" name="emp_address" value="{{ $employee->emp_address }}"
                                        class="form-control" id="basic-default-password12"
                                        aria-describedby="basic-default-password2" style="border-radius: 5px;" />
                                </div>
                            </div>
                            <div class="form-password-toggle">
                                <label class="form-label" for="basic-default-password12">Employee Phone</label>
                                <div class="input-group">
                                    <input type="text" name="emp_phone" value="{{ $employee->emp_phone }}"
                                        class="form-control" id="basic-default-password12"
                                        aria-describedby="basic-default-password2" style="border-radius: 5px;" />
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary text-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- / Content -->
    </div>
</x-app-layout>
