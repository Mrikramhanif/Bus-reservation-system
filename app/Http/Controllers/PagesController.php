<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Booking;
use App\Models\Bus;

class PagesController extends Controller
{
    public function home(){
        $buses = Bus::all()->load('schedule');
       
        foreach ($buses as $key => $bus) {
            foreach ($bus->schedule as $k => $schedule) {
                  
                   $fromcity= $schedule->pluck('fromcity','id','bus_id');
                   $tocity  = $schedule->pluck('tocity','id','bus_id');
                   $date    = $schedule->pluck('date','id','bus_id');
                   $arrival = $schedule->pluck('arrival','id','bus_id');
                   $departure = $schedule->pluck('departure','id','bus_id')

                  ;

            }
        }
        $schedules= Schedule::all();
        $schedules->load('bus','bookings'); 
        
       

        $seats=[];
        $tomatch=[];
       foreach ($schedules as $key => $schedule) {
            
       foreach ($schedule->bookings as $key => $book) {
        
            array_push($tomatch,$book->bus_seat);
            
       }
       }
       $tomatch=collect($tomatch)->collapse();
        for ($i=1; $i <=$schedule->bus->seats ; $i++) {
              if (!in_array($i,$tomatch->toArray())) {
               $seats[$i]=$i;
                  //
                }
            }
           // dd($buses);
    $selectbus = $buses->pluck('busname','id');
    return view('front',compact('selectbus','fromcity','tocity','date','buses','schedule','arrival','departure','seats','bus','schedules'));
    }
    public function about(){
    	return view('frontpages.about');
    }
    public function service(){
    	return view('frontpages.service');
    }
    public function contact(){
    	return view('frontpages.contact');
    }
    public function blog(){
    	return view('frontpages.blog');
    }

  /*  public function login(){
     	return view('frontpages.login');
     }
     public function register(){
     	return view('frontpages.register');
     }*/
     public function search(){
        return view('frontpages.search');
     }
     public function bookfirst(Request $request){
       dd($request);
/*
        $busdata = $request->get('bus_data');
        $seats=[];
        $tomatch=[];

           foreach ($schedule->bookings as $key => $book) {
          
            array_push($tomatch,$book['bus_seat']);
       }
       $tomatch=collect($tomatch)->collapse();
        for ($i=1; $i <=$schedule->bus->seats ; $i++) {
              if (!in_array($i,$tomatch->toArray())) {
               $seats[$i]=$i;
                  //
                }
            }
          */
        
       
      
    

        return view('frontpages.bookfirst');
     }
     public function booksecond(){
        return view('frontpages.booksecond');
     }
     public function bookthird(){
        return view('frontpages.bookthird');
     }
}
