<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    
    public function __construct()
    {

        $this->middleware('guest', ['except' => 'destroy']);

    }

    public function create()
    {

    	return view('sessions.create');
    }

    public function store()
    {
        //Attempt to auth user
        if (! auth()->attempt(request(['email', 'password']))) {

            // If not, redirect to registration
            return back();

        };

        // Redirect to homepage

        return redirect()->home();
    }

    public function destroy()
    {

    	auth()->logout();

    	return redirect()->home();
    	
    }
}
