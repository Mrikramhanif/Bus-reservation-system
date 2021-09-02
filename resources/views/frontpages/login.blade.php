@extends('frontlayouts.app')
@section('content')

<main class="main" role="main">
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>Login</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul>
							<li><a href="index-2.html" title="Home">Home</a></li>
							<li>Login</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- //Page info -->
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
      @if(session()->get('message'))
    <div class="alert alert-danger">
      {{ session()->get('message') }}
    </div>
  @endif
		
		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="content one-half modal">
					<!--Login-->
					<div class="box">
			{{ Form::open(['route'=>'loginuser.login','methode'=>'POST'])}}
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

                 <p>If you have no account? <a href="">Register</a>.</p>
             {{ Form::submit('Login',['class'=>'btn color medium full'])}}
             {{ Form::close()}}
					<!--//Login-->
				</div>
				<!--- //Content -->
			</div>
		</div>
	</main>

@endsection