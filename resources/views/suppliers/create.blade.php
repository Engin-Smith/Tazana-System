<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Suppliers') }}
        </h2>
    </x-slot> --}}


    <!-- Header -->
    <div class="container-fluid pt-1 px-1">
        <div class="bg-white rounded-top p-4">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                     <a href="#">Create New Supplier</a> 
                </div>
                
            </div>
        </div>
    </div>
    <!-- Header End -->
    
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

    <!-- create -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-12">
                    <div class="bg-white rounded h-100 p-4">
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-white rounded h-100 p-4">
                                <form action="{{ route('supplier.store') }}" method="POST" enctype="multipart/form-data">
                                    
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">ID</label>
                                        <input type="text" class="form-control bg-white" name="id">
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                        </div> --}}
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Supplier Name</label>
                                        <input type="text" class="form-control bg-white" name="sup_name">
                                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                        </div> --}}
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Supplier Detail</label>
                                        <input type="text" class="form-control"  name="sup_detail">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Supplier Contact</label>
                                        <input type="text" class="form-control" name="sup_contact">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary" >Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <!-- create End -->



</x-app-layout>
