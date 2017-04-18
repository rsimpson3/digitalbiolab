@extends('layouts.master_welcome')

@section('title')
    The Digital BioLab Web App
@stop

@section('mylist')
	<ul> 
		
		@foreach ($tasks as $task)

			<li> {{ $task->body }} </li>

		@endforeach

	</ul>
	
@stop

