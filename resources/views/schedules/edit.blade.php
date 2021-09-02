@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-sm-4">
		<h1 class="display-3">update schedule</h1>
		@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
      @endif
 {{ Form::open(['route'=>['schedules.update',$schedule->id],'method'=>'PUT'])}}
  <div class="form-group">
    {{ Form::label('fromcity','From City')}}
    {{ Form::text('fromcity',null,$schedule->fromcity,['class'=>'form-control'])}}
  </div>
  <div class="form-group">
  	{{ Form::label('tocity','To City')}}
  	{{ Form::text('tocity',null,$schedule->tocity,['class'=>'form-control'])}}
  </div>
  
    <div class="form-group">
    {{ Form::label('departure','Departure')}}
    {{ Form::time('departure',null,$schedule->departure['class'=>'form-control'])}}
  </div>
  <div class="form-group">
    {{ Form::label('arrival','Arrival')}}
    {{ Form::time('arrival',null,$schedule->arrival,['class'=>'form-control'])}}
  </div>
  <div class="form-group">
    {{ Form::label('date','Date')}}
    {{ Form::date('date',null,$schedule->date,['class'=>'form-control'])}}
  </div>
 {{ Form::submit('Update schedule',['class'=>'btn btn-info'])}}
{{ Form::close()}}
	</div>
</div>



@endsection
