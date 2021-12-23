<?php

namespace App\Http\Controllers;

use App\Models\User;
//use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function login()
    {
        return view('sidebar menu.logiin');
    }


    public function index()
    {
        #$userss = User::find($id);
        return view('profile.admin-show');
    }

    public function sellershow()
    {
        return view('profile.seller-show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sidebar menu.tables');
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
    public function edit()
    {
        $user = Auth::user()->get();

        return view('profile.update', compact('user',));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profileupdate(Request $request, $id)
    {
//
//        $user_id = Auth::user();
//        $user = User::findOrFail($user_id);
        $user = User::find($id);


        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->mobile = $request->input('mobile');
        $user->line1 = $request->input('line1');
        $user->line2 = $request->input('line2');
        $user->city = $request->input('city');
        $user->county = $request->input('county');
        $user->postcode = $request->input('postcode');

        #dump($request);
        if ($request->hasFile('image')) {
            $destination = 'uploads/profile' . $user->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/profile/', $filename);
            $user->image = $filename;

        }

            $user->update();

            return redirect('profile.admin-show')
                ->with('status', 'Profile updated Successfully!');


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

    public function next()
    {
        return view ('profile.admin-show');
    }
}
