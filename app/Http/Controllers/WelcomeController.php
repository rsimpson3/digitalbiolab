<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller {

    /**
    * Responds to requests to GET /
    */
    public function getIndex() {


        return view('welcome');
    }
}