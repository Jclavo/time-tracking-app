@extends('layouts.app') 
@extends('layouts.auth') 
@extends('layouts.alert_message') 

@section('content')

<div class="container">

	<h2>users List</h2>
	<a href="{{ route('users.create')}}" class="btn btn-primary">Add new user</a>
	<table class="table">
		<thead>
			<tr>
				<td >user</td>
				<td >email</td>
				<td >type</td>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->userType->description}}</td>
			</tr>

			@endforeach
		</tbody>
	</table>

</div>

@endsection