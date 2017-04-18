</!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> My Tasks </h1>
	<ul> 
		@foreach ($tasks as $task)

			{{-- Make each tasks a link --}}
			<li> 
				<a href="/tasks/{{ $task->id}}"> {{ $task->body }} 
				</a>
			</li> 

		@endforeach
</body>
</html>