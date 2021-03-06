<?php

namespace App;

// Import Carbon to filter dates 
use Carbon\Carbon;

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
    		'user_id' => auth()->id()

    	]);
		
		//$this->comments()->create(compact('body'));

	}

	public function scopeFilter($query, $filters)
	{

		$posts = Post::latest();

        if ($month = $filters['month']) {

            // Convert month into number
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year']) {

            $query->whereYear('created_at', $year);
        }

        $posts = $posts->get();

	}

	public static function archives() 
	{

		return static::selectRaw('year(created_at) year, monthname (created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) asc')
            ->get()
            ->toArray();


	}

	// 

	public function tags ()
	{

		return $this->belongsToMany(Tag::class);

	}
}
