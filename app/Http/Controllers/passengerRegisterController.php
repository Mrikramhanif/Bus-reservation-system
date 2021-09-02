<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passenger;
use Auth;
use Hash;
use Session;
use Redirect;

class passengerRegisterController extends Controller
{
    public function showreagister(){
    	return view('frontpages.register');
    }

    public function register(Request $request){
    
      $request->validate([
      'name'=> 'required',
      'email'=> 'required',
      'password' => 'required|confirmed',
       'password_confirmation' => 'required'

      ]);
     
      //$rpassword = $request->only(['rpassword']);
     //$data = $request->only(['name','email','password']);
     
     
       $password = Hash::make('password');
       $passenger = new Passenger();	
       $data = [
      'name'=>$request->get('name'),
      'email'=>$request->get('email'),
      'password'=>$password
      ];
       $passenger->persist($data);
      
      

      
       return redirect('front')->with('success','You are register Successfully');
    }

    public function showlogin(){
    	return view('frontpages.login');
    }
    public function login(Request $request){
    	
          $request->validate([
         'name'=> 'required',
         'email'=> 'required',
         'password' => 'required|confirmed',
         'password_confirmation' => 'required'

          ]);

   // $credentials = $request->except(['_token']);
      $credentials = $request->only('email');
      $passenger = Passenger::where('email',$request->email)->first();
      if (isset($passenger)) {
         return redirect('front');
      }else{
         Session::flash ( 'message', "Invalid Credentials , Please try again." );
            return Redirect::back ();
      }


       

     

       


    }
}
