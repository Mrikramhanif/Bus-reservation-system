@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-sm-4">
		<h1 class="display-3">Update Buses</h1>
		@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
      @endif
 {{ Form::open(['route'=>['buses.update',$bus->id], 'method' => 'PUT']) }}
  <div class="form-group">
  	{{ Form::label('busname','Bus Name')}}
  	{{ Form::text('busname',$bus->busname,['class'=>'form-control']) }}
  </div>
   <div class="form-group">
  	{{ Form::label('bustype','Bus Type')}}
  	{{ Form::text('bustype',$bus->bustype,['class'=>'form-control']) }}
  </div>
   <div class="form-group">
  	{{ Form::label('busnumber','Bus Number')}}
  	{{ Form::text('busnumber',$bus->busnumber,['class'=>'form-control']) }}
  </div>
  <div class="form-group">
  	{{ Form::label('seats','Seats')}}
  	{{ Form::text('seats',$bus->seats,['class'=>'form-control'])}}
  </div>
 {{ Form::submit('update buse',['class'=>'btn btn-info']) }}
{{ Form::close() }}
	</div>
</div>



@endsection
