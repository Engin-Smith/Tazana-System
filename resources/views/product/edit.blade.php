
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
            <form action="{{ route('product.update', $product->pd_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card mb-4">
                    <h5 class="card-header">Update</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                       
                        <div class="form-password-toggle">
                            <label class="form-label" for="basic-default-password12">Product ID</label>
                            <div class="input-group">
                                <input type="text" value="{{ $product->pd_id }}" class="form-control" disabled
                                    id="basic-default-password12" aria-describedby="basic-default-password2" style="border-radius: 5px;"/>
                            </div>
                        </div>
                        <div class="form-password-toggle">
                            <label class="form-label" for="basic-default-password12">Product Name</label>
                            <div class="input-group">
                                <input type="text" name="pd_name" value="{{ $product->pd_name }}"
                                    class="form-control" id="basic-default-password12"
                                    aria-describedby="basic-default-password2" style="border-radius: 5px;"/>
                            </div>
                        </div>
                        
                        <div class="form-password-toggle">
                            <label class="form-label" for="basic-default-password12">Product QTY</label>
                            <div class="input-group">
                                <input type="text" name="qty" value="{{ $product->qty }}"
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
        <!-- / Content -->
    </div>
</x-app-layout>
