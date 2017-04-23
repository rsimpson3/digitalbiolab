<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\Auth;

class CommentsController extends Controller
{
    public function store(Post $post)
    {

    	// server level validation
    	$this->validate(request(), ['body' => 'required|min:2']);

    	$post->addComment(request('body'));

    	return back();

    }


}
