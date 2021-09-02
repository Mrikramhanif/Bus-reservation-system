@extends('layouts.app')
@section('content')
   <div class="row">
   	<h1 class="diplay-3">Bus Details View</h1>
       <div class="col-sm-6 row grid-block">
                        <dl class="row">
                            <dt class="col-sm-4">Bus Name</dt>
                            <dd class="col-sm-7">{{$bus->busname}}</dd>
                            <dt class="col-sm-4">Bus Type</dt>
                            <dd class="col-sm-7">{{$bus->bustype}}</dd>
                            <dt class="col-sm-4">Bus Number</dt>
                            <dd class="col-sm-7">{{$bus->busnumber}}</dd>
                            <dt class="col-sm-4">Street Address</dt>
                            <dd class="col-sm-7">{{$bus->seats}}</dd>
                                
                        </dl>
                    </div>
               </div>
@endsection