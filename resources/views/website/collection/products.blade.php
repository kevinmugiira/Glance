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
                    <li> {{ $subcategory->category->group->name }}/{{ $subcategory->category->name }}/{{ $subcategory->name }}</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 m-5">
                <span class="font-weight-bold sort-font">Sort By :</span>
                <a href="{{ URL::current() }}" class="sort-font">All</a>
                <a href="{{ URL::current()."?sort=price_asc" }}" class="sort-font">Price - Low to High</a>
                <a href="{{ URL::current()."?sort=price_desc" }}" class="sort-font">Price - High to Low</a>
                <a href="{{ URL::current()."?sort=newest" }}" class="sort-font">Newest/Latest</a>
                <a href="{{ URL::current()."?sort=popularity" }}" class="sort-font">Popularity</a>

            </div>
        </div>
    </div>


    <div class="container mr-5">
        <div class="row">
            <div class="col-md-12 ">
                <div class="row ">


    @foreach($products as $prod)
        <div class="col-md-3 mt-5">
            <div class="product-sec1">



                <div class="men-thumb-item">
                    <img src="{{asset('uploads/products/'. $prod->image)}}" class="w-100" width="180px" height="160px" alt="">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href="{{url('product-page/'.$prod->subcategory->category->group->url.'/'.$prod->subcategory->category->url.'/'.$prod->subcategory->url.'/'.$prod->url)}}" class="link-product-add-cart">Item</a>
                        </div>
                    </div>
                    <!--<span class="product-new-top">New</span>-->
                </div>
                <div class="item-info-product ">
                    <h4>
                        {{ $prod->name }}
                    </h4>
                    <div class="info-product-price">
                        <span class="item_price">Ksh {{$prod->offer_price}}</span>
                        <del>Ksh {{$prod->original_price}}</del>
                    </div>
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <a class="btn btn-block button btn-default" href="{{url('product-page/'.$prod->subcategory->category->group->url.'/'.$prod->subcategory->category->url.'/'.$prod->subcategory->url.'/'.$prod->url)}}">View</a>
{{--                        <form action="product-page/'.$prod->subcategory->category->group->url.'/'.$prod->subcategory->category->url.'/'.$prod->subcategory->url.'/'.$prod->url" method="get">--}}
{{--                            <fieldset>--}}
{{--                                <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                <input type="hidden" name="add" value="1" />--}}
{{--                                <input type="hidden" name="business" value=" " />--}}
{{--                                <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                <input type="hidden" name="amount" value="0.00" />--}}
{{--                                <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                <input type="hidden" name="return" value=" " />--}}
{{--                                <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                <input type="button" name="submit" value="View" class="button" />--}}
{{--                            </fieldset>--}}
{{--                        </form>--}}
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
