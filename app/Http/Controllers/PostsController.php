<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    
    // constructor function
    public function __construct()
    {

        $this->middleware('auth')->except(['index', 'show']);
    }

    // *** Any guest can see posts 
    public function index () 
    {
    	
        $posts = Post::latest()

            // send to method on Post model
            ->filter(request(['month', 'year']))

            ->get(); 

        // Temporary > will move later
        $archives = Post::selectRaw('year(created_at) year, monthname (created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) asc')
            ->get()
            ->toArray();

    	return view('posts.index', compact('posts', 'archives'));
    }//


    // *** Any guest can see posts 
    public function show (Post $post) 
    {

        return view('posts.show', compact('post'));
    }


    // *** Only signed in user
    public function create () 
    {
    	return view('posts.create');
    }


    // *** Only signed in user
    public function store () 
    {
    	// serverside validation required
    	$this->validate(request(), [

    		'title' => 'required',
    		'body' => 'required'
    		]);

        auth()->user()->publish(

            new Post(request(['title', 'body']))

        );

    	// then redirect
    	return redirect('/post');
    }


}
