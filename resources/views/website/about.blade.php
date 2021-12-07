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
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->
    <!-- about page -->
    <!-- welcome -->
    <div class="welcome">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Welcome to our Site
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
            <div class="w3l-welcome-info">
                <div class="col-sm-6 col-xs-6 welcome-grids">
                    <div class="welcome-img">
                        <img src="{{asset('asset2/images/nyani.jpg')}}" class="img-responsive zoom-img" alt="">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-6 welcome-grids">
                    <div class="welcome-img">
                        <img src="{{asset('asset2/images/passions.jpg')}}" class="img-responsive zoom-img" alt="">
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="w3l-welcome-text">
                <p>NewGreen Solutions is a FREE online marketplace where buyers and sellers meet to trade farm related products. It’s accessible through the internet and allows farmers to post free ads of their farm produce. The platform also is scaling to open a physical shop where farmers can have access to affordable farm products and inputs.</p>
                <p>One of the most persistent problems for smallholder farmers in Kenya’s agricultural sector is accessing information and markets, which prevents them from pushing through commercialization. Our aim as NewGreen is to unlock the door to better markets and information access for these smallholder farmers. </p>
            </div>
        </div>
    </div>
    <!-- //welcome -->
    <!-- video -->
    <!--<div class="about">
        <div class="container">
            <!-- tittle heading -->
           <!-- <h3 class="tittle-w3l">Our Video
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
           <!-- <div class="about-tp">
                <div class="col-md-8 about-agileits-w3layouts-left">
                    <iframe src="https://player.vimeo.com/video/15520702?color=ffffff&title=0&byline=0"></iframe>
                </div>
                <div class="col-md-4 about-agileits-w3layouts-right">
                    <div class="img-video-about">
                        <img src="{{asset('asset2/images/videoimg2.png')}}" alt="">
                    </div>
                    <h4>Grocery Shoppy</h4>
                    <p>No.1 Leading E-commerce marketplace with over 70 million Products</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>-->
    <!-- //video-->
    <!-- //about page -->


    @stop
