<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\UserType;

class UserController extends Controller
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
            //$levels = Level::pluck('description', 'id')->toArray();
            //$userTypes = Usertype::all(['id', 'description']);
            //return view('users.create',compact('userTypes'));
            $users = User::all();
            return view('users.index',compact('users'));
        }
        else{
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

            $userTypes = Usertype::all(['id', 'description']);
            return view('users.create',compact('userTypes'));
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'          => 'required',
            'email'         => 'required',
            'user_type_id'  => 'required'
        ]);
        
        // $fillable = array('make', 'model', 'produced_on');
        $admin_check = 0;
        if ($request->get('admin_check')) {
            $admin_check = 1;
        }
        
        
        $user = new user([
            'name'          => $request->get('name'),
            'email'         => $request->get('email'),
            'password'      => bcrypt($request->get('email')),
            'user_type_id'  => $request->get('user_type_id'),
            'admin'         => $admin_check,
        ]);
        
        $user->save();
        return redirect('/users')->with('success', 'user saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
