<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Booking;
use App\Models\Schedule;
use App\Models\Bus;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $bookings = Booking::all();
         $bookings->load('schedule.bus');
        return view('bookings.index' ,compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Schedule $schedule=null)
    {   
    
        $schedule->load('bus','bookings');
        $seats=[];
        $tomatch=[];

       foreach ($schedule->bookings as $key => $book) {
            array_push($tomatch,$book->bus_seat);

       }
       $tomatch=collect($tomatch)->collapse();
        for ($i=1; $i <=$schedule->bus->seats ; $i++) {
              if (!in_array($i,$tomatch->toArray())) {
               $seats[$i]=$i;
                  //
                }
            }

        return view('bookings.create',compact('schedule','seats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Schedule $schedule=null)
    {   
        $request->validate([
        'bus_seat'     =>'required',
        ]);
        
        $schedule = $request->get('schedule_data');
        $booking = new Booking();
        $booking->bus_seat = $request->bus_seat;
        $booking->schedule()->associate($schedule);
        $booking->user()->associate(Auth::user()->id);
        $booking->save();
       
       // dd($booking);
       
        return redirect('/bookings')->with('success','Booking added successfullly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('bookings.show',compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
       
        return view('bookings.edit',compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {  
        $request->validate([
        'seats'     =>'required',
        ]);
        $bus_seats = $request->get('seats'); 
        $booking->bus_seat = $bus_seats;
     /*   $booking->schedule_id=$request->get('schedule_data');
        $booking->user_id = Auth::user()->id;*/
        $booking->save();
        
        return redirect('bookings')->with('success','Booking added successfullly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        
        $booking->delete();
        return redirect('bookings')->with('success', 'Booking deleted successfully');
    }
    public function passenger(Request $request)
    {
       
       $booking = new Booking();
       $request->validate([
        'bus_seat'     =>'required',
        ]);
        
        $bus_seats = $request->get('bus_seat');
        $booking->bus_seat = $bus_seats;
        $booking->user_id = Auth::user()->id;
        $booking->schedule()->associate($request->get('schedule_data'));
        $booking->save();
        return redirect('front');
    }
}
