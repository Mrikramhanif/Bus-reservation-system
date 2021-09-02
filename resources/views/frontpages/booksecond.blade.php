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
					<h2>Passenger details</h2>
					<p>Please ensure all of the required fields are completed at the time of booking. This information is imperative to ensure a smooth journey.<br />All fields are required.</p>
				</div>
				<!--- //Content -->
				
				<div class="three-fourth">
					<form>
						<div class="f-row">
							<div class="one-half">
								<label for="name">Name and surname</label>
								<input type="text" id="name" />
							</div>
							<div class="one-half">
								<label for="number">Mobile number</label>
								<input type="number" id="number" />
							</div>
						</div>
						<div class="f-row">
							<div class="one-half">
								<label for="email">Email address</label>
								<input type="email" id="email" />
							</div>
							<div class="one-half">
								<label for="email2">Confirm email address</label>
								<input type="email" id="email2" />
							</div>
						</div>
						<div class="f-row">
							<div class="one-half">
								<label for="address">Street address</label>
								<input type="text" id="address" />
							</div>
							<div class="one-half">
								<label for="zip">Zip code</label>
								<input type="text" id="zip" />
							</div>
						</div>
						<div class="f-row">
							<div class="one-half">
								<label for="city">City</label>
								<input type="text" id="city" />
							</div>
							<div class="one-half">
								<label for="country">Country</label>
								<input type="text" id="country" />
							</div>
						</div>
						<div class="f-row">
							<div class="one-half">
								<label for="payment">Select payment type</label>
								<select id="payment">
									<option selected>Paypal</option>
									<option>Credit card</option>
									<option>Bank transfer</option>
								</select>
							</div>
							<div class="one-half">
								<label for="promo">Do you have a promotional discount code?</label>
								<input type="text" id="promo" />
							</div>
						</div>
						
						<div class="actions">
							<a href="{{url()->previous()}}" class="btn medium back">Go back</a>
							<a href="{{URl('bookthird')}}" class="btn medium color right">Continue</a>
						</div>
					</form>
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
									<dt>Extras</dt>
									<dd>2 pieces of baggage up to 15kg</dd>
								</dl>
							</div>
							<dl class="total">
								<dt>Total</dt>
								<dd>840,00 usd</dd>
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