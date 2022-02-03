<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Group;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        #$groups = Group::where('status','0');
        $groupI = Group::where('id',1)->first();
        $groupII = Group::where('id',2)->first();
        $groupIII = Group::where('id',3)->first();
        $groupIV = Group::where('id',4)->first();

        for ($i=1; $i<=4; $i++)
        {

            $groups = Group::where('id', $i)->where('status','0')->first();
            #dump($groups);
            #$group_id = $groups->id;

            $cate = Category::where('group_id', $i)->where('id', $i)->where('status','0')->get();
            #$cate_id = $cate->id;

            $subcategory = Subcategory::where('category_id', $i)->where('id', $i)->where('status','!=','2')->where('status','0')->get();
            #$subcategory_id = $subcategory->id;

            $products = Product::where('sub_category_id', 1)->where('status','!=','2')->where('status','0')->get();
            $productsI = Product::where('sub_category_id', '2')->where('status','!=','2')->where('status','0')->get();
            $productsII = Product::where('sub_category_id', '8')->where('status','!=','2')->where('status','0')->get();
            $productsIII = Product::where('sub_category_id', '7')->where('status','!=','2')->where('status','0')->get();
            #dd($productsIII);
            #$productsI = Product::where('subcategory_id->category->group')->where('status','!=','2')->where('status','0')->get();

        }
//        $category = Category::where('group_id', $group_id)->where('status','!=','2')->where('status','0')->get();

//        $prod = Product::where('url', $prod_url)->first();
//        $prod_id = $prod->id;

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
//        $finalprod = Product::where('id', $prod_id)->where('status','!=','2')->where('status','0')->get();


        return view('website.home', compact('groups', 'subcategory','cate','products','productsI','productsII','productsIII','groupI','groupII','groupIII','groupIV'));
    }



    public  function groupview($group_url)
    {
        $group = Group::where('url', $group_url)->first();
        $group_id = $group->id;

        $category = Category::where('group_id', $group_id)->where('status','!=','2')->where('status','0')->get();
        return view('website.collection.category', compact('group','category'));
    }

    public function categoryview($group_url, $cate_url)
    {
        $category = Category::where('url', $cate_url)->first();
        $category_id = $category->id;

        $subcategory = Subcategory::where('category_id', $category_id)->where('status','!=','2')->where('status','0')->get();
        return view('website.collection.sub-category',compact('category','subcategory'));
    }
}
