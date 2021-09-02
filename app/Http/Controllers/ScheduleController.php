<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Booking;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::all();
        $schedules->load('bus');
         
        return view('schedules.index',compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(bus $bus =null)
    {     
        return view('schedules.create',compact('bus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Bus $bus= null)
    {

        $request->validate([
        'fromcity'=>'required',
        'tocity'  =>'required',
        'departure'=>'required',
        'arrival' =>'required',
        'date'    =>'required'
 
        ]);
       
        $shcedules = new Schedule();

         if (!$request->get('bus_schedule_data')) {
             $data = $request->only(['fromcity','tocity','departure','arrival','date']);
         }else{
            $shcedules->bus_id = $request->get('bus_schedule_data');
             $data = $request->only(['fromcity','tocity','departure','arrival','date']);
         }
        
        $shcedules->persist($data);
        return redirect('schedules')->with('success','shedule Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        return view('schedules',compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
       return view('schedules',compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
         'fromcity'=>'required',
        'tocity'  =>'required',
        'departure'=>'required',
        'arrival' =>'required',
        'date'    =>'required'
        ]);
         if (!$request->get('bus_schedule_data')) {
             $data = $request->only(['fromcity','tocity','departure','arrival','date']);
         }else{
            $shcedules->bus_id = $request->get('bus_schedule_data');
             $data = $request->only(['fromcity','tocity','departure','arrival','date']);
         }
        
        $shcedules->persist($data);
        return redirect('schedules')->with('success','shedule Added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect('/schedules');
    }
}
