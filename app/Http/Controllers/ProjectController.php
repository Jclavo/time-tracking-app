<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Project;

class ProjectController extends Controller
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
            $projects = Project::all();
            return view('projects.index', compact('projects'));
        } else {
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
            return view('projects.create');
        } else {
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
                'name' => 'required',
                'description' => 'required'
            ]);

            $project = new project([
                'name' => $request->get('name'),
                'description' => $request->get('description')
            ]);

            $project->save();
            return redirect('/projects')->with('success', 'project saved!');
        } else {
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
    public function edit(Project $project)
    {
        //
        if (Auth::check()) {
            return view('projects.edit',compact('project'));
        } else {
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
                'name' => 'required',
                'description' => 'required'
            ]);
            $project = project::find($id);
            $project->name = $request->get('name');
            $project->description = $request->get('description');

            $project->save();
            
            return redirect('/projects')->with('success', 'project updated!');
        } else {
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        
        if (Auth::check()) {
            
            $project->delete();
            return redirect('/projects')->with('success', 'project deleted!');
        }
        else{
            return redirect('/');
        }
    }
}
