<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Group;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($group_url, $cate_url, $subcate_url,$prod_url)
    {
        $groups = Group::where('status','0');

        $group = Group::where('url', $group_url)->first();
        $group_id = $group->id;

        $category = Category::where('group_id', $group_id)->where('status','!=','2')->where('status','0')->get();

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


        return view('website.home', compact('groups','category','finalprod'));
    }

    public  function show($group_url)
    {
        $group = Group::where('url', $group_url)->first();
        $group_id = $group->id;

        $category = Category::where('status','!=','2')->where('status','0')->get();
        return view('website.products', compact('group_id','category'));
    }
}
