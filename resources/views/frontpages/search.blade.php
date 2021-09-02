@extends('frontlayouts.app')

@section('content')
	<!-- Main -->
	<main class="main" role="main">
		<!-- Search -->
		<div class="advanced-search color">
			<div class="wrap">
				<form role="form">
					<!-- Row -->
					<div class="f-row">
						<div class="form-group datepicker one-third">
							<label for="dep-date">Departure date and time</label>
							<input type="text" id="dep-date" value="28/08/2014" />
						</div>
						<div class="form-group select one-third">
							<label>Pick up location</label>
							<select>
								<option>Select location</option>
								<optgroup label="Germany">
									<option value="Nuremberg Airport">Nuremberg Airport</option>
								</optgroup>
							</select>
						</div>
						<div class="form-group select one-third">
							<label>Drop off location</label>
							<select>
								<option>Select location</option>
								<optgroup label="Germany">
									<option value="Nuremberg Airport">Nuremberg Airport</option>
								</optgroup>
							</select>
						</div>
					</div>
					<!-- //Row -->
					
					<!-- Row -->
					<div class="f-row">
					</div>
					</div>
					<!-- //Row -->
				</form>
			</div>
		</div>
		<!-- //Search -->
		
		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="full-width content">
					<h2>Select transfer type for your DEPARTURE</h2>
					
					<div class="results">
						<!-- Item -->
						<article class="result">
							<div class="one-fourth heightfix"><img src="images/uploads/bus.jpg" alt="" /></div>
							<div class="one-half heightfix">
								<h3>Faisal bus <a href="javascript:void(0)" class="trigger color" title="Read more">?</a></h3>
								<ul>
									<li>
										<span class="icon icon-themeenergy_user-3"></span>
										<p>Max <strong>3 people</strong> <br />per vehicle</p>
									</li>
									<li>
										<span class="icon icon-themeenergy_travel-bag"></span>
										<p>Max <strong>3 suitcases</strong> <br />per vehicle</p>
									</li>
									<li>
										<span class="icon icon-themeenergy_clock"></span>
										<p>Estimated time <br /><strong>50 mins</strong></p>
									</li>
								</ul>
							</div>
							<div class="one-fourth heightfix">
								<div>
									<div class="price">130,00 <small>USD</small></div>
									<span class="meta">per passenger</span>
									<a href="{{URL('bookfirst')}}" class="btn grey large">select</a>
								</div>
							</div>
							<div class="full-width information">	
								<a href="javascript:void(0)" class="close color" title="Close">x</a>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							</div>
						</article>
						<!-- //Item -->
					</div>
				</div>
				<!--- //Content -->
			</div>
		</div>
	</main>
	<!-- //Main -->

@endsection