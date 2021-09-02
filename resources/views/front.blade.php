@extends('frontlayouts.app')
@section('content') 
<main class="main" role="main">
		<!-- Intro -->
		<div class="intro">
			<div class="wrap">
				<div class="textwidget">
					<h1 class="wow fadeInDown">Need a ride?</h1>
					<h2 class="wow fadeInUp">You've come to the right place.</h2>
					<div class="actions">
						<a href="#services" title="Our services" class="btn large white wow fadeInLeft anchor">Our services</a>
						<a href="#booking" title="Make a booking" class="btn large color wow fadeInRight anchor">Make a booking</a>
					</div>
				</div>
			</div>
		</div>
		<!-- //Intro -->
		
		<!-- Search -->
		<div class="advanced-search color" id="booking">
			<div class="wrap">
                {{ Form::open(['route'=>'passenger.passenger','method' => 'post']) }}
                 <div class="form-group one-fourth">
                    {{ Form::label('busname', 'Bus Operator')}}
                    {{Form::select('busname',$selectbus,null,['class' => 'form-control','placeholder'=>'-- Please Select --','onchange'=>'myFunction(this)'])}}
                </div> 
      
                 <div class="form-group one-fourth" id="pickcity">
                    {{ Form::label('fromcity', 'Pick up location')}}
                    {{Form::select('fromcity',$fromcity,null,['id'=>'picklocation','class' => 'form-control','placeholder'=>'-- Please Select --'])}}

                </div>     
                
                <div class="form-group one-fourth" id="dropcity">
                    {{ Form::label('tocity','Drop off location')}}
                    {{Form::select('tocity',$tocity,null,['id'=>'droplocation','class' => 'form-control','placeholder'=>'-- Please Select --'])}}
                </div>

                <div class="form-group one-fourth" id="busdate">
                    {{ Form::label('date', 'Choose Date')}}
                    {{Form::select('date',$date,null,['id'=>'date','class' => 'form-control','placeholder'=>'-- Please Select --'])}}
                </div>

                 <div class="form-group one-fourth" id="busarrival">
                    {{ Form::label('arrival', 'Arrival')}}
                    {{Form::select('arrival',$arrival,null,['id'=>'arrival','class' => 'form-control','placeholder'=>'-- Please Select --'])}}
                </div>
                {{Form::hidden('schedule_data',$schedule->id,array('id' => 'schedule_data'))}}
                 <div class="form-group one-fourth" id="busdeparture">
                    {{ Form::label('departure', 'Departure')}}
                    {{Form::select('departure',$departure,null,['id'=>'departure','class' => 'form-control','placeholder'=>'-- Please Select --'])}}
                </div>
                 <div class="form-group" id="busseat">
                {{ Form::label('bus_seat[]','Bus Seat:')}}
                {{Form::select('bus_seat[]', $seats,null,['id'=>'seats',
                'multiple' => 'multiple','class' => 'form-control','placeholder'=>'-- Please Select --'])}}
                </div>  
               
               
                 <div class="f-row">
						<div class="form-group right">
							<button type="submit" class="btn large black">Book Now</button>
						</div>
					</div>

                {{Form::close()}}
			</div>
		</div>
		<!-- //Search -->
		
		<!-- Services iconic -->
		<div class="services iconic white">
			<div class="wrap">
				<div class="row">
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle"><span class="icon  icon-themeenergy_savings"></span></span>
						<h3>Fixed rates</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<span class="circle"><span class="icon icon-themeenergy_lockpad"></span></span>
						<h3>Reliable transfers</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle"><span class="icon icon-themeenergy_open-wallet"></span></span>
						<h3>No booking fees</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle"><span class="icon icon-themeenergy_heart"></span></span>
						<h3>Free cancellation</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<span class="circle"><span class="icon icon-themeenergy_magic-trick"></span></span>
						<h3>Booking flexibility</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle"><span class="icon icon-themeenergy_call"></span></span>
						<h3>24h customer service</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle"><span class="icon icon-themeenergy_cup"></span></span>
						<h3>Award winning service</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<span class="circle"><span class="icon icon-themeenergy_attach"></span></span>
						<h3>Benefits for partners</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle"><span class="icon icon-themeenergy_stars"></span></span>
						<h3>Quality vehicles</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
				</div>
			</div>
		</div>
		<!-- //Services iconic -->
		
		<!-- Call to action -->
		<div class="black cta">
			<div class="wrap">
				<p>Faisal Movers provide innovative and sustainable transportation & logistics solutions ensuring Safety, Comfort, Transparency & Social Responsibilities !</p>
			</div>
		</div>
		<!-- //Call to action -->
		
		<!-- Services -->
		<div class="services boxed white" id="services">
			<!-- Item -->
			<article class="one-fourth wow fadeIn">
				<figure class="featured-image">
					<img src="images/uploads/img.jpg" alt="" />
					<div class="overlay">
						<a href="services.html" class="expand">+</a>
					</div>
				</figure>
				<div class="details">
					<h4><a href="services.html">FM Express</a></h4>
					<p>Ensuring state of art the transportation services.</p>
					<a class="more" title="Read more" href="services.html">Read more</a>
				</div>
			</article>
			<!-- //Item -->
			
			<!-- Item -->
			<article class="one-fourth wow fadeIn" data-wow-delay=".2s">
				<figure class="featured-image">
					<img src="images/uploads/img4.jpg" alt="" />
					<div class="overlay">
						<a href="services.html" class="expand">+</a>
					</div>
				</figure>
				<div class="details">
					<h4><a href="services.html">FM Logistics</a></h4>
					<p>Safe, Secure & Fastest Logistic Services.</p>
					<a class="more" title="Read more" href="services.html">Read more</a>
				</div>
			</article>
			<!-- //Item -->
			
			<!-- Item -->
			<article class="one-fourth wow fadeIn" data-wow-delay=".4s">
				<figure class="featured-image">
					<img src="images/uploads/img2.jpg" alt="" />
					<div class="overlay">
						<a href="services.html" class="expand">+</a>
					</div>
				</figure>
				<div class="details">
					<h4><a href="services.html">KCS Cargo Service</a></h4>
					<p>Hassel Free Cargo & Courier Services.</p>
					<a class="more" title="Read more" href="services.html">Read more</a>
				</div>
			</article>
			<!-- //Item -->
			
			<!-- Item -->
			<article class="one-fourth wow fadeIn" data-wow-delay=".6s">
				<figure class="featured-image">
					<img src="images/uploads/img3.jpg" alt="" />
					<div class="overlay">
						<a href="services.html" class="expand">+</a>
					</div>
				</figure>
				<div class="details">
					<h4><a href="services.html">Private transfers</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
					<a class="more" title="Read more" href="services.html">Read more</a>
				</div>
			</article>
			<!-- //Item -->			
		</div>
		<!-- //Services -->
		<!-- Testimonials -->
		<div class="testimonials center black">
			<div class="wrap">
				<h6 class="wow fadeInDown"><i class="fa fa-quote-left"></i>Wow, this Bus Service is outstanding!</h6>
				<p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<p class="meta wow fadeInUp">-Faisal Mover</p>
			</div>
		</div>
		<!-- //Testimonials -->
		
		<div class="partners white center">
			<div class="wrap">
				<h2 class="wow fadeIn">Our partners</h2>
				<div class="one-fifth wow fadeIn"><a href="#"><img src="images/uploads/GF.png" alt="" /></a></div>
				<div class="one-fifth wow fadeIn" data-wow-delay=".2s"><a href="#"><img src="images/uploads/Maizan-Bank.png" alt="" /></a></div>
				<div class="one-fifth wow fadeIn" data-wow-delay=".4s"><a href="#"><img src="images/uploads/Pak-Arab.png" alt="" /></a></div>
				<div class="one-fifth wow fadeIn" data-wow-delay=".6s"><a href="#"><img src="images/uploads/Media.png" alt="" /></a></div>
				<div class="one-fifth" data-wow-delay=".8s"><a href="#"><img src="images/uploads/logo5.jpg" alt="" /></a></div>
			</div>
		</div>
		
	</main>



	<script type="text/javascript">

     var buses=[];
      buses= <?php echo $buses; ?>;
	  function myFunction(element) {
	  	buses.forEach(myf);
	  	function myf(item){
             
	  		if (item.id == element.value) {
                   
	  			if (item.schedule.length >0) {
	  			 
	  			 document.getElementById("pickcity").style.display ="block";
                var pickupoptions = "<option value=\"\" disabled selected>-- Please Select --</option>\n";
                  document.getElementById("dropcity").style.display ="block";
                var dropoffoptions = "<option value=\"\" disabled selected>-- Please Select --</option>\n";

                 document.getElementById("busdate").style.display ="block";
                var dateoptions = "<option value=\"\" disabled selected>-- Please Select --</option>\n";

                document.getElementById("busarrival").style.display ="block";
                var arrivaloptions = "<option value=\"\" disabled selected>-- Please Select --</option>\n";
                 document.getElementById("busdeparture").style.display ="block";
                var departureptions = "<option value=\"\" disabled selected>-- Please Select --</option>\n";
             /*   document.getElementById("busseat").style.display ="block";
                var busseat = "<option value=\"\" disabled selected>-- Please Select --</option>\n";*/
               

                item.schedule.forEach(addOptions);
                   /*
                   busseat += "<option value=" + item.schedule + ">" + item.seats + "</option>"*/
                function addOptions(item, i) {
                
                    pickupoptions += "<option value=" + item.id + ">" + item.fromcity + "</option>"
                    //console.log(pickcity);
                    dropoffoptions += "<option value=" + item.id + ">" + item.tocity + "</option>"
                    dateoptions += "<option value=" + item.id + ">" + item.date + "</option>"
                    arrivaloptions += "<option value=" + item.id + ">" + item.arrival + "</option>"
                    departureptions += "<option value=" + item.id + ">" + item.departure + "</option>"

                   
	  			}
	  			  $('#picklocation').empty().append(pickupoptions);
	  			  $('#droplocation').empty().append(dropoffoptions);
	  			  $('#date').empty().append(dateoptions);
	  			  $('#arrival').empty().append(arrivaloptions);
	  			  $('#departure').empty().append(departureptions);
	  			/* $('#seats').empty().append(busseat);*/
	  		} else
            {
                   document.getElementById("pickcity").style.display = "none";
                   document.getElementById("dropcity").style.display = "none";
                   document.getElementById("busdate").style.display = "none";
                   document.getElementById("busarrival").style.display = "none";
                   document.getElementById("busdeparture").style.display = "none";

                   /*document.getElementById("busseat").style.display = "none";*/

         	 }
	  	}
	  }
	}
	        window.onload = function(){
                   document.getElementById('pickcity').style.display = 'none';
                   document.getElementById('dropcity').style.display = 'none';
                   document.getElementById('busdate').style.display = 'none';
                   document.getElementById('busarrival').style.display = 'none';
                   document.getElementById('busdeparture').style.display = 'none';
                    /*document.getElementById('busseat').style.display = 'none';*/

                };
       
	

	</script>

@endsection