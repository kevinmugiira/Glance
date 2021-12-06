<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('myform');
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

    public function sore(Request $request)
    {
        /*
        $products = \request()->validate([
            'name' => 'string|required|max:255',
            'description' => 'string|required',
            #'file_path' => ['file']
        ]);

        if (\request('file_path')) {
            $products['file_path'] = \request('file_path')->store('file_path');
        }


        $products->save(); */

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'file_path' => ['file']
        ]);


        $product = new Product([
            "name" => $request->get('name'),
            "description" => $request->get('description'),

            ]);

        if (\request('file_path')) {
            $product['file_path'] = \request('file_path')->store('file_path');
        }

        $product->save();


        return redirect()->route('list-product');

        if ($product) {
            return back()->with('success', 'Product has been added successfully');
        } else {
            return back()->with('fail', 'something went wrong');
        }

    }


    public function tore(Request $request)
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
    public function edit()
    {

        $prod = Product::all();
        return view('sidebar menu.products.edit', compact('prod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        return view('sidebar menu.products.update');
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
