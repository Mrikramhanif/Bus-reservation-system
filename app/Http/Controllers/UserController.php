<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

//Importing laravel-permission models
use App\Models\Spatie\Role;
use App\Models\Spatie\Permission;

//Enables us to output flash messaging
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 

        $roles = Role::get();
        return view('/users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
        'name' =>'required',
        'email'=>'required',
        'password'=>'required'
        ]);
        
        $data = $request->only('email', 'name', 'password');
      
        $user = new User();
        $user->persist($data);


        $roles = $request['roles'];
        //Checking if a role was selected
        if (isset($roles)) {

            foreach ($roles as $role) {
                $role_r = Role::where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r); //Assigning role to user
            }
        }
        //Redirect to the users.index view and display message
        return redirect()->route('users.index')
            ->with('flash_message',
                'User successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::get();
        return view('users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
       $request->validate([
        'name'=>'required',
        'email'=>'required',
        'password'=>'required'
       ]);

        $data = $request->only(['name', 'email']);
        if ($request->has('password')) {
            $data['password'] = $request->get('password');
        }

        $user->persist($data);

        if ($request->has('roles')) {
            $user->roles()->sync($request->get('roles'));
        } else {
            $user->roles()->detach();
        }
        return redirect()->route('users.index')
            ->with('flash_message',
                'User successfully edited.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
       $user->delete();
       return redirect('users')->with('success','User deleted sucessfully');

    }
}
