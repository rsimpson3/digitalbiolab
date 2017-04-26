<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;


class RegistrationController extends Controller
{
    // New user registration
    public function create()
    {

    	return view('registration.create');
    }

    // store user data 
	public function store(RegistrationForm $form)
    {

        // send form request to Form Object
        $form->persist();

        session()->flash('message', 'Thanks for signing up!');

    	// Redirect to home page. 
    	return redirect()->home();
    }

}
