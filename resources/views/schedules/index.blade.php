@extends('layouts.app')

@section('title', '| Projects')
@section('content')
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
    <h1 class="display-3">Schedule</h1>
      <!-- Row -->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default card-view">
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <div class="table-wrap">
                    <div class="table-responsive">
                     
                    {{--   <a href="{{route('schedules.create')}}" class="btn btn-primary">Create Schedule</a> --}}
                     
                      <table id="datable_1" class="table table-hover display  pb-30" >
                        <thead>
                          <tr class="text-nowrap">
                           <th>id</th>
                           <th>Bus Name</th>
                           <th>Bus Number</th>
                          <th>From City</th>
                          <th>To City</th>
                          <th>Departure</th>
                          <th>Arrival</th>
                          <th>Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr class="text-nowrap">
                             <td>id</td>
                          <th>Bus Name</th>
                           <th>Bus Number</th>
                          <th>From City</th>
                          <th>To City</th>
                          <th>Departure</th>
                          <th>Arrival</th>
                          <th>Date</th>
                            <th>Action</th>
                          </tr>
                        </tfoot>
                        <tbody>
             @foreach ($schedules as $schedule)
            <tr class="text-justify">
            	<td>{{$schedule->id}}</td>
              <td>{{$schedule->bus->busname}}</td>
              <td>{{$schedule->bus->busnumber}}</td>
            <td>{{$schedule->fromcity}}</td>
            <td>{{$schedule->tocity}}</td>
            <td>{{$schedule->departure}}</td>
            <td>{{$schedule->arrival}}</td>
            <td>{{$schedule->date}}</td>       
            <td class="text-nowrap">
               <a href="{{ route('schedules.show',$schedule->id)}}" class="btn btn-primary"><i
                class="fa fa-eye"></i></a>
                <a href="{{ route('schedules.edit',$schedule->id)}}" class="btn btn-info " ><i class="fa fa-edit"></i></a>
                  <form style="display: inline-block;" action="{{ route('schedules.destroy', $schedule->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                  </form>
                   <a href="{{ route('bookings.create',$schedule->id)}}" class="btn btn-primary">Create Booking</a>
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