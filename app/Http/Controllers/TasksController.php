<?php

namespace App\Http\Controllers;

// import Task class from model
use App\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
    	// $tasks = DB::table('tasks')->latest()->get();
		$tasks = Task::all();

		return view('partials.index', compact('tasks'));
    }

    public function show(Task $task)  // Task::find(wildcard)
    {
    	// $task = DB::table('tasks')->find($id);
		// $task = Task::find($id);

		return view('partials.show', compact('task'));
    }
}
