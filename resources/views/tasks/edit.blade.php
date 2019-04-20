@extends('layouts.app')
@extends('layouts.auth') 
@extends('layouts.validation_message')

@section('content')

<div class="container">
	<h1>Edit the Task</h1>

<form method="POST" action="{{ route('tasks.update', $task->id) }}">
	 @method('PATCH') 
	
	<div class="form-group">
		<label 	  for="name">Description:</label>
		<input name="name" class="form-control" value="{{$task->name}}"></input>	
	</div>
	
	<div class="form-group">
			<label for="start_date">Start date:</label>
			<input name="start_date" class="form-control" type="date" value="{{$task->start_date}}"></textarea>
	</div>
			
	<div class="form-group">
			<label for="end_date">End date:</label>
			<input name="end_date" class="form-control" type="date" value="{{$task->end_date}}"></textarea>
	</div>
	
	<div class="form-group">
			<label for="hour">Hour:</label>
			<input name="hour" class="form-control" type="number"  min="1" value="{{$task->hour}}"></textarea>
	</div>
	
	
	<div class="form-group">
			<label 	  for="task_status_id">status:</label>
			<select class="form-control" name="task_status_id">
    			 @foreach($taskStatus as $status)
    			 	@if($status->id == $task->task_status_id )
    			 		<option value="{{$status->id}}" selected>{{$status->description}}</option>
    			 	@else
    			 		<option value="{{$status->id}}">{{$status->description}}</option>
    			 	@endif
    			@endforeach
			</select>
	</div>
		
	<div class="form-group">
			<label 	  for="user">user:</label>
			<select class="form-control" name="user_id">
    			 @foreach($users as $user)
    			 	@if($user->id == $task->user_id )
    			 		<option value="{{$user->id}}" selected>{{$user->email}}</option>
    			 	@else
    			 		<option value="{{$user->id}}">{{$user->email}}</option>
    			 	@endif	
    			@endforeach
			</select>
	</div>
		
	<div class="form-group">
			<label 	  for="project">project:</label>
			<select class="form-control" name="project_id">
    			 @foreach($projects as $project)
    			 	@if($project->id == $task->project_id )
    			 		<option value="{{$project->id}}" selected>{{$project->name}}</option>
    			 	@else
    			 		<option value="{{$project->id}}">{{$project->name}}</option>
    			 	@endif
    				
    			@endforeach
			</select>
	</div>

	
	<div class="form-group">
		<button type="submit" name="update" class="btn btn-primary">Update task</button>
	</div>
{{ csrf_field() }}
</form>


</div>


@endsection