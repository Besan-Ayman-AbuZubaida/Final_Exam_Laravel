<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','desc');
        return view('users.index', compact('users'));
    }

  
    public function create()
    {
        return view('users.create');
    }

    
    public function store(Request $request)
    {
      
        User::create($request->post());

        return redirect()->route('users.index')->with('success','User has been created successfully.');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

   
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

 
    public function update(Request $request, User $user)
    {
               
        $user->fill($request->post())->save();

        return redirect()->route('users.index')->with('success','user Has Been updated successfully');
    }

  
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','user has been deleted successfully');
    }
}
