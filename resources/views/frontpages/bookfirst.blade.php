@extends('frontlayouts.app')

@section('content')
<!-- Main -->
	<main class="main" role="main">
		<!-- Search -->
		<div class="output color twoway">
			<div class="wrap">
				<div>
					<p>28.08.2014 <small>at</small> 10:00</p>
					<p>Berlin Schonefeld Airport <small>to</small> Central Train Station</p>
				</div>
				
				<div>
					<p>02.09.2014 <small>at</small> 17:00</p>
					<p>Berlin Central Train Station <small>to</small> Schonefeld Airport</p>
				</div>
			</div>
		</div>
		<!-- //Search -->
		
		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="full-width content">
					<h2>Baggage and extras</h2>
					<p>Please select the total number of pieces of baggage and extras for your transfers. If you arrive with more luggage than specified at booking, we cannot guarantee to transport them. In case we are able to transport them, we will charge you an additional fee.</p>
				</div>
				<!--- //Content -->
				
				<div class="three-fourth">
					 {{ Form::open(['route'=>'bookings.store','methode'=>'POST'])}}

						<table class="data responsive">
							<tr>
								<th>Bus Seat</th>
								<th>Seats</th>
								
							</tr>
							{{-- <tr>
								<td>Book Available Seat</td>
								<td>
					         <div class="form-group">
                           {{ Form::label('bus_seat[]','Bus Seat:')}}
                           {{Form::select('bus_seat[]', $seats,null,
                           ['multiple' => 'multiple','class' => 'form-control','placeholder'=>'--            Please Select --'])}}
                                  </div> 
								</td>
							</tr> --}}
							
						</table>
						
						<div class="actions">
							<a href="{{url()->previous()}}" class="btn medium back">Go back</a>
							<a href="{{URL('booksecond')}}" class="btn medium color right">Continue</a>
						</div>
					     
                    {{ Form::submit('Add booking',['class'=>'btn btn-info','btn medium color right'])}}
                    {{ Form::close()}}
				</div>
				
				<!--- Sidebar -->
				<aside class="one-fourth sidebar right">
					<!-- Widget -->
					<div class="widget">
						<h4>Booking summary</h4>
						<div class="summary">
							<div>
								<h5>DEPARTURE</h5>
								<dl>
									<dt>Date</dt>
									<dd>28.08.2014 10:00</dd>
									<dt>From</dt>
									<dd>London bus station</dd>
									<dt>To</dt>
									<dd>London airport</dd>
									<dt>Vehicle</dt>
									<dd>Private shuttle</dd>
								</dl>
							</div>
							<dl class="total">
								<dt>Total</dt>
								<dd>800,00 usd</dd>
							</dl>
						</div>
					</div>
					<!-- //Widget -->
				</aside>
				<!--- //Sidebar -->
			</div>
		</div>
	</main>
	<!-- //Main -->

@endsection