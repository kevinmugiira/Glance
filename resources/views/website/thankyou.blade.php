@extends('website.checkout.master')



@section('stu')

    <!-- banner-2 -->

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
                    <li>Thankyou</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->
    <!-- payment page-->

    @if(session('success_message'))
        <div class="alert alert-success">
            {{ session('success_message') }}
        </div>
    @endif

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="privacy">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l"> Thankyou for Shopping with us!
                @if(session('status'))
                    <h3>{{ session('status') }}</h3>
                @endif

                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->

        </div>
    </div>
    <!-- //payment page -->


@stop
