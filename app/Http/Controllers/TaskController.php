<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Task;
use App\TaskStatus;
use App\User;
use App\Project;

class TaskController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Auth::check()) {
            
            $tasks = Task::all();
            return view('tasks.index', compact('tasks'));
        }
        else
        {
            return redirect('/');
        }
        

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (Auth::check()) {

            $taskStatus = TaskStatus::all(['id', 'description']);
            $users = User::all(['id', 'email']);
            $projects = Project::all(['id', 'name']);
            return view('tasks.create',compact('users','projects','taskStatus'));
        }
        else{
            return redirect('/');
        }

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        if (Auth::check()) {
            $request->validate([
                'name'            => 'required',
                'start_date'      => 'required',
                'end_date'        => 'required',
                'hour'            => 'required',
                'task_status_id'  => 'required',
                'user_id'         => 'required',
                'project_id'      => 'required'
                
            ]);
            
            // $fillable = array('make', 'model', 'produced_on');
            
            $task = new task([
                'name'              => $request->get('name'),
                'start_date'        => $request->get('start_date'),
                'end_date'          => $request->get('end_date'),
                'hour'              => $request->get('hour'),
                'task_status_id'    => $request->get('task_status_id'),
                'user_id'           => $request->get('user_id'),
                'project_id'        => $request->get('project_id'),
            ]);
            
            $task->save();
            return redirect('/tasks')->with('success', 'task saved!');
        }
        else{
            return redirect('/');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
        if (Auth::check()) {
            $taskStatus = TaskStatus::all(['id', 'description']);
            $users = User::all(['id', 'email']);
            $projects = Project::all(['id', 'name']);
            return view('tasks.edit',compact('task','users','projects','taskStatus'));
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if (Auth::check()) {
            $request->validate([
                'name'            => 'required',
                'start_date'      => 'required',
                'end_date'        => 'required',
                'hour'            => 'required',
                'task_status_id'  => 'required',
                'user_id'         => 'required',
                'project_id'      => 'required'
                
            ]);
            
            $task = Task::find($id);
            $task->name             = $request->get('name');
            $task->start_date       = $request->get('start_date');
            $task->end_date         = $request->get('end_date');
            $task->hour             = $request->get('hour');
            $task->task_status_id   = $request->get('task_status_id');
            $task->user_id          = $request->get('user_id');
            $task->project_id       = $request->get('project_id');
            $task->save();
            
            return redirect('/tasks')->with('success', 'task updated!');
        }
        else{
            return redirect('/');
        }
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {

        if (Auth::check()) {
            
            $task->delete();
            return redirect('/tasks')->with('success', 'task deleted!');
        }
        else{
            return redirect('/');
        }
    }
    
    /*
     * 
     */
    
    public function report()
    {
        
        if (Auth::check()) {
            $tasks = Task::all();
            $users = User::all();
            return view('tasks.report', compact('tasks','users'));
            //return view('tasks.report');
        }
        else{
            return redirect('/');
        }
       
    }


}