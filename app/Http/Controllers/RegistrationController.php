<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    // New user registration
    public function create()
    {

    	return view('registration.create');
    }

    // store user data 
	public function store()
    {
    	// Validate form
    	$this->validate(request(), [

    		'name' => 'required',

    		'email' => 'required|email',

    		'password' => 'required|confirmed'

    		]);

    	// Create and save user
        // Encrypt passwords when sending to dbase

    	$user = User::create([

            'name' =>request('name'),
            'email' => request ('email'),
            'password' => Hash::make(request('password'))

        ]);

    	// Sign in w Auth facade
    	auth()->login($user);


    	// Redirect to home page. 
    	return redirect()->home();
    }

}
