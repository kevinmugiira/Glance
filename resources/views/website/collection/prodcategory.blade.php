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
                    <li> {{ $group->name }}</li>
                </ul>
            </div>
        </div>
    </div>

 <!--Trying out fabcarts procedure for displaying categories-->

{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <label for="">Group: <span>{{ $group->name }}</span></label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--    @foreach($category as $cate)--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-3 mb-4">--}}
{{--                            <div class="card">--}}
{{--                                <img src="{{ asset('uploads/categoryimage'. $cate->image) }}" class="w-100" alt="">--}}
{{--                                <div class="card-body bg-light">--}}
{{--                                    <a href="" class="text-center">--}}
{{--                                        <h6 class="mb-0"> {{ $cate->name }}</h6>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}

{{--            </div>--}}
{{--        </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--<!--end of fabcart-->--}}



    @foreach($category as $cate)
     <div class="col-md-3">
        <div class="product-sec1">



                <div class="men-thumb-item">
                    <img src="{{asset('uploads/categoryimage/'. $cate->image)}}" class="w-100" width="180px" height="160px" alt="">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href="{{url('sub-category/'.$cate->group->url.'/'.$cate->url)}}" class="link-product-add-cart">Quick View</a>
                        </div>
                    </div>
                    <!--<span class="product-new-top">New</span>-->
                </div>
                <div class="item-info-product ">
                    <h4>
                        <a href="{{url('website.single')}}">{{ $cate->name }}</a>
                    </h4>
                    <div class="info-product-price">
                        <span class="item_price">Ksh 0.00</span>
                        <del>Ksh0.00</del>
                    </div>
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value=" " />
                                <input type="hidden" name="item_name" value="Product Name" />
                                <input type="hidden" name="amount" value="0.00" />
                                <input type="hidden" name="discount_amount" value="0.00" />
                                <input type="hidden" name="currency_code" value="Ksh" />
                                <input type="hidden" name="return" value=" " />
                                <input type="hidden" name="cancel_return" value=" " />
                                <input type="submit" name="submit" value="Add to cart" class="button" />
                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>
        </div>
      </div>
    </div>



    @endforeach



    <!-- //page -->
    <!-- top Products -->
{{--    <div class="ads-grid">--}}
{{--        <div class="container">--}}
{{--            <!-- tittle heading -->--}}
{{--            <h3 class="tittle-w3l"> Products--}}
{{--                <span class="heading-style">--}}
{{--					<i></i>--}}
{{--					<i></i>--}}
{{--					<i></i>--}}
{{--				</span>--}}
{{--            </h3>--}}
{{--            <!-- //tittle heading -->--}}
{{--            <!-- product left -->--}}
{{--            <div class="side-bar col-md-3">--}}
{{--                <div class="search-hotel">--}}
{{--                    <h3 class="agileits-sear-head">Search Category..</h3>--}}
{{--                    <form action="#" method="post">--}}
{{--                        <input type="search" placeholder="Product name..." name="search" required="">--}}
{{--                        <input type="submit" value=" ">--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <!-- price range -->--}}
{{--                <!--<div class="range">--}}
{{--                    <h3 class="agileits-sear-head">Price range</h3>--}}
{{--                    <ul class="dropdown-menu6">--}}
{{--                        <li>--}}

{{--                            <div id="slider-range"></div>--}}
{{--                            <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>-->--}}
{{--                <!-- //price range -->--}}
{{--                <!-- food preference -->--}}
{{--                <!--<div class="left-side">--}}
{{--                    <h3 class="agileits-sear-head">Food Preference</h3>--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">Vegetarian</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">Non-Vegetarian</span>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>-->--}}
{{--                <!-- //food preference -->--}}
{{--                <!-- discounts -->--}}
{{--                <!--<div class="left-side">--}}
{{--                    <h3 class="agileits-sear-head">Discount</h3>--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">5% or More</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">10% or More</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">20% or More</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">30% or More</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">50% or More</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">60% or More</span>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>-->--}}
{{--                <!-- //discounts -->--}}
{{--                <!-- reviews -->--}}
{{--                <!--<div class="customer-rev left-side">--}}
{{--                    <h3 class="agileits-sear-head">Customer Review</h3>--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <span>5.0</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                <span>4.0</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star-half-o" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                <span>3.5</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                <span>3.0</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star-half-o" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                <span>2.5</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>-->--}}
{{--                <!-- //reviews -->--}}
{{--                <!-- cuisine -->--}}
{{--                <!--<div class="left-side">--}}
{{--                    <h3 class="agileits-sear-head">Cuisine</h3>--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">South American</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">French</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">Greek</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">Chinese</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">Japanese</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">Italian</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">Mexican</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">Thai</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span">Indian</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox" class="checked">--}}
{{--                            <span class="span"> Spanish </span>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>-->--}}
{{--                <!-- //cuisine -->--}}
{{--                <!-- deals -->--}}
{{--            <!--<div class="deal-leftmk left-side">--}}
{{--                    <h3 class="agileits-sear-head">Special Deals</h3>--}}
{{--                    <div class="special-sec1">--}}
{{--                        <div class="col-xs-4 img-deals">--}}
{{--                            <img src="{{asset('asset2/images/d2.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-8 img-deal1">--}}
{{--                            <h3>Lay's Potato Chips</h3>--}}
{{--                            <a href="">$18.00</a>--}}
{{--                        </div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <div class="special-sec1">--}}
{{--                        <div class="col-xs-4 img-deals">--}}
{{--                            <img src="{{asset('asset2/images/d1.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-8 img-deal1">--}}
{{--                            <h3>Bingo Mad Angles</h3>--}}
{{--                            <a href="">$9.00</a>--}}
{{--                        </div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <div class="special-sec1">--}}
{{--                        <div class="col-xs-4 img-deals">--}}
{{--                            <img src="{{asset('asset2/images/d4.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-8 img-deal1">--}}
{{--                            <h3>Tata Salt</h3>--}}
{{--                            <a href="">$15.00</a>--}}
{{--                        </div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <div class="special-sec1">--}}
{{--                        <div class="col-xs-4 img-deals">--}}
{{--                            <img src="{{asset('asset2/images/d5.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-8 img-deal1">--}}
{{--                            <h3>Gujarat Dry Fruit</h3>--}}
{{--                            <a href="">$525.00</a>--}}
{{--                        </div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <div class="special-sec1">--}}
{{--                        <div class="col-xs-4 img-deals">--}}
{{--                            <img src="{{asset('asset2/images/d3.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-8 img-deal1">--}}
{{--                            <h3>Cadbury Dairy Milk</h3>--}}
{{--                            <a href="">$149.00</a>--}}
{{--                        </div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                </div>-->--}}
{{--                <!-- //deals -->--}}
{{--            </div>--}}
{{--            <!-- //product left -->--}}
{{--            <!-- product right -->--}}
{{--            <div class="agileinfo-ads-display col-md-9 w3l-rightpro">--}}
{{--                <div class="wrapper">--}}
{{--                    <!-- first section -->--}}
{{--                    <div class="product-sec1">--}}
{{--                        @foreach($category as $cate_item)--}}

{{--                            <div class="col-xs-4 product-men">--}}
{{--                                <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                    <div class="men-thumb-item">--}}
{{--                                        <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                        <div class="men-cart-pro">--}}
{{--                                            <div class="inner-men-cart-pro">--}}
{{--                                                <a href="{{url('website.single')}}" class="link-product-add-cart">Quick View</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--<span class="product-new-top">New</span>-->--}}
{{--                                    </div>--}}
{{--                                    <div class="item-info-product ">--}}
{{--                                        <h4>--}}
{{--                                            <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                        </h4>--}}
{{--                                        <div class="info-product-price">--}}
{{--                                            <span class="item_price">Ksh 0.00</span>--}}
{{--                                            <del>Ksh0.00</del>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                            <form action="#" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                                    <input type="hidden" name="amount" value="0.00" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                                </fieldset>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                        <div class="col-xs-4 product-men">--}}
{{--                            <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                <div class="men-thumb-item">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                    <div class="men-cart-pro">--}}
{{--                                        <div class="inner-men-cart-pro">--}}
{{--                                            <a href="{{url('website.single')}}" class="link-product-add-cart">Quick View</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


{{--                                </div>--}}
{{--                                <div class="item-info-product ">--}}
{{--                                    <h4>--}}
{{--                                        <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                    </h4>--}}
{{--                                    <div class="info-product-price">--}}
{{--                                        <span class="item_price">Ksh 0.00</span>--}}
{{--                                        <del>Ksh 0.00</del>--}}
{{--                                    </div>--}}
{{--                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                        <form action="#" method="post">--}}
{{--                                            <fieldset>--}}
{{--                                                <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                <input type="hidden" name="add" value="1" />--}}
{{--                                                <input type="hidden" name="business" value=" " />--}}
{{--                                                <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                                <input type="hidden" name="amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                                <input type="hidden" name="return" value=" " />--}}
{{--                                                <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                            </fieldset>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-4 product-men">--}}
{{--                            <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                <div class="men-thumb-item">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                    <div class="men-cart-pro">--}}
{{--                                        <div class="inner-men-cart-pro">--}}
{{--                                            <a href="{{url('website.single')}}" class="link-product-add-cart">Quick View</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


{{--                                </div>--}}
{{--                                <div class="item-info-product ">--}}
{{--                                    <h4>--}}
{{--                                        <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                    </h4>--}}
{{--                                    <div class="info-product-price">--}}
{{--                                        <span class="item_price">Ksh 0.00</span>--}}
{{--                                        <del>Ksh 0.00</del>--}}
{{--                                    </div>--}}
{{--                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                        <form action="#" method="post">--}}
{{--                                            <fieldset>--}}
{{--                                                <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                <input type="hidden" name="add" value="1" />--}}
{{--                                                <input type="hidden" name="business" value=" " />--}}
{{--                                                <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                                <input type="hidden" name="amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                                <input type="hidden" name="return" value=" " />--}}
{{--                                                <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                            </fieldset>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <!-- //first section -->--}}
{{--                    <!-- 2nd section) -->--}}
{{--                    <div class="product-sec1">--}}
{{--                        <div class="col-md-4 product-men">--}}
{{--                            <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                <div class="men-thumb-item">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                    <div class="men-cart-pro">--}}
{{--                                        <div class="inner-men-cart-pro">--}}
{{--                                            <a href="{{url('website.single')}}" class="link-product-add-cart">Quick View</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="item-info-product ">--}}
{{--                                    <h4>--}}
{{--                                        <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                    </h4>--}}
{{--                                    <div class="info-product-price">--}}
{{--                                        <span class="item_price">Ksh 0.00</span>--}}
{{--                                        <del>Ksh 0.00</del>--}}
{{--                                    </div>--}}
{{--                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                        <form action="#" method="post">--}}
{{--                                            <fieldset>--}}
{{--                                                <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                <input type="hidden" name="add" value="1" />--}}
{{--                                                <input type="hidden" name="business" value=" " />--}}
{{--                                                <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                                <input type="hidden" name="amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                                <input type="hidden" name="return" value=" " />--}}
{{--                                                <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                            </fieldset>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 product-men">--}}
{{--                            <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                <div class="men-thumb-item">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                    <div class="men-cart-pro">--}}
{{--                                        <div class="inner-men-cart-pro">--}}
{{--                                            <a href="{{url('website.single')}}" class="link-product-add-cart">Quick View</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


{{--                                </div>--}}
{{--                                <div class="item-info-product ">--}}
{{--                                    <h4>--}}
{{--                                        <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                    </h4>--}}
{{--                                    <div class="info-product-price">--}}
{{--                                        <span class="item_price">Ksh 0.00</span>--}}
{{--                                        <del>Ksh 0.00</del>--}}
{{--                                    </div>--}}
{{--                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                        <form action="#" method="post">--}}
{{--                                            <fieldset>--}}
{{--                                                <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                <input type="hidden" name="add" value="1" />--}}
{{--                                                <input type="hidden" name="business" value=" " />--}}
{{--                                                <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                                <input type="hidden" name="amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                                <input type="hidden" name="return" value=" " />--}}
{{--                                                <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                            </fieldset>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 product-men">--}}
{{--                            <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                <div class="men-thumb-item">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                    <div class="men-cart-pro">--}}
{{--                                        <div class="inner-men-cart-pro">--}}
{{--                                            <a href="{{url('website.single')}}" class="link-product-add-cart">Quick View</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


{{--                                </div>--}}
{{--                                <div class="item-info-product ">--}}
{{--                                    <h4>--}}
{{--                                        <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                    </h4>--}}
{{--                                    <div class="info-product-price">--}}
{{--                                        <span class="item_price">Ksh 0.00</span>--}}
{{--                                        <del>Ksh 0.00</del>--}}
{{--                                    </div>--}}
{{--                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                        <form action="#" method="post">--}}
{{--                                            <fieldset>--}}
{{--                                                <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                <input type="hidden" name="add" value="1" />--}}
{{--                                                <input type="hidden" name="business" value=" " />--}}
{{--                                                <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                                <input type="hidden" name="amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                                <input type="hidden" name="return" value=" " />--}}
{{--                                                <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                            </fieldset>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <!-- //2nd section  -->--}}
{{--                    <!-- 3rd section -->--}}
{{--                    <div class="product-sec1">--}}
{{--                        <div class="col-md-4 product-men">--}}
{{--                            <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                <div class="men-thumb-item">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                    <div class="men-cart-pro">--}}
{{--                                        <div class="inner-men-cart-pro">--}}
{{--                                            <a href="{{url('website.single')}}" class="link-product-add-cart">Quick View</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!--<span class="product-new-top">New</span>-->--}}
{{--                                </div>--}}
{{--                                <div class="item-info-product ">--}}
{{--                                    <h4>--}}
{{--                                        <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                    </h4>--}}
{{--                                    <div class="info-product-price">--}}
{{--                                        <span class="item_price">Ksh 0.00</span>--}}
{{--                                        <del>Ksh 0.00</del>--}}
{{--                                    </div>--}}
{{--                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                        <form action="#" method="post">--}}
{{--                                            <fieldset>--}}
{{--                                                <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                <input type="hidden" name="add" value="1" />--}}
{{--                                                <input type="hidden" name="business" value=" " />--}}
{{--                                                <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                                <input type="hidden" name="amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                                <input type="hidden" name="return" value=" " />--}}
{{--                                                <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                            </fieldset>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 product-men">--}}
{{--                            <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                <div class="men-thumb-item">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                    <div class="men-cart-pro">--}}
{{--                                        <div class="inner-men-cart-pro">--}}
{{--                                            <a href="{{url('website.single')}}" class="link-product-add-cart">Quick View</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


{{--                                </div>--}}
{{--                                <div class="item-info-product ">--}}
{{--                                    <h4>--}}
{{--                                        <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                    </h4>--}}
{{--                                    <div class="info-product-price">--}}
{{--                                        <span class="item_price">Ksh 0.00</span>--}}
{{--                                        <del>Ksh 0.00</del>--}}
{{--                                    </div>--}}
{{--                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                        <form action="#" method="post">--}}
{{--                                            <fieldset>--}}
{{--                                                <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                <input type="hidden" name="add" value="1" />--}}
{{--                                                <input type="hidden" name="business" value=" " />--}}
{{--                                                <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                                <input type="hidden" name="amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                                <input type="hidden" name="return" value=" " />--}}
{{--                                                <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                            </fieldset>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 product-men">--}}
{{--                            <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                <div class="men-thumb-item">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                    <div class="men-cart-pro">--}}
{{--                                        <div class="inner-men-cart-pro">--}}
{{--                                            <a href="{{url('website.single')}}" class="link-product-add-cart">Quick View</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


{{--                                </div>--}}
{{--                                <div class="item-info-product ">--}}
{{--                                    <h4>--}}
{{--                                        <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                    </h4>--}}
{{--                                    <div class="info-product-price">--}}
{{--                                        <span class="item_price">Ksh 0.00</span>--}}
{{--                                        <del>Ksh 0.00</del>--}}
{{--                                    </div>--}}
{{--                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                        <form action="#" method="post">--}}
{{--                                            <fieldset>--}}
{{--                                                <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                <input type="hidden" name="add" value="1" />--}}
{{--                                                <input type="hidden" name="business" value=" " />--}}
{{--                                                <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                                <input type="hidden" name="amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                                <input type="hidden" name="return" value=" " />--}}
{{--                                                <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                            </fieldset>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <!-- //3rd section -->--}}
{{--                    <!-- 4th section -->--}}
{{--                    <div class="product-sec1">--}}
{{--                        <div class="col-md-4 product-men">--}}
{{--                            <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                <div class="men-thumb-item">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                    <div class="men-cart-pro">--}}
{{--                                        <div class="inner-men-cart-pro">--}}
{{--                                            <a href="{{url('website.single')}}" class="link-product-add-cart">Quick View</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="item-info-product ">--}}
{{--                                    <h4>--}}
{{--                                        <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                    </h4>--}}
{{--                                    <div class="info-product-price">--}}
{{--                                        <span class="item_price">Ksh 0.00</span>--}}
{{--                                        <del>Ksh 0.00</del>--}}
{{--                                    </div>--}}
{{--                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                        <form action="#" method="post">--}}
{{--                                            <fieldset>--}}
{{--                                                <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                <input type="hidden" name="add" value="1" />--}}
{{--                                                <input type="hidden" name="business" value=" " />--}}
{{--                                                <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                                <input type="hidden" name="amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                                <input type="hidden" name="return" value=" " />--}}
{{--                                                <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                            </fieldset>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 product-men">--}}
{{--                            <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                <div class="men-thumb-item">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                    <div class="men-cart-pro">--}}
{{--                                        <div class="inner-men-cart-pro">--}}
{{--                                            <a href="{{url('website.single')}}" class="link-product-add-cart">Quick View</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


{{--                                </div>--}}
{{--                                <div class="item-info-product ">--}}
{{--                                    <h4>--}}
{{--                                        <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                    </h4>--}}
{{--                                    <div class="info-product-price">--}}
{{--                                        <span class="item_price">Ksh 0.00</span>--}}
{{--                                        <del>Ksh 0.00</del>--}}
{{--                                    </div>--}}
{{--                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                        <form action="#" method="post">--}}
{{--                                            <fieldset>--}}
{{--                                                <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                <input type="hidden" name="add" value="1" />--}}
{{--                                                <input type="hidden" name="business" value=" " />--}}
{{--                                                <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                                <input type="hidden" name="amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                                <input type="hidden" name="return" value=" " />--}}
{{--                                                <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                            </fieldset>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 product-men">--}}
{{--                            <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                                <div class="men-thumb-item">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                    <div class="men-cart-pro">--}}
{{--                                        <div class="inner-men-cart-pro">--}}
{{--                                            <a href="{{url('website.single')}}" class="link-product-add-cart">Quick View</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


{{--                                </div>--}}
{{--                                <div class="item-info-product ">--}}
{{--                                    <h4>--}}
{{--                                        <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                    </h4>--}}
{{--                                    <div class="info-product-price">--}}
{{--                                        <span class="item_price">Ksh 0.00</span>--}}
{{--                                        <del>Ksh 0.00</del>--}}
{{--                                    </div>--}}
{{--                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                        <form action="#" method="post">--}}
{{--                                            <fieldset>--}}
{{--                                                <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                <input type="hidden" name="add" value="1" />--}}
{{--                                                <input type="hidden" name="business" value=" " />--}}
{{--                                                <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                                <input type="hidden" name="amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                                <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                                <input type="hidden" name="return" value=" " />--}}
{{--                                                <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                            </fieldset>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <!-- //4th section  -->--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- //product right -->--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- //top products -->
    <!-- special offers -->
{{--    <div class="featured-section" id="projects">--}}
{{--        <div class="container">--}}
{{--            <!-- tittle heading -->--}}
{{--            <h3 class="tittle-w3l">Special Offers--}}
{{--                <span class="heading-style">--}}
{{--					<i></i>--}}
{{--					<i></i>--}}
{{--					<i></i>--}}
{{--				</span>--}}
{{--            </h3>--}}
{{--            <!-- //tittle heading -->--}}
{{--            <div class="content-bottom-in">--}}
{{--                <ul id="flexiselDemo1">--}}
{{--                    <li>--}}
{{--                        <div class="w3l-specilamk">--}}
{{--                            <div class="speioffer-agile">--}}
{{--                                <a href="{{url('website.single')}}">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="product-name-w3l">--}}
{{--                                <h4>--}}
{{--                                    <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                </h4>--}}
{{--                                <div class="w3l-pricehkj">--}}
{{--                                    <h6>Ksh 0.00</h6>--}}
{{--                                    <p>Save Ksh 0.00</p>--}}
{{--                                </div>--}}
{{--                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                    <form action="#" method="post">--}}
{{--                                        <fieldset>--}}
{{--                                            <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                            <input type="hidden" name="add" value="1" />--}}
{{--                                            <input type="hidden" name="business" value=" " />--}}
{{--                                            <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                            <input type="hidden" name="amount" value="0.00" />--}}
{{--                                            <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                            <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                            <input type="hidden" name="return" value=" " />--}}
{{--                                            <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                            <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                        </fieldset>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <div class="w3l-specilamk">--}}
{{--                            <div class="speioffer-agile">--}}
{{--                                <a href="{{url('website.single')}}">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="product-name-w3l">--}}
{{--                                <h4>--}}
{{--                                    <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                </h4>--}}
{{--                                <div class="w3l-pricehkj">--}}
{{--                                    <h6>Ksh 0.00</h6>--}}
{{--                                    <p>Save Ksh 0.00</p>--}}
{{--                                </div>--}}
{{--                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                    <form action="#" method="post">--}}
{{--                                        <fieldset>--}}
{{--                                            <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                            <input type="hidden" name="add" value="1" />--}}
{{--                                            <input type="hidden" name="business" value=" " />--}}
{{--                                            <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                            <input type="hidden" name="amount" value="0.00" />--}}
{{--                                            <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                            <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                            <input type="hidden" name="return" value=" " />--}}
{{--                                            <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                            <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                        </fieldset>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <div class="w3l-specilamk">--}}
{{--                            <div class="speioffer-agile">--}}
{{--                                <a href="{{url('website.single')}}">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="product-name-w3l">--}}
{{--                                <h4>--}}
{{--                                    <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                </h4>--}}
{{--                                <div class="w3l-pricehkj">--}}
{{--                                    <h6>Ksh 0.00</h6>--}}
{{--                                    <p>Save Ksh 0.00</p>--}}
{{--                                </div>--}}
{{--                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                    <form action="#" method="post">--}}
{{--                                        <fieldset>--}}
{{--                                            <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                            <input type="hidden" name="add" value="1" />--}}
{{--                                            <input type="hidden" name="business" value=" " />--}}
{{--                                            <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                            <input type="hidden" name="amount" value="0.00" />--}}
{{--                                            <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                            <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                            <input type="hidden" name="return" value=" " />--}}
{{--                                            <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                            <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                        </fieldset>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <div class="w3l-specilamk">--}}
{{--                            <div class="speioffer-agile">--}}
{{--                                <a href="single2.html">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="product-name-w3l">--}}
{{--                                <h4>--}}
{{--                                    <a href="single2.html">Product Name</a>--}}
{{--                                </h4>--}}
{{--                                <div class="w3l-pricehkj">--}}
{{--                                    <h6>Ksh 0.00</h6>--}}
{{--                                    <p>Save Ksh 0.00</p>--}}
{{--                                </div>--}}
{{--                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                    <form action="#" method="post">--}}
{{--                                        <fieldset>--}}
{{--                                            <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                            <input type="hidden" name="add" value="1" />--}}
{{--                                            <input type="hidden" name="business" value=" " />--}}
{{--                                            <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                            <input type="hidden" name="amount" value="0.00" />--}}
{{--                                            <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                            <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                            <input type="hidden" name="return" value=" " />--}}
{{--                                            <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                            <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                        </fieldset>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <div class="w3l-specilamk">--}}
{{--                            <div class="speioffer-agile">--}}
{{--                                <a href="{{url('website.single')}}">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="product-name-w3l">--}}
{{--                                <h4>--}}
{{--                                    <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                </h4>--}}
{{--                                <div class="w3l-pricehkj">--}}
{{--                                    <h6>Ksh 0.00</h6>--}}
{{--                                    <p>Save Ksh 0.00</p>--}}
{{--                                </div>--}}
{{--                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                    <form action="#" method="post">--}}
{{--                                        <fieldset>--}}
{{--                                            <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                            <input type="hidden" name="add" value="1" />--}}
{{--                                            <input type="hidden" name="business" value=" " />--}}
{{--                                            <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                            <input type="hidden" name="amount" value="160.00" />--}}
{{--                                            <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                            <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                            <input type="hidden" name="return" value=" " />--}}
{{--                                            <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                            <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                        </fieldset>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <div class="w3l-specilamk">--}}
{{--                            <div class="speioffer-agile">--}}
{{--                                <a href="single2.html">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="product-name-w3l">--}}
{{--                                <h4>--}}
{{--                                    <a href="single2.html">Product Name</a>--}}
{{--                                </h4>--}}
{{--                                <div class="w3l-pricehkj">--}}
{{--                                    <h6>Ksh 0.00</h6>--}}
{{--                                    <p>Save Ksh 0.00</p>--}}
{{--                                </div>--}}
{{--                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                    <form action="#" method="post">--}}
{{--                                        <fieldset>--}}
{{--                                            <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                            <input type="hidden" name="add" value="1" />--}}
{{--                                            <input type="hidden" name="business" value=" " />--}}
{{--                                            <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                            <input type="hidden" name="amount" value="0.00" />--}}
{{--                                            <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                            <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                            <input type="hidden" name="return" value=" " />--}}
{{--                                            <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                            <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                        </fieldset>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <div class="w3l-specilamk">--}}
{{--                            <div class="speioffer-agile">--}}
{{--                                <a href="{{url('website.single')}}">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="product-name-w3l">--}}
{{--                                <h4>--}}
{{--                                    <a href="{{url('website.single')}}">Product Name</a>--}}
{{--                                </h4>--}}
{{--                                <div class="w3l-pricehkj">--}}
{{--                                    <h6>Ksh 0.00</h6>--}}
{{--                                    <p>Save Ksh 0.00</p>--}}
{{--                                </div>--}}
{{--                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                    <form action="#" method="post">--}}
{{--                                        <fieldset>--}}
{{--                                            <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                            <input type="hidden" name="add" value="1" />--}}
{{--                                            <input type="hidden" name="business" value=" " />--}}
{{--                                            <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                            <input type="hidden" name="amount" value="0.00" />--}}
{{--                                            <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                            <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                            <input type="hidden" name="return" value=" " />--}}
{{--                                            <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                            <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                        </fieldset>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <div class="w3l-specilamk">--}}
{{--                            <div class="speioffer-agile">--}}
{{--                                <a href="single2.html">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="product-name-w3l">--}}
{{--                                <h4>--}}
{{--                                    <a href="single2.html">Name</a>--}}
{{--                                </h4>--}}
{{--                                <div class="w3l-pricehkj">--}}
{{--                                    <h6>Ksh 0.00</h6>--}}
{{--                                    <p>Save Ksh 0.00</p>--}}
{{--                                </div>--}}
{{--                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                                    <form action="#" method="post">--}}
{{--                                        <fieldset>--}}
{{--                                            <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                            <input type="hidden" name="add" value="1" />--}}
{{--                                            <input type="hidden" name="business" value=" " />--}}
{{--                                            <input type="hidden" name="item_name" value="Product Name" />--}}
{{--                                            <input type="hidden" name="amount" value="0.00" />--}}
{{--                                            <input type="hidden" name="discount_amount" value="0.00" />--}}
{{--                                            <input type="hidden" name="currency_code" value="Ksh" />--}}
{{--                                            <input type="hidden" name="return" value=" " />--}}
{{--                                            <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                            <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                        </fieldset>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- //special offers -->

@stop
