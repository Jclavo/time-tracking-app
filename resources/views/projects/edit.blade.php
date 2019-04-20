@extends('layouts.app')
@extends('layouts.auth') 
@extends('layouts.validation_message')

@section('content')

<div class="container">
	<h1>Edit the project</h1>

<form method="POST" action="{{ route('projects.update', $project->id) }}">
	 @method('PATCH') 
	 <div class="form-group">
		<textarea name="name" class="form-control">{{$project->name }}</textarea>	
	</div>
	<div class="form-group">
		<textarea name="description" class="form-control">{{$project->description }}</textarea>	
	</div>


	<div class="form-group">
		<button type="submit" name="update" class="btn btn-primary">Update project</button>
	</div>
{{ csrf_field() }}
</form>


</div>


@endsection