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
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Purchase /</span> Table</h4>

        <!-- Hoverable Table rows -->
        <div class="card">

            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="card-header fs-2 fw-bold">Purchases</h1>
                    </div>
                    <div class="col">

                    </div>
                    <div class="col">
                        <br>
                        <div class=" d-md-flex justify-content-md-end">
                            <a href="{{ route('purchase.create') }}"class="btn btn-primary text-primary">
                                <i class="fa fa-plus"></i>Create</a>
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
                            <th>Purchase ID</th>
                            <th>Purchase Date</th>
                            <th>Employee ID</th>
                            <th>Supplier ID</th>
                            <th>Grand Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($purchases as $purchase)
                            <tr>
                                <td >{{ $pruchase->pch_id }}</td>
                                <td >{{ $pruchase->pch_date }}</td>
                                <td >{{ $pruchase->emp_id }}</td>
                                <td >{{ $pruchase->sup_id }}</td>
                                <td >{{ $pruchase->grand_total }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="{{ route('purchase.edit', $purchase->pch_id) }}"
                                                class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <form action="{{ route('purchase.destroy', $purchase->pch_id) }}"
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
                            {{ $purchases->links() }}
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
