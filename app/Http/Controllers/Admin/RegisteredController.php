<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisteredController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.users.index')->with('users', $user);
    }

    public function edit($id)
    {
        $user_roles = User::find($id);
        return view('admin.users.edit', compact('user_roles'));
    }

    public function updaterole(Request $request, $id)
    {
        $user = User::find($id);

        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->role_as = $request->input('roles');

        $user->update();

        return back()->with('status', 'Role updated Succesfully');

    }

}
