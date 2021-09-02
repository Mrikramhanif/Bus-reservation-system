<?php

namespace App\Models;

class Booking extends Model
{

	protected $casts = [
	    'bus_seat' => 'array', // Will convarted to (Array)
	];	  
    public function user(){

	 return  $this->belongsTo(User::class);
	}
	
	 public function schedule(){

    	return $this->belongsTo(Schedule::class);
    }
}
