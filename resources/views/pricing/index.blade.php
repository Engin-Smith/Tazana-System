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
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Product /</span> Table</h4>

        <!-- Hoverable Table rows -->
        <div class="card">

            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="card-header fs-2 fw-bold">Product</h1>
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
            <form action="/product" type="get">
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
                            <th>Pricing Date</th>
                            <th>Product ID</th>
                            <th>Buying price</th>
                            <th>selling price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($pricing as $price)
                            <tr>
                                <td >{{ $price->prd_date }}</td>
                                <td >{{ $price->pd_id }}</td>
                                <td >{{ $price->b_price }}</td>
                                <td >{{ $price->s_price }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="{{ route('pricing.edit', $price->pd_id) }}"
                                                class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <form action="{{ route('pricing.destroy', $price->pd_id) }}"
                                                method="POST">
                                                <button data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                    class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-trash me-1"></i> Delete</button>
                                        </div>
                                    </div>
                                    @csrf
                                    @method('DELETE')
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
                            {{ $pricing->links() }}
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
                <h1 class="modal-title" id="modalCenterTitle">Create New Product</h1>
                <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form action="{{ route('pricing.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    
                    <div class="row">
                        <div class="mb-3 row">
                            <div class="col-md-10">
                                <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Pricing Date</label>
                                <input class="form-control" style="border-radius: 5px;" type="datetime-local" id="prd_date" name="prd_date" />
                            </div>
                          </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="pd_id" class="form-label"> Customer ID</label>
                                    <select id="pd_id" class="form-select" name="pf_id">
                                        @foreach ($data as $item)
                                        <option value="{{ $item->pd_id }}">{{ $item->pd_id }} - {{ $item->pd_name }}</option>
                                        @endforeach
                                    </select>
                                 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="sup_name" class="form-label">Buying Prices</label>
                            <input type="text" id="b_price" class="form-control"
                                placeholder="Enter Name" name="b_price" style="border-radius: 5px;"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Selling Prices</label>
                            <input type="text" id="nameWithTitle" class="form-control"
                                placeholder="Enter Detail" name="s_price" style="border-radius: 5px;"/>
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
<script>
    // Get the current date and time in the format "YYYY-MM-DDTHH:MM"
    const now = new Date().toISOString().slice(0, 16);

    // Set the initial value of the input field to the current date and time
    document.getElementById('pch_date').value = now;
    </script>

</x-app-layout>
