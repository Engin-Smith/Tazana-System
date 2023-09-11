<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Suppliers') }}
        </h2>
    </x-slot> --}}

    <!-- Header Start -->
    <div class="container-fluid pt-1 px-1">
        <div class="bg-white rounded-top p-4">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    <a href="#">TAZANA Coffee</a>, All Right. 
                </div>
                <div class="col-12 col-sm-6 text-center text-sm-end">
                    <a href="{{ route('supplier.create')}}" class="btn btn-primary me-md-2">add new</a>
                </div>
            </div>
        </div>
    </div>
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
        
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
              <div class="bg-white rounded h-100 p-4">
                  {{-- <h6 class="mb-4">Responsive Table</h6> --}}
                
                    <div class="d-md-flex justify-content-md-end">
                        <form action="/supplier" type="get">
                            <input type="text" name="search" class="form-control" placeholder="Search">
                                <button type="submit"class="btn btn-default" title="Reload"><i class="fa fa-sync-alt"></i></button>
                        </form>
                    </div>
                    
                  <div class="table-responsive">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Supplier ID</th>
                                  <th scope="col">Supplier Name</th>
                                  <th scope="col">Supplier Detail</th>
                                  <th scope="col">Supplier Contact</th>
                                  <th scope="col">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($suppliers as $supplier)
                                <tr>
                                <th scope="row" id="">1</th>
                                <td name="sup_id">{{$supplier->sup_id}}</td>
                                <td name="sup_name">{{$supplier->sup_name}}</td>
                                <td name="sup_detail">{{$supplier->sup_detail}}</td>
                                <td name="sup_contact">{{$supplier->sup_contact}}</td>
                                <td>
                                    <form action="{{ route('supplier.destroy', $supplier->sup_id) }}"
                                        method="POST">
                                        <ul class="action-list">
                                            <div style="display: inline-flex;">
                                                <li><a href="#" data-tip="view" data-toggle="modal"
                                                        data-target="#viewModal"><i
                                                            class="fa-solid fa-eye"></i></a></li>
                                                <li><a href="#" data-tip="edit" data-toggle="modal"
                                                        data-target="#updateModal" class="editbtn"><i
                                                            class="fa fa-edit"></i></a></li>
                                                <li><a href="#" data-tip="delete" data-toggle="modal"
                                                        data-target="#deleteModal" class="deletebtn"><i
                                                            class="fa fa-trash"></i></a></li>
                                            </div>
                                        </ul>
                                        @csrf
                                        @method('DELETE')
                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                            aria-labelledby="deleteModalLabel" aria-hidden="true"
                                            style="padding-top:15%">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel"> Do you
                                                            want to delete {{ $supplier->sup_id }}?</h5>
                                                        <br><br><br>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control"
                                                            id="e_id" name="id"
                                                            value="{{ $supplier->sup_id }}">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancel</button>
                                                        <button type="sumite" class="btn btn-primary"
                                                            action="{{ route('supplier.destroy', $supplier->sup_id) }}"
                                                            method="POST">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                                </tr>
                            @endforeach
                          </tbody>
                      </table>
                  </div>

                  
                  <div class="panel-footer">
                    <div class="row">
                        <div class="col col-sm-6 col-xs-6"></div>
                        <div class="col-sm-6 col-xs-6">
                            <ul class="pagination hidden-xs pull-right">
                                {{ $suppliers->links() }}
                            </ul>
                        </div>
                    </div>
                </div>



              </div>
            </div>
        </div>
    </div>
  <!-- Table End -->

  <script>
    var rowCount = document.getElementById('myTableID').rows.length;
  </script>

</x-app-layout>
