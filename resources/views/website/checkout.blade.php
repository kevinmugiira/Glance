


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



            <form action="{{ url('place-order') }}" method="POST">
            <div class="checkout-right">


                    @csrf

                <h4>Your shopping cart contains:
                    <span> Products</span>
                </h4>
                <div class="table-responsive">
                    @if(isset($cart_data))
                        @if(Cookie::get('shopping_cart'))
                            @php $total="0" @endphp
                            <table class="timetable_sub">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Quantity</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart_data as $data)
                        <tr class="rem1">
                            <td class="invert">1</td>
                            <td class="invert-image">
                                <a href="#">
                                    <img src="{{asset('uploads/products/'.$data['item_image'])}}" alt=" " width="70px" height="50px" class="img-responsive">
                                </a>
                            </td>
                            <td class="invert">
                                {{ number_format($data['item_price'], 0) }}
                            </td>
                            <td class="invert">{{ $data['item_quantity'] }}</td>
                            @php $total = $total + ($data["item_quantity"] * $data["item_price"]) @endphp
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                            <hr>
                            <div class="text-right">
                                <h3>Grand Total: Ksh {{ number_format($total, 0) }}</h3>
                            </div>
                        @endif
                    @else
                        <div class="row">
                            <div class="col-md-12 mycard py-5 text-center">
                                <div class="mycards">
                                    <h4>Your cart is currently empty.</h4>
                                    <a href="{{ url('prodcategory/veg') }}" class="btn btn-upper btn-primary outer-left-xs mt-5">Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
            <div class="checkout-left">
                <div class="address_form_agile">
                    <h4>Add Delivery Details</h4>



                        <div class="creditly-wrapper wthree, w3_agileits_wrapper">
                            <div class="information-wrapper">
                                <div class="first-row">
                                    <div class="col-md-6">
                                    <div class="controls">
                                        <input class="billing-address-name"
                                               type="text"
                                               name="firstname"
                                               placeholder="First Name"
                                               value="{{Auth::user()->firstname}}"
                                               required="">
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                    <div class="controls">
                                        <input class="billing-address-name"
                                               type="text"
                                               name="lastname"
                                               placeholder="Last Name"
                                               value="{{Auth::user()->lastname}}"
                                               required="">
                                    </div>
                                    </div>
                                    <div class="w3_agileits_card_number_grids">
                                        <div class="w3_agileits_card_number_grid_left">
                                            <div class="controls col-md-6">
                                                <input type="text"
                                                       placeholder="Mobile Number"
                                                       name="mobile"
                                                       value="{{Auth::user()->phone}}"
                                                       required="">
                                            </div>
                                        </div>
                                        <div class="controls col-md-6">
                                            <input type="text"
                                                   placeholder="email"
                                                   name="email"
                                                   value="{{Auth::user()->email}}"
                                                   required="">
                                        </div>
                                    </div>
                                        <div class="w3_agileits_card_number_grid_right">
                                            <div class="controls col-md-4">
                                                <input type="text"
                                                       placeholder="county"
                                                       name="county"
                                                       value="{{Auth::user()->county}}"
                                                       required="">
                                            </div>
                                        </div>
                                        <div class="clear"> </div>

                                    <div class="controls col-md-4">
                                        <input type="text"
                                               placeholder="Town/City"
                                               name="city"
                                               value="{{Auth::user()->city}}"
                                               required="">
                                    </div>

                                    <div class="controls col-md-4">
                                        <input type="text"
                                               placeholder="Address"
                                               name="address"
                                               value="{{Auth::user()->address}}"
                                               required="">
                                    </div>


                                    <div class="checkout-right-basket">
                                        <button type="submit" name="place_order" class="btn btn-primary btn-block fa fa-hand-o-right" aria-hidden="true">Place your order</button>
                                </div>
                                <button type="button" style="padding-top: 5px; margin-top: 3px" class="razor_pay_btn btn btn-info btn-block ">Place order with RazorPay</button>

                                    <form method="post" id="payment-form" action="{{ url('/checkout') }}">
                                        @csrf
                                        <section>
                                            <label for="amount">
                                                <span class="input-label">Amount</span>
                                                <div class="input-wrapper amount-wrapper">
                                                    <input id="amount" name="amount" type="tel" min="1" placeholder="Amount" value="10">
                                                </div>
                                            </label>

                                            <div class="bt-drop-in-wrapper">
                                                <div id="bt-dropin"></div>
                                            </div>
                                        </section>

                                        <input id="nonce" name="payment_method_nonce" type="hidden" />
                                        <button class="button" type="submit"><span>Test Transaction</span></button>
                                    </form>
                                </div>
                            </div>

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
                            </div>
                        </div>



        </div>
                </div>
            </div>
            </form>
                <div class="clearfix"> </div>
            </div>
        </div>

    <!-- //checkout page -->

{{--    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>--}}



    @stop


@section('script')

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="{{asset('asset2/js/checkout.js')}}"></script>

@endsection
