
@extends('layouts.app') 

@section('other_styles')
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
	<link href="{{ asset('css/calendar/fullcalendar.min.css') }}" rel="stylesheet">
	
    <!--Styling for calendar-->
    
    <style>

    #calendar {
    max-width: 1000px;
    margin: 0 auto;
    }
    </style>

@stop

@section('content')


<div class="container">
	<form method="POST" class="form-inline" action="{{ route('tasks.tracking') }}">

		<div class="form-group">
			<label 	  for="user_id">Users:</label>
			<select class="form-control" name="user_id">
    			 @foreach($users as $user)
    			 	@if($user->id == $user_id_selected )
    			 		<option value="{{$user->id}}" selected>{{$user->email}}</option>
    			 	@else
    			 		<option value="{{$user->id}}">{{$user->email}}</option>
    			 	@endif
    				
    			@endforeach
			</select>
		</div>
		<div class="form-group">
			<label 	  for="project">Projects:</label>
			<select class="form-control" name="project_id">
    			 @foreach($projects as $project)
    			 	@if($project->id == $project_id_selected )
    			 		<option value="{{$project->id}}" selected>{{$project->name}}</option>
    			 	@else
    			 		<option value="{{$project->id}}">{{$project->name}}</option>
    			 	@endif
    				
    			@endforeach
			</select>
		</div>
		
		<div class="form-group">
			@if( $user_check == 'X')
    			 <input type="checkbox" name="user_check" checked>
    		@else
    			<input type="checkbox" name="user_check" >
    		@endif
    		<label class="form-check-label" for="user_check">User</label>
  		</div>
  		
  		<div class="form-group">
  			@if( $project_check == 'X')
  				<input type="checkbox" class="form-check-input" name="project_check" checked>
  			@else
  				<input type="checkbox" class="form-check-input" name="project_check">
  			@endif
    		<label class="form-check-label" for="projectCheck">Project</label>
  		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Search</button>
		</div>
		<div class="form-group">
			@if( $count_task == 0)
  				<button type="submit" class="btn btn-danger" disabled >Total Tasks found: {{$count_task}}</button>
  			@else
  				<button type="submit" class="btn btn-success" disabled >Total Task found: {{$count_task}}</button>
  				<button type="submit" class="btn btn-info" disabled >Total Hours found: {{$count_hours}}</button>
  			
  			@endif
		</div>
		{{ csrf_field() }}
	</form>
</div>

<br>



<div id='calendar'></div>

@endsection


@section('other_scripts')
	
    <script src="{{ asset('js/jquery/jquery-3.4.0.min.js') }}"></script>
    <script src="{{ asset('js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('js/calendar/fullcalendar.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({

            	<!--Header Section Including Previous,Next and Today-->
            	header: {
            	left: 'prev,next today',
            	center: 'title',
            	right: 'month,basicWeek,basicDay'
            	},

            	<!--Event Section-->
            	eventLimit: true, // allow "more" link when too many events
                
                // put your options and callbacks here
                events : [
                    @foreach($tasks as $task)
                    {
                        title : '{{ $task->name }}' + 
                        		//'   [' + '{{$task->taskStatus->description}}' + '] ' +
                        		'	[ Hours:' + '{{$task->hour}}' + '] ' ,
                        		
                        start : '{{ $task->start_date }}',
                        end   : '{{ $task->end_date }}'      
                    },
                    @endforeach
                ]
            })
        });
    </script>
@stop
