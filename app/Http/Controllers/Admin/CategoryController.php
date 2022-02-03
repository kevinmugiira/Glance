<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::where('status','!=','3')->get();
        return view('admin.collection.category.index', compact('category'));
    }

    public function create()
    {
        $group = Group::where('status','!=','3')->get(); //3->Deleted Data
        return view('admin.collection.category.create', compact('group'));
    }

    public function store(Request $request)
    {
        $category = new Category();

        $category->group_id = $request->input('group_id');
        $category->url = $request->input('url');
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        //$category->image = $request->input('category_img');
        if ($request->hasFile('category_img'))
        {
            $image_file = $request->file('category_img');
            $img_extension = $image_file->getClientOriginalExtension(); //getting the image extension
            $img_filename = time(). '.' . $img_extension;
            $image_file->move('uploads/categoryimage/', $img_filename);
            $category->image = $img_filename;
        }
        //$category->icon = $request->input('category_icon');
        if ($request->hasFile('category_icon'))
        {
            $icon_file = $request->file('category_icon');
            $icon_extension = $icon_file->getClientOriginalExtension(); //getting the image extension
            $icon_filename = time(). '.' . $icon_extension;
            $icon_file->move('uploads/categoryicon/', $icon_filename);
            $category->icon = $icon_filename;
        }
        $category->status = $request->input('status') == true ? '1' : '0'; //0->show | 1->hide

        $category->save();

        return redirect()->back()
            ->with('status','Category record added Successfully!');
     }

     public function edit($id)
     {
         $group = Group::where('status','!=','3')->get(); //3->deleted data
         $category = Category::find($id);

         return view('admin.collection.category.edit', compact('group','category'));
     }

     public function update(Request $request, $id)
     {
         #$category = new Category();
         $cate = Category::find($id);

         #dd($id);
         $cate->group_id = $request->input('group_id');
         $cate->url = $request->input('url');
         $cate->name = $request->input('name');
         $cate->description = $request->input('description');

         if ($request->hasFile('category_img'))
         {
             $filepath_image = 'uploads/categoryimage/'. $cate->image;
             if (File::exists($filepath_image)) {
                 File::delete($filepath_image);
             }
             $image_file = $request->file('category_img');
             $img_extension = $image_file->getClientOriginalExtension(); //getting the image extension
             $img_filename = time(). '.' . $img_extension;
             $image_file->move('uploads/categoryimage/', $img_filename);
             $cate->image = $img_filename;
         }

         if ($request->hasFile('category_icon'))
         {
             $filepath_icon = 'uploads/categoryicon/'. $cate->icon;
             if (File::exists($filepath_icon)) {
                 File::delete($filepath_icon);
             }
             $icon_file = $request->file('category_icon');
             $icon_extension = $icon_file->getClientOriginalExtension(); //getting the image extension
             $icon_filename = time(). '.' . $icon_extension;
             $icon_file->move('uploads/categoryicon/', $icon_filename);
             $cate->icon = $icon_filename;
         }
         $cate->status = $request->input('status') == true ? '1' : '0'; //0->show | 1->hide

         $cate->update();

         return redirect('category')
             ->with('status','Category record updated Successfully!');

     }

     public function delete($id)
     {
         $category = Category::find($id);
         $category->status = '3'; //3->deleted records
         $category->update();

         return redirect()->back()
             ->with('status', 'Category Deleted Successfully!');
     }

     public function deletedrecords()
     {
         $category = Category::where('status','3')->get();
         return view('admin.collection.category.deleted', compact('category'));
     }

     public function deletedrestore($id)
     {
         $category = Category::find($id);
         $category->status = '0';
         $category->update();

         return redirect('category')
             ->with('status', 'Category record Restored Successfully!');
     }
}
