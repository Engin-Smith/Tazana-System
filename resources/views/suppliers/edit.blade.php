
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
            <form action="{{ route('suppliers.update', $suppliers->sup_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card mb-4">
                    <h5 class="card-header">Update</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <!-- Upload photo -->
                        <div class="photo-wraper">
                            <div class="photo">
                                <img src="/image/{{ $suppliers->sup_img }}" id="upload_image" class="rounded mx-auto d-block" style="width: 120px; height: 120px;">
                            </div>
                            <div class="button">
                                <input id="register-photo" class="rounded mx-auto d-block" onchange="readURL(this);" type="file" name="doc_image" value="{{ $suppliers->sup_img }}">
                            </div>
                        </div>
                        <!-- End Upload photo -->
                        <div class="card-body demo-vertical-spacing demo-only-element">
                            
                            <div class="form-password-toggle">
                                <label class="form-label" for="basic-default-password12">Supplier ID</label>
                                <div class="input-group">
                                    <input type="text" value="{{ $suppliers->sup_id }}" class="form-control" disabled
                                        id="basic-default-password12" aria-describedby="basic-default-password2" style="border-radius: 5px;"/>
                                </div>
                            </div>
                            <div class="form-password-toggle">
                                <label class="form-label" for="basic-default-password12">Supplier Name</label>
                                <div class="input-group">
                                    <input type="text" name="sup_name" value="{{ $suppliers->sup_name }}"
                                        class="form-control" id="basic-default-password12"
                                        aria-describedby="basic-default-password2" style="border-radius: 5px;"/>
                                </div>
                            </div>
                            <div class="form-password-toggle">
                                <label class="form-label" for="basic-default-password12">Supplier Detail</label>
                                <div class="input-group">
                                    <input type="text" name="sup_detail" value="{{ $suppliers->sup_detail }}"
                                        class="form-control" id="basic-default-password12"
                                        aria-describedby="basic-default-password2" style="border-radius: 5px;"/>
                                </div>
                            </div>
                            <div class="form-password-toggle">
                                <label class="form-label" for="basic-default-password12">Supplier Contact</label>
                                <div class="input-group">
                                    <input type="text" name="sup_contact" value="{{ $suppliers->sup_contact }}"
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
