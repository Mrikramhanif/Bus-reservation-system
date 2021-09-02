@extends('layouts.app')

@section('title', '| Projects')
@section('content')
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
    <h1 class="display-3">Buses</h1>
      <!-- Row -->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default card-view">
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <div class="table-wrap">
                    <div class="table-responsive">
                     
                      <a href="{{route('buses.create')}}" class="btn btn-primary">Create Buses</a>
          
                      <table id="datable_1" class="table table-hover display  pb-30" >
                        <thead>
                          <tr class="text-nowrap">
                           <th>id</th>
                           <th>Bus Name</th>
                           <th>Bus Type</th>
                           <th>Bus Number</th>
                           <th>Bus Seats</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr class="text-nowrap">
                             <td>id</td>
                           <th>Bus Name</th>
                           <th>Bus Type</th>
                           <th>Bus Number</th>
                           <th>Bus Seats</th>
                            <th>Action</th>
                          </tr>
                        </tfoot>
                        <tbody>
             @foreach ($buses as $bus)
            <tr class="text-justify">
            	<td>{{$bus->id}}</td>
            <td>{{$bus->busname}}</td>
            <td>{{$bus->bustype}}</td>
            <td>{{$bus->busnumber}}</td>
            <td>{{$bus->seats}}</td>       
            <td class="text-nowrap">
               <a href="{{ route('buses.show',$bus->id)}}" class="btn btn-primary"><i
                class="fa fa-eye"></i></a>
                <a href="{{ route('buses.edit',$bus->id)}}" class="btn btn-info " ><i class="fa fa-edit"></i></a>
                  <form style="display: inline-block;" action="{{ route('buses.destroy', $bus->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                  </form>
                      <a href="{{ route('schedules.create',$bus->id)}}" class="btn btn-info " >Create Schedule</a>
              </td>
             </tr>
                @endforeach
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>
        </div>


@endsection