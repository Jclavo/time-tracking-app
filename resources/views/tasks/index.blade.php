@extends('layouts.app') 
@extends('layouts.auth') 
@extends('layouts.alert_message') 

@section('content')

<div class="container">

	<h2>Tasks List</h2>
	<a href="{{ route('tasks.create')}}" class="btn btn-primary">Add new Task</a>
	<table class="table">
		<thead>
			<tr>
				<td >Name</td>
				<td >Start date</td>
				<td >End date</td>
				<td >Hours</td>
				<td >Status</td>
				<td >User</td>
				<td >Project</td>
				<td colspan = 2>Actions</td>
			</tr>
		</thead>
		<tbody>
			@foreach($tasks as $task)
			<tr>
				<td>{{$task->name}}</td>
				<td>{{$task->start_date}}</td>
				<td>{{$task->end_date}}</td>
				<td>{{$task->hour}}</td>
				<td>{{$task->taskStatus->description}}</td>
				<td>{{$task->user->email}}</td>
				<td>{{$task->project->name}}</td>
				<td>
					 <a href="{{ route('tasks.edit',$task->id)}}" class="btn btn-primary">Edit</a>
				</td>	
				<td>
                    <form action="{{ route('tasks.destroy', $task->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
				</td>
			</tr>

			@endforeach
		</tbody>
	</table>


</div>

@endsection
