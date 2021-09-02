@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-sm-4">
		<h1 class="display-3">Add Booking</h1>
		@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
      @endif
 {{ Form::open(['route'=>'bookings.store','methode'=>'POST'])}}
  
  @if(!empty($schedule))
   <div class="form-group">
    {{ Form::label('fromcity','From City')}}
    {{ Form::text('fromcity',$schedule->fromcity,['class'=>'form-control','disabled'])}}
  </div>
   <div class="form-group">
    {{ Form::label('tocity','To City')}}
    {{ Form::text('tocity',$schedule->tocity,['class'=>'form-control','disabled'])}}
  </div>
 <div class="form-group">
    {{ Form::label('departure','Departure')}}
    {{ Form::time('departure',$schedule->departure,['class'=>'form-control','disabled'])}}
  </div>
  <div class="form-group">
    {{ Form::label('arrival','Arrival')}}
    {{ Form::time('arrival',$schedule->arrival,['class'=>'form-control','disabled'])}}
  </div>
  <div class="form-group">
    {{ Form::label('data','Date')}}
    {{ Form::date('date',$schedule->date,['class'=>'form-control','disabled'])}}
  </div>
  {{Form::hidden('schedule_data',$schedule->id,array('id' => 'schedule_data'))}} 
   @endif

     <div class="form-group">
    {{ Form::label('busname','Bus Name')}}
    {{ Form::text('busname',$schedule->bus->busname,['class'=>'form-control','disabled'])}}
  </div>
   <div class="form-group">
    {{ Form::label('bustype','Bus Type')}}
    {{ Form::text('bustype',$schedule->bus->bustype,['class'=>'form-control','disabled'])}}
  </div>
 
   <div class="form-group">
    {{ Form::label('busnumber','Bus Number')}}
    {{ Form::text('busnumber',$schedule->bus->busnumber,['class'=>'form-control','disabled'])}}
  </div>
    <div class="form-group">
                {{ Form::label('bus_seat[]','Bus Seat:')}}
                {{Form::select('bus_seat[]', $seats,null,
                ['multiple' => 'multiple','class' => 'form-control','placeholder'=>'-- Please Select --'])}}
   </div>  
       
   {{ Form::submit('Add booking',['class'=>'btn btn-info'])}}
   {{ Form::close()}}
	</div>
</div>



@endsection
