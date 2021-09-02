@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-sm-4">
		<h1 class="display-3">Add schedule</h1>
		@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
      @endif
 {{ Form::open(['route'=>'schedules.store','methode'=>'POST'])}}
  <div class="form-group">
    {{ Form::label('fromcity','From City')}}
    {{ Form::text('fromcity',null,['class'=>'form-control'])}}
  </div>
  <div class="form-group">
  	{{ Form::label('tocity','To City')}}
  	{{ Form::text('tocity',null,['class'=>'form-control'])}}
  </div>
  
   <div class="form-group">
  	{{ Form::label('departure','Departure')}}
  	{{ Form::time('departure',null,['class'=>'form-control'])}}
  </div>

  @if(!empty($bus))

  {{Form::hidden('bus_schedule_data',$bus->id,array('id' => 'bus_schedule_data'))}} 
   @endif
  <div class="form-group">
    {{ Form::label('arrival','Arrival')}}
    {{ Form::time('arrival',null,['class'=>'form-control'])}}
  </div>
   <div class="form-group">
    {{ Form::label('data','Date')}}
    {{ Form::date('date',null,['class'=>'form-control'])}}
  </div>
 {{ Form::submit('Add schedule',['class'=>'btn btn-info'])}}
{{ Form::close()}}
	</div>
</div>



@endsection
