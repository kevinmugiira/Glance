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
                    <li>contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->
    <!-- contact page -->
    <div class="contact-w3l">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Contact Us
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
            <!-- contact -->
            <div class="contact agileits">
                <div class="contact-agileinfo">
                    <div class="contact-form wthree">
                        @if(Session::get('message_sent'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('message_sent')}}
                            </div>
                            @endif
                        <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="">
                                <input type="text"
                                       name="name"
                                       placeholder="Name"
                                       required="">
                            </div>
                            <div class="">
                                <input class="text"
                                       type="text"
                                       name="subject"
                                       placeholder="Subject"
                                       required="">
                            </div>
                            <div class="">
                                <input class="email"
                                       type="email"
                                       name="email"
                                       placeholder="Email"
                                       required="">
                            </div>
                            <div class="">
                                <textarea placeholder="Message"
                                          name="message"
                                          required=""></textarea>
                            </div>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                    <div class="contact-right wthree">
                        <div class="col-xs-7 contact-text w3-agileits">
                            <h4>GET IN TOUCH :</h4>
                            <p>
                                <i class="fa fa-map-marker"></i> Ruiru Kenya.</p>
                            <p>
                                <i class="fa fa-phone"></i> Telephone : 0784866993</p>
                            <p>
                                <i class="fa fa-fax"></i> Work : 0710955090</p>
                            <p>
                                <i class="fa fa-envelope-o"></i> Email :
                                <a href="mailto:example@mail.com">kevinm@net-co.online</a>
                            </p>
                        </div>
                        <div class="col-xs-5 contact-agile">
                            <img src="{{asset('asset2/images/6144.jpg')}}" alt="">
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!-- //contact -->
        </div>
    </div>
    <!-- map -->
    <div class="map w3layouts">
        <iframe src="https://maps.google.com/maps?q=Ruiru%20Kenya&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen></iframe>

    </div>
    <!-- //map -->


    @stop
