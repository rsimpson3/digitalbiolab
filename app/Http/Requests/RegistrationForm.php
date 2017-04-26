<?php

namespace App\Http\Requests;

use App\User;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Http\FormRequest;
//  encryption class
use Illuminate\Support\Facades\Hash;


class RegistrationForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            // validation rules imported from RegistrationController - Validate form
            'name' => 'required',

            'email' => 'required|email',

            'password' => 'required|confirmed'
            
        ];
    }

    public function persist()
    {
        // Create and save user

        $user = User::create(

             $this->only(['name','email', 'password'])

        );

        // Encrypt password 
        $user['password'] = Hash::make($user['password']);

        $user->save();

        // Sign in w Auth facade
        auth()->login($user);

        // Send Welcome Email
        \Mail::to($user)->send(new Welcome($user));

    }

}
