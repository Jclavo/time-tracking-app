@extends('layouts.app') 
@extends('layouts.auth') 
@extends('layouts.alert_message') 

@section('content')

<div class="container">

	<h2>Projects List</h2>
	<a href="{{ route('projects.create')}}" class="btn btn-primary">Add new project</a>
	<table class="table">
		<thead>
			<tr>
				<td >Name</td>
				<td >Description</td>
				<td colspan = 2>Actions</td>
			</tr>
		</thead>
		<tbody>
			@foreach($projects as $project)
			<tr>
				<td>{{$project->name}}</td>
				<td>{{$project->description}}</td>
				<td>
					 <a href="{{ route('projects.edit',$project->id)}}" class="btn btn-primary">Edit</a>
				</td>	
				<td>
                    <form action="{{ route('projects.destroy', $project->id)}}" method="post">
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