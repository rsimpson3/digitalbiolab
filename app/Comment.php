<?php

namespace App;

class Comment extends Model
{
    // Define where comments belong, to one post
    public function post()
    {

    	return $this->belongsTo(Post::class);

    }

    public function user()
    {

    	return $this->belongsTo(User::class);

    }


}
