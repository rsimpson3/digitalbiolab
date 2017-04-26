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

        // refactor > View Composer 
        $archives = Post::archives();

                                // remove local archives variable
    	return view('posts.index', compact('posts'));
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

        // Flash message 
        session()->flash('message', 'Your post is now published!');


    	// then redirect
    	return redirect('/post');
    }


}
