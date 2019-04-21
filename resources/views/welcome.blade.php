@extends('layouts.app') 

@section('content') 


@if (Auth::check())

    <div class="container">
        <h3>Project definition</h3>
        <p>In a small company there is a team which contains developers, project managers and marketing.
          They need a web based tool to track working hours on very project they have. 
          In this tracking owner of company wants to know on which project who was working, when,
          what he was doing, what is the status of task (open, closed, implementation etc . ),
          what is the percentage of complete. 
          The tasks are created by project managers and developers only for them. 
          <b>The purpose of a task is just time tracking not project management.</b></p>
    </div>

@else

    <h3>
    	You need to log in. <a href="{{ route('login') }}">Click here to login</a>
    
    </h3>



@endif 
@endsection