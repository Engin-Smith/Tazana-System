
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
            <form action="{{ route('pricing.update', $pricing->pd_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card mb-4">
                    <h5 class="card-header">Update</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                       
                        <div class="form-password-toggle">
                            <div class="row">
                                <div class="mb-3 row">
                                    <div class="col-md-10">
                                        <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Pricing Date</label>
                                        <input class="form-control" style="border-radius: 5px;" type="datetime-local" id="prd_date" name="prd_date" value="{{ $pricing->prd_date }}" />
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="form-password-toggle">
                            <div class="col mb-3">
                                <label for="cust_id" class="form-label"> Customer ID</label>
                                        <select id="cust_id" class="form-select" name="cust_id">
                                            @foreach ($data as $item)
                                            <option value="{{ $item->pd_id }}">{{ $item->pd_id }} - {{ $item->pd_name }}</option>
                                            @endforeach
                                        </select>
                                     
                            </div>
                        </div>
                        
                        <div class="form-password-toggle">
                            <label class="form-label" for="basic-default-password12">Buying Prices</label>
                            <div class="input-group">
                                <input type="text" name="b_price" value="{{ $pricing->b_price }}"
                                    class="form-control" id="basic-default-password12"
                                    aria-describedby="basic-default-password2" style="border-radius: 5px;" />
                            </div>
                        </div>
                        <div class="form-password-toggle">
                            <label class="form-label" for="basic-default-password12">selling Prices</label>
                            <div class="input-group">
                                <input type="text" name="s_price" value="{{ $pricing->s_price }}"
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
