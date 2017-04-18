<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database;

class WelcomeController extends Controller {

    /**
    * Responds to requests to GET /
    */
    public function getIndex() {

		$tasks = DB::table('tasks')->get();

		return $tasks;
        // return view('welcome', compact('tasks'));
    }
}