<?php

namespace App\Http\Controllers;


use App\Task;

use Illuminate\Http\Request;

class WelcomeController extends Controller {

    /**
    * Responds to requests to GET /
    */
    public function getIndex() {

		$tasks = Task::all();

		return view('partials.index', compact('tasks'));
    }
}