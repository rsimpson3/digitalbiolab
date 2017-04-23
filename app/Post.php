<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
// extends our model NOT Eloquent, already handled in Model.php

class Post extends Model
{
    
   // Define relationship between posts & comments
	public function comments()

	{

		return $this->hasMany(Comment::class);
	}

	public function user()
    {

    	return $this->belongsTo(User::class);

    }

	
	public function addComment($body)
	{

		Comment::create([

    		'body' => $body,
    		'post_id' => $this->id,
    		'user_id' => auth()->id

    	]);
		
		//$this->comments()->create(compact('body'));


	}
}
