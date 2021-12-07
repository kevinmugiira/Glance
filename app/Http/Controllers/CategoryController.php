<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('sidebar menu.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('sidebar menu.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


         request()->validate([
            'name' => 'required',
            'type' => 'required',
        ]);



        $category = new Category();

        $category->name = $request->input('name');
        $category->type = $request->input('type');


        $category->save();

        if ($category) {
            return back()
                ->with('success', 'Category added successfully');
        } else {
            return back()
                ->with('fail', 'something went wrong');
        }

//        return redirect()->route('list-category')
//           ->with('Success', 'category added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $cat = Category::all();

        return view('sidebar menu.category.show',compact('cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $cat = Category::find($id=1);
        return view('sidebar menu.category.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Category $category)
    {
        request()->validate([
            'name' => 'required',
            'type' => 'required'
        ]);

        $category->name = \request('name');
        $category->type = \request('type');

        $category->save();

        return view('sidebar menu.category.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->back()->with('status','Category Deleted Successfully');
    }

    public function check()
    {
        return view('myform');
    }
}
