<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Group;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index()
    {
        $group = Group::where('status','0')->get();

        return view('website.collection.prodindex', compact('group'));
    }

    public function groupview($group_url)
    {
        $group = Group::where('url', $group_url)->first();
        $group_id = $group->id;

        $category = Category::where('group_id', $group_id)->where('status','!=','2')->where('status','0')->get();

        return view('website.collection.prodcategory', compact('category','group'));
    }

    public function categoryview($group_url, $cate_url)
    {
        $category = Category::where('url', $cate_url)->first();
        $category_id = $category->id;

        $subcategory = Subcategory::where('category_id', $category_id)->where('status','!=','2')->where('status','0')->get();
        return view('website.collection.sub-category', compact('subcategory','category'));
    }

    public function subcategoryview(Request $request,$group_url, $cate_url,$subcate_url)
    {
        $subcategory = Subcategory::where('url', $subcate_url)->first();
        $subcategory_id = $subcategory->id;


        if ($request->get('sort') == 'price_asc') {

            $products = Product::where('id', $subcategory_id)
                ->orderBy('offer_price', 'asc')
                ->where('status', '!=', '2')
                ->where('status', '0')->get();
        }elseif($request->get('sort') == 'price_desc') {
            $products = Product::where('id', $subcategory_id)
                ->orderBy('offer_price', 'desc')
                ->where('status', '!=', '2')
                ->where('status', '0')->get();
        }elseif($request->get('sort') == 'newest') {
            $products = Product::where('id', $subcategory_id)
                ->orderBy('created_at', 'asc')
                ->where('status', '!=', '2')
                ->where('status', '0')->get();
        }elseif($request->get('sort') == 'popularity') {
            $products = Product::where('id', $subcategory_id)
                ->orderBy('popular_products', 'asc')
                ->where('status', '!=', '2')
                ->where('status', '0')->get();
          }
            else{
            $products = Product::where('sub_category_id', $subcategory_id)->where('status','!=','2')->where('status','0')->get();
        }


        return view('website.collection.products', compact('subcategory','products'));
    }

    public function productview($group_url, $cate_url, $subcate_url,$prod_url)
    {
        $prod = Product::where('url', $prod_url)->first();
        $prod_id = $prod->id;

//        if (Request::get('sort') == 'price_asc') {
//
//            $finalprod = Product::where('id', $prod_id)
//                ->orderBy('offer_price', 'asc')
//                ->where('status', '!=', '2')
//                ->where('status', '0')->get();
//        }elseif(Request::get('sort') == 'price_desc') {
//            $finalprod = Product::where('id', $prod_id)
//                ->orderBy('offer_price', 'desc')
//                ->where('status', '!=', '2')
//                ->where('status', '0')->get();
//        }elseif(Request::get('sort') == 'newest') {
//            $finalprod = Product::where('id', $prod_id)
//                ->orderBy('created_at', 'asc')
//                ->where('status', '!=', '2')
//                ->where('status', '0')->get();
//        }elseif(Request::get('sort') == 'popularity') {
//            $finalprod = Product::where('id', $prod_id)
//                ->orderBy('status', '1')
//                ->where('status', '!=', '2')
//                ->where('status', '0')->get();
//        }else{
//            $finalprod = Product::where('id',$prod_id)->where('status','!=','2')->where('status','0')->get();
//        }

        $finalprod = Product::where('id', $prod_id)->where('status','!=','2')->where('status','0')->get();

        return view('website.home', compact('prod','finalprod'));
    }
}
