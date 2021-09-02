@extends('frontlayouts.app')
@section('content')

<main class="main" role="main">
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>Register</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul>
							<li><a href="index-2.html" title="Home">Home</a></li>
							<li>Register</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		    <div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
                @endif

                
            </div>
		<!-- //Page info -->
		
		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="content one-half modal">
					<!--Login-->
				<div class="box">
	         {{ Form::open(['route'=>'registeruser.register','methode'=>'POST'])}}
	              <div class="full-width">
	              {{ Form::label('name','Your name and surname')}}
	               {{ Form::text('name',null,['class'=>'form-control'])}}
	          </div>
	         
	           <div class="full-width">
	              {{ Form::label('email','Your email address')}}
	               {{ Form::email('email',null,['class'=>'form-control'])}}
	          </div>
	           <div class="full-width">
	              {{ Form::label('password','Your password')}}
	               {{ Form::password('password',null,['class'=>'form-control'])}}
	          </div>

	           <div class="full-width">
	              {{ Form::label('password_confirmation','Repeat password')}}
	               {{ Form::password('password_confirmation',null,['class'=>'form-control'])}}
	          </div>

                 <p>Already have an account? <a href="">Login</a>.</p>
             {{ Form::submit('register',['class'=>'btn color medium full'])}}
             {{ Form::close()}}
					</div>
					<!--//Login-->
				</div>
				<!--- //Content -->
			</div>
		</div>
	</main>


@endsection