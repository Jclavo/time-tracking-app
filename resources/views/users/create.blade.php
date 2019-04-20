@extends('layouts.app')
@extends('layouts.auth') 
@extends('layouts.validation_message')

@section('content')

<div class="container">


	<h2>Add New User</h2>

	<form method="POST" action="{{ route('users.store') }}">

		<div class="form-group">
			<label for="name">Name:</label>
			<input name="name" class="form-control"></input>
		</div>
		
		<div class="form-group">
			<label for="email">Email:</label>
			<input name="email" class="form-control" type="email"></input>
		</div>
		
		<div class="form-group">
			<label 	  for="level">type:</label>
			<select class="form-control" name="user_type_id">
    			 @foreach($userTypes as $userType)
    				<option value="{{$userType->id}}">{{$userType->description}}</option>
    			@endforeach
			</select>
		</div>
		
		<div class="form-group">
            <input type="checkbox" class="form-check-input" id="admin">
            <label class="form-check-label" for="admin">Admin</label>
        </div>
		

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Add user</button>
		</div>
		{{ csrf_field() }}
	</form>


</div>

@endsection
