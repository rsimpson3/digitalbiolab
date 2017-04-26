<?php

//Route::get('/', 'WelcomeController@getIndex'); # Home

# -----------------------------------------
# Tasks 
# -----------------------------------------

Route::get('/tasks', 'TasksController@index'); 

Route::get('/tasks/{task}', 'TasksController@show'); 

// Route::get('/post', 'PostsController@index');



# -----------------------------------------
# Dynamic Blogs Exercise
# -----------------------------------------

Route::get('/post', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts/tags/{tag}', 'TagsController@index');


Route::post('/posts/{post}/comments', 'CommentsController@store');


# ----------------------------------------
# User Registration
# ----------------------------------------

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');


# ----------------------------------------
# User Session
# ----------------------------------------
Route::get('/login', 'SessionsController@create')->name('login');

Route::get('/logout', 'SessionsController@destroy');

Route::post('/login', 'SessionsController@store');

# ----------------------------------------
# About Information
# ----------------------------------------

Route::get('/about', function () {
    return view('about');
}); # About

# ----------------------------------------
# About Information
# ----------------------------------------


Route::get('/debug', function() {

	echo '<pre>';

	echo '<h1>Environment</h1>';
	echo App::environment().'</h1>';

	echo '<h1>Debugging?</h1>';
	if(config('app.debug')) echo "Yes"; else echo "No";

	echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
	//print_r(config('database.connections.mysql'));

	echo '<h1>Test Database Connection</h1>';
	try {
		$results = DB::select('SHOW DATABASES;');
		echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
		echo "<br><br>Your Databases:<br><br>";
		print_r($results);
	}
	catch (Exception $e) {
		echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
	}

	echo '</pre>';

});
