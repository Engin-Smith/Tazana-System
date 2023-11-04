<x-app-layout>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">


        <!-- Content -->
        <div class="col-md">
            <form action="{{ route('product.store') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card mb-4">
                    <h5 class="card-header">Update</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        
                        <div class="modal-body">
                            <div class="card mb-4">
                                <h5 class="card-header">Checkboxes and Radios</h5>
                                <!-- Checkboxes and Radios -->
                                <div class="card-body">
                                  <div class="row gy-3">
                                    <div class="col-md">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="cust_id" class="form-label"> Customer ID</label>
                                                        <select id="cust_id" class="form-select" name="cust_id">
                                                            @foreach ($data as $item)
                                                            <option value="{{ $item->sup_id }}">{{ $item->sup_id }} - {{ $item->sup_name }}</option>
                                                            @endforeach
                                                        </select>
                                                     
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="emp_id" class="form-label"> Employee ID</label>
                                                        <select id="emp_id" class="form-select" name="emp_id">
                                                            @foreach ($employe as $item)
                                                            <option value="{{ $item->emp_id }}">{{ $item->emp_id }} - {{ $item->emp_name }}</option>
                                                        @endforeach
                                                        </select>
                                                     
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md">
                                      <div class="row">
                                            <div class="col mb-3">
                                                <label for="nameWithTitle" class="form-label">Purchas ID</label>
                                                <input type="text" id="nameWithTitle" class="form-control"
                                                     placeholder="Enter Detail" name="pch_id" style="border-radius: 5px;"  value="{{ $generatedId }}" readonly />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <div class="col-md-10">
                                                    <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Datetime</label>
                                                    <input class="form-control" style="border-radius: 5px;" type="datetime-local" id="pch_date" name="pch_date" />
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <hr class="m-0" />
                                <!-- Inline Checkboxes -->
                                <div class="card-body">
                                  <div class="row gy-3">
                                    
                                    
                                  </div>
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
    <script>
    // Get the current date and time in the format "YYYY-MM-DDTHH:MM"
    const now = new Date().toISOString().slice(0, 16);

    // Set the initial value of the input field to the current date and time
    document.getElementById('pch_date').value = now;
    </script>
</x-app-layout>
