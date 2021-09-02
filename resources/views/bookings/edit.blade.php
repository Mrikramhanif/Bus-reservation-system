@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-sm-4">
		<h1 class="display-3">updated booking</h1>
		@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
      @endif
 {{ Form::open(['route'=>['bookings.update',$booking->id],'method'=>'PUT'])}}
  <div class="form-group">
  	{{ Form::label('seats','Booking Seat')}}
  	{{ Form::text('seats', implode(' , ',$booking->bus_seat),['class'=>'form-control'])}}
  </div>
 
 {{ Form::submit('update booking',['class'=>'btn btn-info'])}}
{{ Form::close()}}
	</div>
</div>



@endsection
