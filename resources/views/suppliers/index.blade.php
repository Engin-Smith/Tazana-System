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
                    &copy; <a href="#">TAZANA Coffee</a>, All Right. 
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
                  {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-end"> --}}
                  <div class="d-md-flex justify-content-md-end">
                    <a href="{{ route('supplier.create')}}" class="btn btn-primary me-md-2"></i>add new</a>
                    
                  </div>
                  <div class="table-responsive">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">First Name</th>
                                  <th scope="col">Last Name</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Country</th>
                                  <th scope="col">ZIP</th>
                                  <th scope="col">Status</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th scope="row">1</th>
                                  <td>John</td>
                                  <td>Doe</td>
                                  <td>jhon@email.com</td>
                                  <td>USA</td>
                                  <td>123</td>
                                  <td>Member</td>
                              </tr>
                              <tr>
                                  <th scope="row">2</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>mark@email.com</td>
                                  <td>UK</td>
                                  <td>456</td>
                                  <td>Member</td>
                              </tr>
                              <tr>
                                  <th scope="row">3</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>jacob@email.com</td>
                                  <td>AU</td>
                                  <td>789</td>
                                  <td>Member</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Table End -->


</x-app-layout>
