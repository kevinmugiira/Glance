<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::where('status','!=','2')->get();
        return view('admin.collection.group.index', compact('groups'));
    }

    public function create()
    {
        return view('admin.collection.group.create');
    }

    public function store(Request $request)
    {
        $groups = new Group();

        $groups->url = $request->input('url');
        $groups->name = $request -> input('name');
        $groups->describe = $request -> input('describe');

        if ($request->input('status') == true) {
            $groups->status = '1';
        }else{
            $groups->status = '0';
        }
        $groups->save();

        return redirect()->back()->with('status', 'Group data added successfully!');

    }

    public function edit($id)
    {
        $group = Group::find($id);
        return view('admin.collection.group.edit', compact('group'));

    }

    public function update(Request $request, $id)
    {
        $group = Group::find($id);

        $group->name = $request->input('name');
        $group->describe = $request->input('describe');
        $group->status = $request->input('status') == true ? '1' : '0';

        $group->update();

        return redirect('group')
            ->with('status', 'Group Data updated Successfully!');
    }

    public function delete($id)
    {
        $group = Group::find($id);
        $group->status = "2"; //0->show, 1->hide, 2->delete
        $group->update();

        return redirect()->back()
            ->with('status','Data Deleted!');
    }

    public function deletedrecords()
    {
         $groups = Group::where('status','2')->get();
         return view('admin.collection.group.deleted', compact('groups'));
    }

    public function deletedrestore($id)
    {
        $group = Group::find($id);
        $group->status = "0"; //0->show, 1->hide, 2->delete
        $group->update();

        return redirect('group')
            ->with('status','Group record restored Successfully!');
    }
}
