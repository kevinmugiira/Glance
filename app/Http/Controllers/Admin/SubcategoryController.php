<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SubcategoryController extends Controller
{
    public function index()
    {
        $category = Category::where('status','!=','3')->get();
        $subcategory = Subcategory::where('status','!=','3')->get(); //3 is deleted records
        return view('admin.collection.sub-category.index', compact('subcategory','category'));
    }

    public function store(Request $request)
    {
        $subcategory = new Subcategory();
        $subcategory->category_id = $request->input('category_id');
        $subcategory->url = $request->input('url');
        $subcategory->name = $request->input('name');
        $subcategory->description = $request->input('description');

        if ($request->hasFile('subcategory_img'))
        {
            $image_file = $request->file('subcategory_img');
            $img_extension = $image_file->getClientOriginalExtension(); //get image extension
            $img_filename = time(). "." . $img_extension;
            $image_file->move('uploads/subcategoryimage/', $img_filename);
            $subcategory->image = $img_filename;
        }


        $subcategory->priority = $request->input('priority');
        $subcategory->status = $request->input('status') == true ? '1' : '0';

        $subcategory->save();

        return redirect()->back()
            ->with('status', 'Subcategory saved Successfully!');

    }

    public function edit($id)
    {
        $category = Category::where('status','!=','3')->get();
        $subcategory = Subcategory::find($id);
        return view('admin.collection.sub-category.edit', compact('category' , 'subcategory'));
    }

    public function update(Request $request, $id)
    {
        $subcategory = Subcategory::find($id);

        $subcategory->category_id = $request->input('category_id');
        $subcategory->url = $request->input('url');
        $subcategory->name = $request->input('name');
        $subcategory->description = $request->input('description');

        if ($request->hasFile('subcategory_img'))
        {
            $filepath_image = 'uploads/subcategoryimage/'.$subcategory->image;
            if (File::exists($filepath_image)) {
                File::delete($filepath_image);
            }
            $image_file = $request->file('subcategory_img');
            $img_extension = $image_file->getClientOriginalExtension(); //to get file extension
            $img_filename = time(). '.' . $img_extension;
            $image_file->move('uploads/subcategoryimage/', $img_filename);
            $subcategory->image = $img_filename;
        }

        $subcategory->priority = $request->input('priority');
        $subcategory->status = $request->input('status') == true ? '1' : '0';

        $subcategory->update();

        return redirect('sub-category')
            ->with('status','Sub-category updated Successfully!');

    }

    public function delete($id)
    {
        $category = Subcategory::find($id);
        $category->status = '3'; //3->Deleted Records
        $category->update();

        return redirect()->back()
            ->with('status', 'Sub-category Deleted Successfully!');
    }

    public function deletedrecords()
    {
        $subcategory = Subcategory::where('status','3')->get();
        return view('admin.collection.sub-category.deleted',compact('subcategory'));
    }

    public function deletedrestore($id)
    {
        $subcategory =Subcategory::find($id);
        $subcategory->status = '0';

        $subcategory->update();

        return redirect('sub-category')
            ->with('status', 'Sub Category restored Successfully!');
    }

}
