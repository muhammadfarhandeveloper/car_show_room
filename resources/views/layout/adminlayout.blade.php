
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Car Show Room</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('./images/mainlogo.jpeg')}}" rel="icon">
  <link href="{{url('./images/mainlogo.jpeg')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{url('/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{url('/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Car Showroom</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
{{-- 
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar --> --}}

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            {{-- <img src="/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> --}}
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Muhammad Farhan</h6>
              <span>Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{url('/contact-us')}}">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{url('/dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-fuel-pump"></i><span>Fuel Type</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('/dashboard/fuel-list')}}">
              <i class="bi bi-circle"></i><span> Fuel List</span>
            </a>
          </li>
          <li>
            <a href="{{url('/dashboard/fuel-add')}}">
              <i class="bi bi-circle"></i><span>Fuel Add</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#brandacc" data-bs-toggle="collapse" href="#">
          <i class="bi bi-car-front-fill"></i><span>Brand </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="brandacc" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('/dashboard/brand-list')}}">
              <i class="bi bi-circle"></i><span>Brand List</span>
            </a>
          </li>
          <li>
            <a href="{{url('/dashboard/brand-add')}}">
              <i class="bi bi-circle"></i><span>Brand Add</span>
            </a>
          </li>
        </ul>
      </li>
     
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#modelacc" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Model </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="modelacc" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('/dashboard/model-list')}}">
              <i class="bi bi-circle"></i><span>Model List</span>
            </a>
          </li>
          <li>
            <a href="{{url('/dashboard/model-add')}}">
              <i class="bi bi-circle"></i><span>Model Add</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#bodyacc" data-bs-toggle="collapse" href="#">
          <i class="bi bi-car-front-fill"></i><span>Body Type</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="bodyacc" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('/dashboard/body-type-list')}}">
              <i class="bi bi-circle"></i><span>Body type List</span>
            </a>
          </li>
          <li>
            <a href="{{url('/dashboard/body-type-add')}}">
              <i class="bi bi-circle"></i><span>Body type Add</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#vehicleacc" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bicycle"></i><span>Vehicle Type</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="vehicleacc" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('/dashboard/vehicle-type-list')}}">
              <i class="bi bi-circle"></i><span>Vehicle type List</span>
            </a>
          </li>
          <li>
            <a href="{{url('/dashboard/vehicle-type-add')}}">
              <i class="bi bi-circle"></i><span>Vehicle type Add</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#coloracc" data-bs-toggle="collapse" href="#">
          <i class="bi bi-palette"></i><span>Colors</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="coloracc" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('/dashboard/color-list')}}">
              <i class="bi bi-circle"></i><span>Colors List</span>
            </a>
          </li>
          <li>
            <a href="{{url('/dashboard/color-add')}}">
              <i class="bi bi-circle"></i><span>Colors Add</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#caracc" data-bs-toggle="collapse" href="#">
          <i class="bi bi-car-front-fill"></i>Vehicle</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="caracc" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('/dashboard/vehicle-list')}}">
              <i class="bi bi-circle"></i><span>Vehicle List</span>
            </a>
          </li>
          <li>
            <a href="{{url('/dashboard/vehicle-add')}}">
              <i class="bi bi-circle"></i><span>Vehicle Add</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/dashboard/contact-users')}}">
          <i class="bi bi-person"></i>
          <span>Contact List</span>
        </a>
      </li>

      <!-- End Components Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">


    @yield('content')
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer fixed-bottom bg-dark-light">
    <div class="copyright">
      &copy; Copyright <strong><span>Car Showroom</span></strong>. All Rights Reserved
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="{{url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{url('/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{url('/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{url('/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('/assets/js/main.js')}}"></script>

</body>

</html>