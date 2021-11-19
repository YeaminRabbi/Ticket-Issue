<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/img/f-white.png') }}">
    <title>
     
      @if (Auth::user()->role == 'admin')
        Admin Panel 
      @else
        User Panel 
      @endif
    </title>

    <!-- vendor css -->
    <link href="{{ asset('admin/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/starlight.css') }}">
  </head>

  <body>

    @extends('admin.frontend.leftpanel')
   
    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">{{ Auth::user()->name }}</span></span>
             
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="icon ion-power"></i>{{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
       
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ url('/') }}">  
          @if (Auth::user()->role == 'admin')
            Admin Panel 
          @else
            User Panel 
          @endif
        </a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

          @yield('content')
      
        

      <footer class="sl-footer">
        <div class="footer-left">
              <div class="mg-b-2">Copyright &copy; <?php $year = date("Y"); echo $year; ?>. Mafi-Airlines. All Rights Reserved.</div>
              <div>Developed by <a href="https://www.facebook.com/yeamin.akram/" target="_blank" style="color: Black;font-weight: 700;">Rabbi</a></div>
            </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Developer:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/yeamin.akram/"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://github.com/YeaminRabbi"><i class="fa fa-github tx-20"></i></a>
        </div>
      </footer>
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{ asset('admin/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('admin/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('admin/lib/d3/d3.js') }}"></script>
    <script src="{{ asset('admin/lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('admin/lib/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('admin/lib/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/lib/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('admin/lib/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('admin/lib/flot-spline/jquery.flot.spline.js') }}"></script>

    <script src="{{ asset('admin/js/starlight.js') }}"></script>
    <script src="{{ asset('admin/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard.js') }}"></script>

    @yield('footer_js')
  </body>
</html>