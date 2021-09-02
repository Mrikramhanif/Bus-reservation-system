<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Faisal Movers</title>
  <meta name="description" content="Hound is a Dashboard & Admin Site Responsive Template by hencework." />
  <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Hound Admin, Houndadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
  <meta name="author" content="hencework"/>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{URL('favicon.ico')}}">
  <link rel="icon" href="{{URL('favicon.ico')}}" type="image/x-icon">
  <!-- Data table CSS -->
  <link href="{{URL('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>

  <link href="{{URL('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
    
  <!-- Custom CSS -->
  <link href="{{URL('dist/css/style.css')}}" rel="stylesheet" type="text/css">
  </head>
<!DOCTYPE html>
<html lang="en">
<body>
  <!-- Preloader -->
  <div class="preloader-it">
    <div class="la-anim-1"></div>
  </div>
  <!-- /Preloader -->
    <div class="wrapper theme-1-active pimary-color-red">
    <!-- Top Menu Items -->
    @include('layouts.header')
    <!-- /Top Menu Items -->
    
    <!-- Left Sidebar Menu -->
     @include('layouts.sidebar')
    <!-- /Left Sidebar Menu -->
        <!-- Main Content -->
    <div class="page-wrapper">
      <div class="container-fluid pt-25">
     <section class="content">
        @yield('content')
        </section>
      </div>
      
      <!-- Footer -->
    @include('layouts.footer')
      <!-- /Footer -->
      
    </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
  
</body>

 
    <script src="{{URL('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
  <!-- Data table JavaScript -->
  <script src="{{asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('dist/js/dataTables-data.js')}}"></script>
  
  <!-- Progressbar Animation JavaScript -->
  <script src="{{URL('vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
  <script src="{{URL('vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>
  
  <!-- Init JavaScript -->
  <script src="{{URL('dist/js/init.js')}}"></script>

 
</html>
