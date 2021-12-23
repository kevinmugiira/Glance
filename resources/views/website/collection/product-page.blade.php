{{--@extends('website.master')--}}



{{--@section('stuff')--}}


{{--    <!-- page -->--}}

{{--    <div class="services-breadcrumb">--}}
{{--        <div class="agile_inner_breadcrumb">--}}
{{--            <div class="container">--}}
{{--                <ul class="w3_short">--}}
{{--                    <li>--}}
{{--                        <a href="{{ url('index') }}">Home</a>--}}
{{--                        <i>|</i>--}}
{{--                    </li>--}}
{{--                    <li> {{ $prod->subcategory->category->group->name }}/{{ $prod->subcategory->category->name }}/{{ $prod->subcategory->name }}/{{$prod->name}}</li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12 mb-3">--}}
{{--                <span class="font-weight-bold sort-font">Sort By :</span>--}}
{{--                <a href="{{ URL::current() }}" class="sort-font">All</a>--}}
{{--                <a href="{{ URL::current()."?sort=price_asc" }}" class="sort-font">Price - Low to High</a>--}}
{{--                <a href="{{ URL::current()."?sort=price_desc" }}" class="sort-font">Price - High to Low</a>--}}
{{--                <a href="{{ URL::current()."?sort=newest" }}" class="sort-font">Newest/Latest</a>--}}
{{--                <a href="{{ URL::current()."?sort=popularity" }}" class="sort-font">Popularity</a>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @foreach($finalprod as $product)--}}

{{--        <div class="col-md-3">--}}
{{--            <div class="product-sec1">--}}
{{--                <div class="col-xs-4 product-men">--}}
{{--                    <div class="men-pro-item simpleCart_shelfItem">--}}
{{--                <div class="men-thumb-item">--}}
{{--                    <img src="{{asset('uploads/products/'. $product->image)}}" class="w-100" width="180px" height="160px" alt="">--}}
{{--                    <div class="men-cart-pro">--}}
{{--                        <div class="inner-men-cart-pro">--}}
{{--                            <a href="{{url('product/'.$product->subcategory->category->group->url.'/'.$product->subcategory->category->url.'/'.$product->subcategory->url.'/'.$product->url)}}" class="link-product-add-cart">Quick View</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--<span class="product-new-top">New</span>-->--}}
{{--                </div>--}}
{{--                <div class="item-info-product ">--}}
{{--                    <h4>--}}
{{--                        <a href="{{url('website.single')}}">{{ $product->name }}</a>--}}
{{--                    </h4>--}}
{{--                    <div class="info-product-price">--}}
{{--                        <span class="item_price">Ksh {{ $product->offer_price }}</span>--}}
{{--                        <del>Ksh {{ $product->original_price }}</del>--}}
{{--                    </div>--}}
{{--                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">--}}
{{--                        <form action="#" method="post">--}}
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
{{--                                <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                            </fieldset>--}}
{{--                        </form>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--    @endforeach--}}
{{--        </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@stop--}}



@extends('website.master')



@section('stuff')


    <!-- banner-2 -->
    <div class="page-head_agile_info_w3l">

    </div>
    <!-- //banner-2 -->
    <!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">

          <div class="product_data">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{url('mtaa')}}">Home</a>
                        <i>|</i>
                    </li>
                    <li>{{$prod->subcategory->category->group->name}}/{{$prod->subcategory->category->name}}/{{$prod->subcategory->name}}/{{$prod->name}}</li>
                </ul>
            </div>
          </div>
        </div>
    </div>
    <!-- //page -->
    <!-- Single Page -->
    <div class="banner-bootom-w3-agileits">
      <div class="product_data">
        <div class="container">
            <!-- tittle heading -->
            @foreach($finalprod as $fprod)
            <h3 class="tittle-w3l"> {{ $fprod->name }}
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
            <div class="col-md-5 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{asset('uploads/products/'. $fprod->image)}}">
                                <div class="thumb-image">
                                    <img src="{{asset('uploads/products/'. $fprod->image)}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                            </li>
                        <li data-thumb="{{asset('uploads/products/'. $fprod->image)}}">
                                <div class="thumb-image">
                                    <img src="{{asset('uploads/products/'. $fprod->image)}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                            </li>
                            <li data-thumb="{{asset('uploads/products/'. $fprod->image)}}">
                                <div class="thumb-image">
                                    <img src="{{asset('uploads/products/'. $fprod->image)}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-7 single-right-left simpleCart_shelfItem">
                <h3>Product Name</h3>
                <div class="rating1">
					<span class="starRating">

                        Rating:
                        @for($i=1; $i<=5; $i++)
                            <i class="fa fa-star text-warning"></i>
                            @endfor
{{--						<input id="rating5" type="radio" name="rating" value="5">--}}
{{--						<label for="rating5">5</label>--}}
{{--						<input id="rating4" type="radio" name="rating" value="4">--}}
{{--						<label for="rating4">4</label>--}}
{{--						<input id="rating3" type="radio" name="rating" value="3" checked="">--}}
{{--						<label for="rating3">3</label>--}}
{{--						<input id="rating2" type="radio" name="rating" value="2">--}}
{{--						<label for="rating2">2</label>--}}
{{--						<input id="rating1" type="radio" name="rating" value="1">--}}
{{--						<label for="rating1">1</label>--}}
					</span>
                </div>
                <p>
                    <span class="item_price">Ksh {{$prod->offer_price}}</span>
                    <del>Ksh {{$prod->original_price}}</del>
                    <label>Delivery Available</label>
                </p>
                <div class="single-infoagile">
                    <ul>
                        <li>
                            Cash on Delivery Eligible.
                        </li>
                        <li>
                            Shipping Speed to Deliver.
                        </li>
                        <li>
                            Sold and fulfilled by Seller .
                        </li>
                        <li>
                            1 offer from
                            <span class="item_price">Ksh {{$prod->offer_price}}</span>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-2 col-3">
                        <input type="hidden" class="product_id" value="{{ $prod->id }}">
                        <input type="number" class="qty-input form-control" value="1" min="1" max="100"/>
                    </div>
                </div>
                <div class="product-single-w3l">
                    <p>
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>This is a
                        <label><!--product --></label> product.</p>
                    <ul>
                        <li>
                            <!--product->description-->
                            {{$fprod->p_highlights}}
                        </li>
                        <li>
                            {{$fprod->p_description }}
                        </li>
                        <li>
                            {{$prod->p_details }}
                        </li>
                        <li>
                            Description.
                        </li>
                    </ul>
                    <p>
                        <i class="fa fa-refresh" aria-hidden="true"></i>All perishable food products are
                        <label>non-returnable.</label>
                    </p>
                </div>
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form action="#" method="post">

                            <div class="row">
                                <button type="submit" class="add-to-cart-btn btn btn-primary "> Add to Cart </button>
                            <!--<fieldset>
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
                            </fieldset>-->
                            </div>
                        </form>
                    </div>

                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
      </div>
    </div>

    @endforeach
    <!-- //Single Page -->
    <!-- special offers -->
{{--    <div class="featured-section" id="projects">--}}
{{--        <div class="container">--}}
{{--            <!-- tittle heading -->--}}
{{--            <h3 class="tittle-w3l">Add More--}}
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
{{--                                <a href="single.html">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}')}}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="product-name-w3l">--}}
{{--                                <h4>--}}
{{--                                    <a href="single.html">Product Name</a>--}}
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
{{--                                <a href="single.html">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="product-name-w3l">--}}
{{--                                <h4>--}}
{{--                                    <a href="single.html">Product Name</a>--}}
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
{{--                                <a href="single.html">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="product-name-w3l">--}}
{{--                                <h4>--}}
{{--                                    <a href="single.html">Product Name</a>--}}
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
{{--                                <a href="single.html">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="product-name-w3l">--}}
{{--                                <h4>--}}
{{--                                    <a href="single.html">Product Name</a>--}}
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
{{--                                <a href="single.html">--}}
{{--                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="product-name-w3l">--}}
{{--                                <h4>--}}
{{--                                    <a href="single.html">Product Name</a>--}}
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
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- //special offers -->

    </div>
@stop






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

