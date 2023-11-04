<nav x-data="{ open: false }" >
    
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
          <!-- Menu -->
          <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
              <a href="{{ url('/dashboard') }}" class="app-brand-link">
                <span class="app-brand-logo demo">
                 
                  <i class="fa fa-coffee" aria-hidden="true" style="font-size: 1.73em; color:crimson"></i>
                </span>
                <span class="app-brand-text demo menu-text fw-bold ms-2">TAZANA</span>
              </a>
  
              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>
  
            <div class="menu-inner-shadow"></div>
  
            <ul class="menu-inner py-1">
              <!-- Dashboard -->
              <li class="menu-item active">
                <a href="{{ url('/dashboard') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Dashboard</div>
                </a>
              </li>
  
           
              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">IN</span>
              </li>
              <li class="menu-item">
                    <a href="{{ route('suppliers.index')}}" class="menu-link">
                      <i class="menu-icon tf-icons bx bxl-docker" style="color: #007bff"></i>
                      <div data-i18n="Tables">Suppliers</div>
                    </a>
                    <a href="{{ route('employee.index')}}" class="menu-link">
                      <i class="menu-icon tf-icons bx bx-group" style="color: #007bff"></i>
                      <div data-i18n="Tables">Empployee</div>
                    </a>
                    <a href="{{ route('customer.index')}}" class="menu-link">
                      <i class="menu-icon tf-icons bx bxs-shopping-bag" style="color: #007bff"></i>
                      <div data-i18n="Tables">Customer</div>
                    </a>
              </li>
              
              <!-- Product menu -->
              <li class="menu-header small text-uppercase"><span class="menu-header-text">Products</span></li>
              <!-- Cards -->
              <li class="menu-item">
                <a href="{{ route('purchase.index')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-paste" style="color: #007bff"></i>
                  <div data-i18n="Tables">Purchace</div>
                </a>
                <a href="{{ route('product.index')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-cabinet" style="color: #007bff"></i>
                  <div data-i18n="Tables">Product</div>
                </a>
                <a href="{{ route('pricing.index')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-cabinet" style="color: #007bff"></i>
                  <div data-i18n="Tables">Pricing Detail</div>
                </a>
              </li>
              <!-- Order Menu -->
              <li class="menu-header small text-uppercase"><span class="menu-header-text">Order</span></li>
              <!-- Cards -->
              <li class="menu-item">
                <a href="{{ route('suppliers.index')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-basket" style="color: #007bff"></i>
                  <div data-i18n="Tables">Order</div>
                </a>
              </li>
            </ul>
          </aside>
          <!-- / Menu -->
  
          <!-- Layout container -->
          <div class="layout-page">
            <!-- Navbar -->
            <nav
              class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
              id="layout-navbar">
              <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                  <i class="bx bx-menu bx-sm"></i>
                </a>
              </div>
  
              <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <!-- Search -->
                <div class="navbar-nav align-items-center">
                  <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input
                      type="text"
                      class="form-control border-0 shadow-none ps-1 ps-sm-2"
                      placeholder="Search..."
                      aria-label="Search..." />
                  </div>
                </div>
                <!-- /Search -->
  
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                  
                  <!-- User -->
                  <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <div class="avatar avatar-online">
                        <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                      </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="#">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar avatar-online">
                                <img src="{{asset('assets/img/avatars/smith-sample.PNG')}}" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <span class="fw-medium d-block">{{ Auth::user()->name }}</span>
                              <small class="text-muted">Admin</small>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="{{route('profile.edit')}}">
                          <i class="bx bx-user me-2"></i>
                          <span class="align-middle">My Profile</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="bx bx-cog me-2"></i>
                          <span class="align-middle">Settings</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <span class="d-flex align-items-center align-middle">
                            <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                            <span class="flex-grow-1 align-middle ms-1">Billing</span>
                            <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                          </span>
                        </a>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                        <a class="dropdown-item" href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();" >
                          <i class="bx bx-power-off me-2"></i>
                          <span class="align-middle">Log Out</span>
                        </a>
                        </form>
                      </li>
                    </ul>
                  </li>
                  <!--/ User -->
                </ul>
              </div>
            </nav>
  
            <!-- / Navbar -->
  
            <!-- Content wrapper -->
            <div class="content-wrapper">
              <!-- Content -->
              <main>
                {{ $slot }}
            </main>
              
              </div>
              <!-- / Content -->
  
              <!-- Footer -->
              <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ for
                    <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium">Tazana Coffee and Tea</a>
                  </div>
                  <div class="d-none d-lg-inline-block">
                  
                    <a
                      href="https://github.com/Engin-Smith"
                      target="_blank"
                      class="footer-link me-4"
                      >Support</a
                    >
                  </div>
                </div>
              </footer>
              <!-- / Footer -->
  
              <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>
  
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
      </div>
      <!-- / Layout wrapper -->
</nav>
