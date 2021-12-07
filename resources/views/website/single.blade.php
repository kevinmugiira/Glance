@extends('website.master')



@section('stuff')

    <!-- banner-2 -->
    <div class="page-head_agile_info_w3l">

    </div>
    <!-- //banner-2 -->
    <!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{url('mtaa')}}">Home</a>
                        <i>|</i>
                    </li>
                    <li>Product Page</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->
    <!-- Single Page -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Product Page
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
                            <li data-thumb="{{asset('asset/images/placeholder2.png')}}">
                                <div class="thumb-image">
                                    <img src="{{asset('asset/images/placeholder2.png')}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                            </li>
                            <li data-thumb="{{asset('asset/images/placeholder2.png')}}">
                                <div class="thumb-image">
                                    <img src="{{asset('asset/images/placeholder2.png')}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                            </li>
                            <li data-thumb="{{asset('asset/images/placeholder2.png')}}">
                                <div class="thumb-image">
                                    <img src="{{asset('asset/images/placeholder2.png')}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
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
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
                </div>
                <p>
                    <span class="item_price">$Ksh 0.00</span>
                    <del>Ksh 0.00</del>
                    <label>Free delivery</label>
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
                            Sold and fulfilled by (Seller name).
                        </li>
                        <li>
                            1 offer from
                            <span class="item_price">Ksh 0.00</span>
                        </li>
                    </ul>
                </div>
                <div class="product-single-w3l">
                    <p>
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>This is a
                        <label><!--product --></label> product.</p>
                    <ul>
                        <li>
                            <!--product->description-->
                        </li>
                        <li>
                            Description.
                        </li>
                        <li>
                            Description.
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
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //Single Page -->
    <!-- special offers -->
    <div class="featured-section" id="projects">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Add More
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
            <div class="content-bottom-in">
                <ul id="flexiselDemo1">
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single.html">
                                    <img src="{{asset('asset/images/placeholder2.png')}}')}}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single.html">Product Name</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>Ksh 0.00</h6>
                                    <p>Save Ksh 0.00</p>
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
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single.html">
                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single.html">Product Name</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>Ksh 0.00</h6>
                                    <p>Save Ksh 0.00</p>
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
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single.html">
                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single.html">Product Name</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>Ksh 0.00</h6>
                                    <p>Save Ksh 0.00</p>
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
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single2.html">
                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single2.html">Product Name</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>Ksh 0.00</h6>
                                    <p>Save Ksh 0.00</p>
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
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single.html">
                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single.html">Product Name</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>Ksh 0.00</h6>
                                    <p>Save Ksh 0.00</p>
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
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single2.html">
                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single2.html">Product Name</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>Ksh 0.00</h6>
                                    <p>Save Ksh 0.00</p>
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
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single.html">
                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single.html">Product Name</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>Ksh 0.00</h6>
                                    <p>Save Ksh 0.00</p>
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
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single2.html">
                                    <img src="{{asset('asset/images/placeholder2.png')}}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single2.html">Product Name</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>Ksh 0.00</h6>
                                    <p>Save Ksh 0.00</p>
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
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //special offers -->


@stop
