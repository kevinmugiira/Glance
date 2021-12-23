<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class RegisteredController extends Controller
{
    public function index(Request $request)
    {
        #$users = User::paginate(2);
        $users = User::where('role_as', $request->get('role_as'))->get();
        return view('admin.users.index',compact('users'));
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
        $user->role_as = $request->input('role_as');
        $user->isban = $request->input('isban');

        #dd($request);

        $user->update();

        return back()->with('status', 'User Updated Succesfully');

    }

}
