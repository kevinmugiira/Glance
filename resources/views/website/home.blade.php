@extends('website.master')



@section('stuff')

    <!--my banner starts here -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <!--<h3>Big
                            <span>Save</span>
                        </h3>
                        <p>Get flat
                           <span>10%</span> Cashback</p>-->
                        <a class="button2" href="{{url('product/page')}}">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item2">
                <div class="container">
                    <div class="carousel-caption">
                        <!--<h3>Healthy
                            <span>Saving</span>
                        </h3>
                        <p>Get Upto
                            <span>30%</span> Off</p>-->
                        <a class="button2" href="{{url('product/page')}}">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item3">
                <div class="container">
                    <div class="carousel-caption">
                        <!--<h3>Big
                            <span>Deal</span>
                        </h3>
                        <p>Get Best Offer Upto
                            <span>20%</span>
                        </p>-->
                        <a class="button2" href="{{url('product/page')}}">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item4">
                <div class="container">
                    <div class="carousel-caption">
                        <!--<h3>Today
                            <span>Discount</span>
                        </h3>
                        <p>Get Now
                            <span>40%</span> Discount</p>-->
                        <a class="button2" href="{{url('product/page')}}">Shop Now </a>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- //banner -->

    <!-- top Products -->
    <div class="ads-grid">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Most Selling Products
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
            <!-- product left -->
            <div class="side-bar col-md-3">
                <div class="search-hotel">
                    <h3 class="agileits-sear-head">Search Category..</h3>
                    <form action="#" method="post">
                        <input type="search" placeholder="Product name..." name="search" required="">
                        <input type="submit" value=" ">
                    </form>
                </div>
                <!-- price range -->
                <!--<div class="range">
                    <h3 class="agileits-sear-head">Price range</h3>
                    <ul class="dropdown-menu6">
                        <li>

                            <div id="slider-range"></div>
                            <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                        </li>
                    </ul>
                </div>-->
                <!-- //price range -->
                <!-- food preference -->
                <!--<div class="left-side">
                    <h3 class="agileits-sear-head">Food Preference</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Vegetarian</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Non-Vegetarian</span>
                        </li>
                    </ul>
                </div>-->
                <!-- //food preference -->
                <!-- discounts -->
                <!--<div class="left-side">
                    <h3 class="agileits-sear-head">Discount</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">5% or More</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">10% or More</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">20% or More</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">30% or More</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">50% or More</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">60% or More</span>
                        </li>
                    </ul>
                </div>-->
                <!-- //discounts -->
                <!-- reviews -->
               <!-- <div class="customer-rev left-side">
                    <h3 class="agileits-sear-head">Customer Review</h3>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>5.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>4.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>2.5</span>
                            </a>
                        </li>
                    </ul>
                </div>-->
                <!-- //reviews -->
                <!-- cuisine -->
                <!--<div class="left-side">
                    <h3 class="agileits-sear-head">Cuisine</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">South American</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">French</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Greek</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Chinese</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Japanese</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Italian</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Mexican</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Thai</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Indian</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span"> Spanish </span>
                        </li>
                    </ul>-->
                </div>
                <!-- //cuisine -->
                <!-- deals -->
               <!-- <div class="deal-leftmk left-side">
                    <h3 class="agileits-sear-head">Special Deals</h3>
                    <div class="special-sec1">
                        <div class="col-xs-4 img-deals">
                            <img src="{{asset('asset2/images/d2.jpg')}}" alt="">
                        </div>
                        <div class="col-xs-8 img-deal1">
                            <h3>Lay's Potato Chips</h3>
                            <a href="{{url('website.single')}}">$18.00</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="special-sec1">
                        <div class="col-xs-4 img-deals">
                            <img src="{{asset('asset2/images/d1.jpg')}}" alt="">
                        </div>
                        <div class="col-xs-8 img-deal1">
                            <h3>Bingo Mad Angles</h3>
                            <a href="{{url('website.single')}}">$9.00</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="special-sec1">
                        <div class="col-xs-4 img-deals">
                            <img src="{{asset('asset2/images/d4.jpg')}}" alt="">
                        </div>
                        <div class="col-xs-8 img-deal1">
                            <h3>Tata Salt</h3>
                            <a href="{{url('website.single')}}">$15.00</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="special-sec1">
                        <div class="col-xs-4 img-deals">
                            <img src="{{asset('asset2/images/d5.jpg')}}" alt="">
                        </div>
                        <div class="col-xs-8 img-deal1">
                            <h3>Gujarat Dry Fruit</h3>
                            <a href="{{url('website.single')}}">$525.00</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="special-sec1">
                        <div class="col-xs-4 img-deals">
                            <img src="{{asset('asset2/images/d3.jpg')}}" alt="">
                        </div>
                        <div class="col-xs-8 img-deal1">
                            <h3>Cadbury Dairy Milk</h3>
                            <a href="{{url('website.single')}}">$149.00</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>-->
                <!-- //deals -->

            <!-- //product left -->
            <!-- product right -->
            <div class="agileinfo-ads-display col-md-9">
                <div class="wrapper">
                    <!-- first section (nuts) -->

                    <div class="product-sec1">
                        <h3 class="heading-tittle">{{ $groupII->name }} </h3>

                            <!--foreach()-->
                            @foreach($productsII as $prod)
                            <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('uploads/products/'. $prod->image)}}" height="150px" width="150px" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{url('product-page/'.$prod->subcategory->category->group->url.'/'.$prod->subcategory->category->url.'/'.$prod->subcategory->url.'/'.$prod->url)}}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>

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
                                        <a class="btn btn-block button btn-primary" href="{{url('product-page/'.$prod->subcategory->category->group->url.'/'.$prod->subcategory->category->url.'/'.$prod->subcategory->url.'/'.$prod->url)}}">Item</a>

                                    </div>

                                </div>
                            </div>
                            </div>
                            @endforeach



                        <div class="clearfix"></div>
                    </div>
                    <!-- //first section (nuts) -->
                    <!-- second section (nuts special) -->
                   <!-- <div class="product-sec1 product-sec2">
                        <div class="col-xs-7 effect-bg">
                            <h3 class="">Pure Energy</h3>
                            <h6>Enjoy our all healthy Products</h6>
                            <p>Get Extra 10% Off</p>
                        </div>
                        <h3 class="w3l-nut-middle">Nuts & Dry Fruits</h3>
                        <div class="col-xs-5 bg-right-nut">
                            <img src="{{asset('asset2/images/nut1.png')}}" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div>-->
                    <!-- //second section (nuts special) -->
                    <!-- third section (oils) -->
                    <div class="product-sec1">
                        <h3 class="heading-tittle">{{ $groupI->name }}</h3>
                            @foreach($productsIII  as $pro)
                            <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('uploads/products/'. $pro->image)}}" height="150px" width="150px" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{url('product-page/'.$pro->subcategory->category->group->url.'/'.$pro->subcategory->category->url.'/'.$pro->subcategory->url.'/'.$pro->url)}}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <!--<span class="product-new-top">Instock</span>-->
                                </div>
                                <div class="item-info-product ">
                                    <h4>
                                        <a href="{{url('website.single')}}">{{ $pro->name }}</a>
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price">Ksh {{$pro->offer_price}}</span>
                                        <del>Ksh {{$pro->original_price}}</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <a class="btn btn-block button btn-primary" href="{{url('product-page/'.$pro->subcategory->category->group->url.'/'.$pro->subcategory->category->url.'/'.$pro->subcategory->url.'/'.$pro->url)}}">Item</a>


                                    </div>

                                </div>
                            </div>
                            </div>
                            @endforeach

                        <div class="clearfix"></div>
                    </div>
                    <!-- //third section (oils) -->
                    <!-- fourth section (noodles) -->
                    <div class="product-sec1">
                        <h3 class="heading-tittle" >{{ $groupII->name }}</h3>

                            <!--foreach()-->
                            @foreach($products as $pr)
                            <div class="col-md-4 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('uploads/products/'. $pr->image)}}" height="150px" width="150px" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{url('product-page/'.$pr->subcategory->category->group->url.'/'.$pr->subcategory->category->url.'/'.$pr->subcategory->url.'/'.$pr->url)}}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4>
                                            <a href="{{url('website.single')}}">{{ $pr->name }}</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price">Ksh {{$pr->offer_price}}</span>
                                            <del>Ksh {{$pr->original_price}}</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <a class="btn btn-block button btn-primary" href="{{url('product-page/'.$prod->subcategory->category->group->url.'/'.$prod->subcategory->category->url.'/'.$prod->subcategory->url.'/'.$prod->url)}}">Item</a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach



                        <div class="clearfix"></div>
                    </div>

                    <!-- //fourth section (noodles) -->
                </div>
            </div>
            <!-- //product right -->
        </div>
    </div>
    <!-- //top products -->
    <!-- special offers -->
    <div class="featured-section" id="projects">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">{{$groupIV->name}}
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
           <div class="content-bottom-in">
                <ul id="flexiselDemo1">
                    @foreach($productsII as $prd)
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="{{url('website.single')}}">
                                    <img src="{{asset('uploads/products/'. $prd->image)}}" height="150px" width="150px" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    {{ $prd->name }}
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>Ksh {{ $prd->offer_price }}</h6>
                                    <p>From Ksh {{$pr->original_price}}</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <a class="btn btn-block button btn-primary" href="{{url('product-page/'.$prod->subcategory->category->group->url.'/'.$prod->subcategory->category->url.'/'.$prod->subcategory->url.'/'.$prod->url)}}">Item</a>

                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <!-- //special offers -->

    @stop
