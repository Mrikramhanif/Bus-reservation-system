@extends('frontlayouts.app')

@section('content')
<main class="main" role="main">
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>Contact us</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul>
							<li><a href="index-2.html" title="Home">Home</a></li>
							<li>Contact</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- //Page info -->
		
		<!--- Google map -->
		<div id="map_canvas" class="gmap"></div>
		<!--- //Google map -->
		
		<div class="wrap">
			<div class="row">
				
				<!--- Content -->
				<div class="full-width content textongrey">
					<h2>Send us a message</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. All fields are required.</p>
				</div>
				<!--- //Content -->
				
				<!-- Form -->
				<div class="three-fourth">
					<form method="post" action="http://themeenergy.com/themes/html/transfers/contact_form_message.php" name="contactform" id="contactform">
						<div id="message"></div>
						<div class="f-row">
							<div class="one-half">
								<label for="name">Name and surname</label>
								<input type="text" id="name" />
							</div>
							<div class="one-half">
								<label for="email">Email address</label>
								<input type="email" id="email" />
							</div>
						</div>
						<div class="f-row">
							<div class="full-width">
								<label for="comments">Message</label>
								<textarea id="comments"></textarea>
							</div>
						</div>
						<div class="f-row">
							<input type="submit" value="Submit" id="submit" name="submit" class="btn color medium right" />
						</div>
					</form>
				</div>
				<!-- //Form -->
				
				<!--- Sidebar -->
				<aside class="one-fourth sidebar right">
					<!-- Widget -->
					<div class="widget">
						<h4>Need help booking?</h4>
						<div class="textwidget">
							<p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your needs.</p>
							<p class="contact-data"><span class="icon icon-themeenergy_call black"></span> +1 555 555 555</p>
						</div>
					</div>
					<!-- //Widget -->
					
					<!-- Widget -->
					<div class="widget">
						<h4>Advertisment</h4>
						<a href="#"><img src="images/uploads/advertisment.jpg" alt="" /></a>
					</div>
					<!-- //Widget -->
				</aside>
				<!--- //Sidebar -->
			</div>
		</div>
	</main>
	<script type="text/javascript">
		function initialize() {
			var secheltLoc = new google.maps.LatLng(49.47216, -123.76307);

			var myMapOptions = {
				 zoom: 15
				,center: secheltLoc
				,mapTypeId: google.maps.MapTypeId.ROADMAP
				,scrollwheel: false
			};
			var theMap = new google.maps.Map(document.getElementById("map_canvas"), myMapOptions);

			var myIcon = new google.maps.MarkerImage('');
			
			var marker = new google.maps.Marker({
				map: theMap,
				draggable: true,
				position: new google.maps.LatLng(49.47216, -123.76307),
				visible: true,
				icon: myIcon
			});

			var boxText = document.createElement("div");
			boxText.innerHTML = "<span>TRANSFERS</span><br>1293 Delancey Street, NY";

			var myOptions = {
				 content: boxText
				,disableAutoPan: false
				,maxWidth: 0
				,pixelOffset: new google.maps.Size(-140, 0)
				,zIndex: null
				,closeBoxURL: ""
				,infoBoxClearance: new google.maps.Size(1, 1)
				,isHidden: false
				,enableEventPropagation: false
			};

			google.maps.event.addListener(marker, "click", function (e) {
				ib.open(theMap, this);
			});

			var ib = new InfoBox(myOptions);

			ib.open(theMap, marker);
		}
	</script>

@endsection