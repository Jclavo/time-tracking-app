@extends('layouts.app')
@extends('layouts.auth') 
@extends('layouts.validation_message')

@section('content')

<div class="container">


	<h2>Add New Task</h2>

	<form method="POST" action="{{ route('tasks.store') }}">

		<div class="form-group">
			<label 	  for="name">Name:</label>
			<textarea name="name" class="form-control"></textarea>
		</div>
		
		<div class="form-group">
			<label for="start_date">Start date:</label>
			<input name="start_date" class="form-control" type="date"></textarea>
		</div>
		
		<div class="form-group">
			<label for="end_date">End date:</label>
			<input name="end_date" class="form-control" type="date"></textarea>
		</div>
		
		<div class="form-group">
			<label for="hour">Hour:</label>
			<input name="hour" class="form-control" type="number"  min="1"></textarea>
		</div>

		<div class="form-group">
			<label 	  for="task_status_id">status:</label>
			<select class="form-control" name="task_status_id">
    			 @foreach($taskStatus as $status)
    				<option value="{{$status->id}}">{{$status->description}}</option>
    			@endforeach
			</select>
		</div>
		
		<div class="form-group">
			<label 	  for="user">user:</label>
			<select class="form-control" name="user_id">
    			 @foreach($users as $user)
    				<option value="{{$user->id}}">{{$user->email}}</option>
    			@endforeach
			</select>
		</div>
		
		<div class="form-group">
			<label 	  for="project">project:</label>
			<select class="form-control" name="project_id">
    			 @foreach($projects as $project)
    				<option value="{{$project->id}}">{{$project->name}}</option>
    			@endforeach
			</select>
		</div>
		
		

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Add Task</button>
		</div>
		{{ csrf_field() }}
	</form>


</div>

@endsection
