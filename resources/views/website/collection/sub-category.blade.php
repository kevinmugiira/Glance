@extends('website.master')



@section('stuff')


    <!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{ url('index') }}">Home</a>
                        <i>|</i>
                    </li>
                    <li> Collection / {{ $category->group->name }} / {{ $category->name }}</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 m-5"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="row ">
    @foreach($subcategory as $cate)
        <div class="col-md-3">
            <div class="product-sec1">
                <div class="men-thumb-item">
                    <img src="{{asset('uploads/subcategoryimage/'. $cate->image)}}" class="w-100" width="180px" height="160px" alt="">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href="{{url('collection/'.$cate->category->group->url.'/'.$cate->category->url.'/'.$cate->url)}}" class="link-product-add-cart">View</a>
                        </div>
                    </div>
                    <!--<span class="product-new-top">New</span>-->
                </div>
                <div class="item-info-product ">


                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form action="#" method="post">
                            <fieldset>

                                <input type="submit" name="submit" value="{{$cate->name}}" class="button" />
                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
                </div>
            </div>
        </div>
    </div>



@stop
