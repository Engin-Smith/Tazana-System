<x-app-layout>

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
            <form action="{{ route('customer.update', $customer->cust_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card mb-4">
                    <h5 class="card-header">Update</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                       
                        <div class="form-password-toggle">
                            <label class="form-label" for="basic-default-password12">Customer ID</label>
                            <div class="input-group">
                                <input type="text" value="{{ $customer->cust_id }}" class="form-control" disabled
                                    id="basic-default-password12" aria-describedby="basic-default-password2" style="border-radius: 5px;"/>
                            </div>
                        </div>
                        <div class="form-password-toggle">
                            <label class="form-label" for="basic-default-password12">Customer Name</label>
                            <div class="input-group">
                                <input type="text" name="cust_name" value="{{ $customer->cust_name }}"
                                    class="form-control" id="basic-default-password12"
                                    aria-describedby="basic-default-password2" style="border-radius: 5px;"/>
                            </div>
                        </div>
                        
                        <div class="form-password-toggle">
                            <label class="form-label" for="basic-default-password12">Customer Address</label>
                            <div class="input-group">
                                <input type="text" name="cust_address" value="{{ $customer->cust_address }}"
                                    class="form-control" id="basic-default-password12"
                                    aria-describedby="basic-default-password2" style="border-radius: 5px;" />
                            </div>
                        </div>
                        <div class="form-password-toggle">
                            <label class="form-label" for="basic-default-password12">Customer Phone</label>
                            <div class="input-group">
                                <input type="text" name="cust_phone" value="{{ $customer->cust_phone }}"
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

</x-app-layout>
