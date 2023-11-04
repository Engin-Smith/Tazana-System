<x-app-layout>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">


        <!-- Content -->
        <div class="col-md-6">
            <form action="{{ route('product.store') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card mb-4">
                    <h5 class="card-header">Update</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        
                        <div class="modal-body">
                                
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="sup_name" class="form-label">Product Name</label>
                                    <input type="text" id="sup_name" class="form-control"
                                        placeholder="Enter Name" name="pd_name" style="border-radius: 5px;"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">QTY</label>
                                    <input type="text" id="nameWithTitle" class="form-control"
                                        placeholder="Enter Detail" name="qty" style="border-radius: 5px;"/>
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
