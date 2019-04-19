@extends('layouts.app')
@extends('layouts.auth') 
@extends('layouts.validation_message')

@section('content')

<div class="container">


	<h2>Add New Project</h2>

	<form method="POST" action="{{ route('projects.store') }}">

		<div class="form-group">
			<label for="name">Name:</label>
			<input name="name" class="form-control"></input>
		</div>
		
		<div class="form-group">
			<label for="description">Description:</label>
			<textarea name="description" class="form-control"></textarea>
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Add user</button>
		</div>
		{{ csrf_field() }}
	</form>


</div>

@endsection
