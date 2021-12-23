<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use function Sodium\compare;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::where('status','!=','3')->get(); //3 is deleted data
        return view('admin.collection.product.index', compact('product'));
    }

    public function create()
    {
        $subcategory = Subcategory::where('status','!=','3')->get();
        return view('admin.collection.product.create', compact('subcategory'));
    }

    public function store(Request $request)
    {
        $product = new Product();
        $subcategory = Subcategory::where('status','!=','3')->get(); //3 is for the deleted records!

        $product->name = $request->input('name');
        $product->sub_category_id = $request->input('sub_category_id');
        $product->url = $request->input('url');
        $product->small_description = $request->input('small_description');

        if ($request->hasFile('prod_image'))
        {
            $image_file = $request->file('prod_image');
            $img_extension = $image_file->getClientOriginalExtension(); //retrieving image extension
            $img_filename = time(). '.' . $img_extension;
            $image_file->move('uploads/products/', $img_filename);
            $product->image = $img_filename;
        }


        $product->sale_tag = $request->input('sale_tag');
        $product->original_price = $request->input('original_price');
        $product->offer_price = $request->input('offer_price');
        $product->quantity = $request->input('quantity');
        $product->priority = $request->input('priority');

        $product->p_highlight_heading = $request->input('p_highlight_heading');
        $product->p_highlights = $request->input('p_highlights');
        $product->p_description_heading = $request->input('p_description_heading');
        $product->p_description = $request->input('p_description');
        $product->p_details_heading = $request->input('p_details_heading');
        $product->p_details = $request->input('p_details');

        $product->meta_title = $request->input('meta_title');
        $product->meta_description = $request->input('meta_description');
        $product->meta_keyword = $request->input('meta_keyword');

        $product->new_arrival_products = $request->input('new_arrival') == true ? '1' : '0';
        $product->featured_products = $request->input('featured_products') == true ? '1' : '0';
        $product->popular_products = $request->input('popular_products') == true ? '1' : '0';
        $product->offers_products = $request->input('offers_products') == true ? '1' : '0';
        $product->status = $request->input('status') == true ? '1' : '0';

        $product->save();

        return redirect()->back()
            ->with('status', 'Product Added Successfully!');
    }

    public function edit($id)
    {

        $product = Product::find($id);
        $subcategory = Subcategory::where('status','!=','3')->get();

        return view('admin.collection.product.edit')
            ->with('product',$product)
            ->with('subcategory',$subcategory);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->input('name');
        $product->sub_category_id = $request->input('sub_category_id');
        $product->url = $request->input('url');
        $product->small_description = $request->input('small_description');

        if ($request->hasFile('prod_image'))
        {
            $image_file = $request->file('prod_image');
            $img_extension = $image_file->getClientOriginalExtension(); //retrieving image extension
            $img_filename = time(). '.' . $img_extension;
            $image_file->move('uploads/products/', $img_filename);
            $product->image = $img_filename;
        }


        $product->sale_tag = $request->input('sale_tag');
        $product->original_price = $request->input('original_price');
        $product->offer_price = $request->input('offer_price');
        $product->quantity = $request->input('quantity');
        $product->priority = $request->input('priority');

        $product->p_highlight_heading = $request->input('p_highlight_heading');
        $product->p_highlights = $request->input('p_highlights');
        $product->p_description_heading = $request->input('p_description_heading');
        $product->p_description = $request->input('p_description');
        $product->p_details_heading = $request->input('p_details_heading');
        $product->p_details = $request->input('p_details');

        $product->meta_title = $request->input('meta_title');
        $product->meta_description = $request->input('meta_description');
        $product->meta_keyword = $request->input('meta_keyword');

        $product->new_arrival_products = $request->input('new_arrival') == true ? '1' : '0';
        $product->featured_products = $request->input('featured_products') == true ? '1' : '0';
        $product->popular_products = $request->input('popular_products') == true ? '1' : '0';
        $product->offers_products = $request->input('offers_products') == true ? '1' : '0';
        $product->status = $request->input('status') == true ? '1' : '0';

        $product->update();

        return redirect('product')
            ->with('status','Product Details Updated');



    }


    public function delete($id)
    {
        $product = Product::find($id);

        $product->status = '3'; //3 is deleted records
        $product->update();

        return redirect()->back()
            ->with('Product Deleted Successfully');
    }

    public function deletedrecords()
    {
        $product = Product::where('status','3')->get();

        return view('admin.collection.product.deleted', compact('product'));
    }

    public function deletedrestore($id)
    {
        $product = Product::find($id);

        $product->status = '0';

        $product->update();

        return redirect('product')
            ->with('status', 'Product Restored Successfully');
    }
}
