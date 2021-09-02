@extends('layouts.app')

@section('title', '| Projects')
@section('content')
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
    <h1 class="display-3">Booking</h1>
      <!-- Row -->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default card-view">
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <div class="table-wrap">
                    <div class="table-responsive">
                    
                   {{--    <a href="{{route('bookings.create')}}" class="btn btn-primary">Create Booking</a> --}}
                   
                      <table id="datable_1" class="table table-hover display  pb-30" >
                        <thead>
                          <tr class="text-nowrap">
                           <th>id</th>
                           <th>Bus Name</th>
                           <th>Bus Type</th>
                           <th>Bus Seat</th>
                            <th>Fromcity</th>
                            <th>Tocity</th>
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
                           <th>Bus Type</th>
                            <th>Bus Seat</th>
                            <th>Fromcity</th>
                            <th>Tocity</th>
                            <th>Departure</th>
                            <th>Arrival</th>
                            <th>Date</th>
                            <th>Action</th>
                          </tr>
                        </tfoot>
                        <tbody>
             @foreach ($bookings as $booking)

            <tr class="text-justify">
            	<td>{{$booking->id}}</td>
              <td>{{$booking->schedule->bus->busname}}</td>
              <td>{{$booking->schedule->bus->bustype}}</td>
            <td>{{ implode(' , ',$booking->bus_seat) }}</td>
             <td>{{$booking->schedule->fromcity}}</td>
            <td>{{$booking->schedule->tocity}}</td>
            <td>{{$booking->schedule->departure}}</td>
             <td>{{$booking->schedule->arrival}}</td>
             <td>{{$booking->schedule->date}}</td>          
               
            <td class="text-nowrap">
               <a href="{{ route('bookings.show',$booking->id)}}" class="btn btn-primary"><i
                class="fa fa-eye"></i></a>
                <a href="{{ route('bookings.edit',$booking->id)}}" class="btn btn-info " ><i class="fa fa-edit"></i></a>
                  <form style="display: inline-block;" action="{{ route('bookings.destroy', $booking->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                  </form>
                  
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