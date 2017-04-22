<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    // New user registration
    public function create()
    {

    	return view('sessions.create');
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

    	$user = User::create(request(['name', 'email', 'password']));

    	// Sign in w Auth facade
    	auth()->login($user);


    	// Redirect to home page. 
    	return redirect()->home();
    }

}
