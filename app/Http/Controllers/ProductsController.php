<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Product::all();
        return view('sidebar menu.products.index',compact('prod'));
        //return view('myform');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sidebar menu.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {



        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);




        $product = new Product();

        $product->name = $request->input('name');
        $product->description = $request->input('description');

        if ($request->hasFile('file_path')) {

            $file = $request->file('file_path');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/products/', $filename);
            $product->file_path = $filename;

           } else {
             return $request;
             $product->file_path = '';
        }


        $product->save();


        if ($product) {
            return back()
                ->with('success', 'Product added successfully');
        } else {
            return back()
                ->with('fail', 'something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $prod = Product::all();

        return view('sidebar menu.products.show',compact('prod'));
        #return view('sidebar menu.form.product-list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $prod = Product::find($id);
        #dd($prod);
        return view('sidebar menu.products.edit',compact('prod'));
        /*
        $prod = Product::all();
        return view('sidebar menu.products.edit', compact('prod'));
        */
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
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $product = Product::find($id);


        $product->name = $request->input('name');
        $product->description = $request->input('description');

        if ($request->hasFile('file_path'))
        {
            $destination = 'uploads/products/'.$product->file_path;
            if (File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('file_path');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/products/', $filename);
            $product->file_path = $filename;

        }


        $product->update();

        //return redirect()->back()->with('status','Product Updated Successfully');


        if ($product) {
            return back()
                ->with('success', 'Product updated successfully');
        } else {
            return back()
                ->with('fail', 'something went wrong');
        }


        #return view('sidebar menu.products.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $destination = 'uploads/products/'. $product->file_path;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $product->delete();

        return redirect()->back()->with('status','Product Deleted Successfully');
    }


}
