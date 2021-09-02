@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-sm-4">
		<h1 class="display-3">Add Buses</h1>
		@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
      @endif
 {{ Form::open(['route'=>'buses.store','methode'=>'POST'])}}
  <div class="form-group">
  	{{ Form::label('busname','Bus Name')}}
  	{{ Form::text('busname',null,['class'=>'form-control'])}}
  </div>
   <div class="form-group">
  	{{ Form::label('bustype','Bus Type')}}
  	{{ Form::select('bustype',[
                        ''=>'-- Please Select --',
                        'Ac' => 'Ac',
                        'Simple' => 'Simple'
                        ],
    null,['class'=>'form-control'])}}
  </div>
 
   <div class="form-group">
  	{{ Form::label('busnumber','Bus Number')}}
  	{{ Form::text('busnumber',null,['class'=>'form-control'])}}
  </div>
  <div class="form-group">
  	{{ Form::label('seats','Seats')}}
  	{{ Form::text('seats',null,['class'=>'form-control'])}}
  </div>
  

 {{ Form::submit('Add buse',['class'=>'btn btn-info'])}}
{{ Form::close()}}
	</div>
</div>



@endsection
