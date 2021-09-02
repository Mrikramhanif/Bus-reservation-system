<!DOCTYPE html>
<html>
   
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Transfers - Private Transport and Car Hire HTML Template" />
	<meta name="description" content="Transfers - Private Transport and Car Hire HTML Template">
	<meta name="author" content="themeenergy.com">
	
	<title>Faisal Mover</title>
	
	<link rel="stylesheet" href="{{URL('css/styler.css')}}" />
	<link rel="stylesheet" href="{{URL('css/theme-pink.css')}}" id="template-color" />
	<link rel="stylesheet" href="{{URL('ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{URL('css/jquery-ui.theme.css')}}" />
	<link rel="stylesheet" href="{{URL('css/style.css')}}" />
	<link rel="stylesheet" href="{{URL('css/animate.css')}}" />
	<link rel="stylesheet" href="{{URL('css/icons.css')}}" />
	<link href='{{URL('http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700')}}' rel='stylesheet' type='text/css'>
	{{-- <link rel="shortcut icon" href="{{URL('images/favicon.ico')}}" /> --}}
	<script src="{{URL('use.fontawesome.com/e808bf9397.js')}}"></script>
  </head>
  
  <body class="home">
		<!-- Preloader -->
		<div class="preloader">
			<div id="followingBallsG">
				<div id="followingBallsG_1" class="followingBallsG"></div>
				<div id="followingBallsG_2" class="followingBallsG"></div>
				<div id="followingBallsG_3" class="followingBallsG"></div>
				<div id="followingBallsG_4" class="followingBallsG"></div>
			</div>
		</div>
		<!-- //Preloader -->
		
		<!-- Header -->
		@include('frontlayouts.header')<br><br><br>
		<!-- //Header -->
	
	<!-- Main -->
	    @yield('content')
	 
	<!-- //Main -->
	
	<!-- Footer -->
	    @include('frontlayouts.footer')
	<!-- //Footer -->
	
	 <!-- jQuery -->
    <script src="{{URL('ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
	<script src="{{URL('ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js')}}"></script>
	<script src="{{URL('cdn.jsdelivr.net/jquery.ui.timepicker.addon/1.4.5/jquery-ui-timepicker-addon.min.js')}}"></script>
	<script src="{{URL('js/jquery.uniform.min.js')}}"></script>
	<script src="{{URL('js/jquery.slicknav.min.js')}}"></script>
	<script src="{{URL('js/wow.min.js')}}"></script>
	<script src="{{URL('js/jquery-ui-sliderAccess.js')}}"></script>
	<script src="{{URL('js/search.js')}}"></script>
	<script src="{{URL('js/scripts.js')}}"></script>
	<script src="{{URL('js/styler.js')}}"></script>
  </body>

</html>