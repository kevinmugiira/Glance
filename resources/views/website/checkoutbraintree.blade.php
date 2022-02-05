


@extends('website.master')



@section('stuff')



    <!-- banner-2 -->
    <!--<div class="page-head_agile_info_w3l">-->


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
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->
    <!-- checkout page -->
    <div class="privacy">

        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Checkout
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->

            <div class="row">
                <div class="container mb-5">
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
                </div>
            </div>

                                    <form method="post" id="payment-form" action="{{ url('/braincheckout') }}">
                                        @csrf

                                            <div class="controls col-md-4 mt-10">
                                                <label for="amount">

                                                    <input type="number"
                                                           id="amount"
                                                           placeholder="Amount"
                                                           name="amount"
                                                           value="50"
                                                           >
                                                </label>
                                            </div>

                                            <div class="bt-drop-in-wrapper">
                                                <div id="bt-dropin"></div>
                                            </div>
                                        <input id="nonce" name="payment_method_nonce" type="hidden" />
                                        <button class="button" type="submit"><span>Test Transaction</span></button>
                                    </form>

                            <script src="https://js.braintreegateway.com/web/dropin/1.32.0/js/dropin.min.js"></script>
                            <script>
                                var form = document.querySelector('#payment-form');
                                var client_token = "{{ $token }}";

                                braintree.dropin.create({
                                    authorization: client_token,
                                    selector: '#bt-dropin',
                                    paypal: {
                                        flow: 'vault'
                                    }
                                }, function (createErr, instance) {
                                    if (createErr) {
                                        console.log('Create Error', createErr);
                                        return;
                                    }
                                    form.addEventListener('submit', function (event) {
                                        event.preventDefault();

                                        instance.requestPaymentMethod(function (err, payload) {
                                            if (err) {
                                                console.log('Request Payment Method Error', err);
                                                return;
                                            }

                                            // Add the nonce to the form and submit
                                            document.querySelector('#nonce').value = payload.nonce;
                                            form.submit();
                                        });
                                    });
                                });
                            </script>
                        <div class="clearfix"> </div>
        </div>
    </div>



    <!-- //checkout page -->

    {{--    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>--}}



@stop

