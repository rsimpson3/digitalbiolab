<?php

namespace App\Http\Controllers;

use App\Post;

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
    	$posts = Post::latest()->get();

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

    	// then redirect
    	return redirect('/post');
    }


}
