<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'New Green') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">



    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- index -->




    <!-- Bootstrap Core CSS -->
{{--    <link href="{{asset('asset/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="{{asset('asset/css/style.css')}}" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href="{{asset('asset/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons CSS-->

    <!-- side nav css file -->
    <link href="{{asset('asset/css/SidebarNav.min.css')}}" media='all' rel='stylesheet' type='text/css'/>
    <!-- //side nav css file -->

    <!-- datatables for the admin users table css -->
    <link href="{{asset('asset/css/jquery.datatables.min.css')}}" rel="stylesheet">


    <!-- js-->
    <script src="{{asset('asset/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('asset/js/modernizr.custom.js')}}"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <!--//webfonts-->

    <!-- chart -->
    <script src="{{asset('asset/js/Chart.js')}}"></script>
    <!-- //chart -->

    <!-- Metis Menu -->
    <script src="{{asset('asset/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('asset/js/custom.js')}}"></script>
    <link href="{{asset('asset/css/custom.css')}}" rel="stylesheet">
    <!--//Metis Menu -->
    <style>
        #chartdiv {
            width: 100%;
            height: 295px;
        }
    </style>
    <!--pie-chart --><!-- index page sales reviews visitors pie chart -->
    <script src="{{asset('asset/js/pie-chart.js')}}" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
    <!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

    <!-- requried-jsfiles-for owl -->
    <link href="{{asset('asset/css/owl.carousel.css')}}" rel="stylesheet">
    <script src="{{asset('asset/js/owl.carousel.js')}}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items : 3,
                lazyLoad : true,
                autoPlay : true,
                pagination : true,
                nav:true,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
    <!-- //index -->
</head>

<!--<body class="font-sans antialiased">-->

<!--Page Heading -->


<!-- Page Content -->
<main>

    <section class="bg-success">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2 py-3">
                    <h5><a href="{{url('mtaa')}}" class="text-dark">Home</a> Cart</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if(isset($cart_data))
                        @if(Cookie::get('shopping_cart'))
                            @php $total="0" @endphp
                            <div class="shopping-cart">
                                <div class="shopping-cart-table">
                                    <div class="table-responsive">
                                        <div class="col-md-12 text-right mb-3">
                                            <a href="javascript:void(0)" class="clear_cart font-weight-bold">Clear Cart</a>
                                        </div>
                                        <table class="table table-bordered my-auto  text-center">
                                            <thead>
                                            <tr>
                                                <th class="cart-description">Image</th>
                                                <th class="cart-product-name">Product Name</th>
                                                <th class="cart-price">Price</th>
                                                <th class="cart-qty">Quantity</th>
                                                <th class="cart-total">Grandtotal</th>
                                                <th class="cart-remove">Remove</th>
                                            </tr>
                                            </thead>
                                            <tbody class="my-auto">
                                            @foreach ($cart_data as $data)
                                                <tr class="cartpage">
                                                    <td class="cart-image">
                                                        <a class="entry-thumbnail" href="javascript:void(0)">
                                                            <img src="{{ asset('uploads/products/'.$data['item_image']) }}" width="70px" alt="">
                                                        </a>
                                                    </td>
                                                    <td class="cart-product-name-info">
                                                        <h4 class='cart-product-description'>
                                                            <a href="javascript:void(0)">{{ $data['item_name'] }}</a>
                                                        </h4>
                                                    </td>
                                                    <td class="cart-product-sub-total">
                                                        <span class="cart-sub-total-price">{{ number_format($data['item_price'], 0) }}</span>
                                                    </td>
                                                    <td class="cart-product-quantity">
                                                        <input type="number" class="qty-input form-control" value="{{ $data['item_quantity'] }}" min="1" max="100"/>
                                                    </td>
                                                    <td class="cart-product-grand-total">
                                                        <span class="cart-grand-total-price">{{ number_format($data['item_quantity'] * $data['item_price'], 2) }}</span>
                                                    </td>
                                                    <td style="font-size: 20px;">
                                                        <button type="button" class="delete_cart_data"><li class="fa fa-trash-o"></li> Delete</button>
                                                    </td>
                                                    @php $total = $total + ($data["item_quantity"] * $data["item_price"]) @endphp
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table><!-- /table -->
                                    </div>
                                </div><!-- /.shopping-cart-table -->
                                <div class="row">

                                    <div class="col-md-8 col-sm-12 estimate-ship-tax">
                                        <div>
                                            <a href="{{ url('mtaa') }}" class="btn btn-upper btn-warning outer-left-xs">Continue Shopping</a>
                                        </div>
                                    </div><!-- /.estimate-ship-tax -->

                                    <div class="col-md-4 col-sm-12 ">
                                        <div class="cart-shopping-total">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6 class="cart-subtotal-name">Subtotal</h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6 class="cart-subtotal-price">
                                                        Ksh.
                                                        <span class="cart-grand-price-viewajax">{{ number_format($total, 2) }}</span>
                                                    </h6>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6 class="cart-grand-name">Grand Total</h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6 class="cart-grand-price">
                                                        Ksh.
                                                        <span class="cart-grand-price-viewajax">{{ number_format($total, 2) }}</span>
                                                    </h6>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="cart-checkout-btn text-center">
                                                        @if (Auth::user())
                                                            <a href="{{ url('checkout') }}" class="btn btn-success btn-block checkout-btn">PROCEED TO CHECKOUT</a>
                                                        @else
                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#LoginModal" class="btn btn-success btn-block checkout-btn">PROCEED TO CHECKOUT</button>
                                                            {{--  pop modal for making a login --}}
                                                        <!-- Modal -->
                                                            <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Please Login</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="{{ route('login') }}" method="post">

                                                                                @csrf
                                                                               <div class="col-md-6 flex mb-5">
                                                                                <input type="email" class="user form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Your Email" :value="old('email')" required="">
                                                                                    @error('email')
                                                                                          <span class="invalid-feedback" role="alert">
                                                                                              <strong>{{ $message }}</strong>
                                                                                          </span>
                                                                                    @enderror
                                                                               </div>
                                                                                <div class="col-md-6 flex pt-3">
                                                                                <input type="password" name="password" class="lock form-control @error('password') is-invalid @enderror" placeholder="Password" required="">
                                                                                    @error('password')
                                                                                          <span class="invalid-feedback" role="alert">
                                                                                              <strong>{{ $message }}</strong>
                                                                                          </span>
                                                                                    @enderror
                                                                                </div>
                                                                                <div class="forgot-grid">
                                                                                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>{{ __('Remember me') }}</label>
                                                                                    <div class="forgot">
                                                                                        @if (Route::has('password.request'))
                                                                                            <a href="{{ route('password.request') }}"> {{ __('Forgot your password?') }}</a>
                                                                                        @endif
                                                                                    </div>



                                                                                    <div class="clearfix"> </div>
                                                                                </div>
                                                                                <button class="btn btn-info" type="submit" name="Sign In" >Sign In</button>
                                                                                <div class="registration">
                                                                                    Don't have an account ?
                                                                                    <a class="" href=" {{ route('register') }}">
                                                                                        Create an account
                                                                                    </a>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        @endif
                                                        <h6 class="mt-3">Checkout with NewGreen</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- /.shopping-cart -->
                        @endif
                    @else
                        <div class="row">
                            <div class="col-md-12 mycard py-5 text-center">
                                <div class="mycards">
                                    <h4>Your cart is currently empty.</h4>
                                    <a href="{{ url('mtaa') }}" class="btn btn-upper btn-primary outer-left-xs mt-5">Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div> <!-- /.row -->
        </div><!-- /.container -->
    </section>


    @include('footer')


</main>

<script src="{{asset('asset/js/Chart.bundle.js')}}"></script>
<script src="{{asset('asset/js/utils.js')}}"></script>

<script>
    var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var color = Chart.helpers.color;
    var barChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: 'Dataset 1',
            backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
            borderColor: window.chartColors.red,
            borderWidth: 1,
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
            ]
        }, {
            label: 'Dataset 2',
            backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
            borderColor: window.chartColors.blue,
            borderWidth: 1,
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
            ]
        }]

    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Chart.js Bar Chart'
                }
            }
        });

    };

    document.getElementById('randomizeData').addEventListener('click', function() {
        var zero = Math.random() < 0.2 ? true : false;
        barChartData.datasets.forEach(function(dataset) {
            dataset.data = dataset.data.map(function() {
                return zero ? 0.0 : randomScalingFactor();
            });

        });
        window.myBar.update();
    });

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() {
        var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
        var dsColor = window.chartColors[colorName];
        var newDataset = {
            label: 'Dataset ' + barChartData.datasets.length,
            backgroundColor: color(dsColor).alpha(0.5).rgbString(),
            borderColor: dsColor,
            borderWidth: 1,
            data: []
        };

        for (var index = 0; index < barChartData.labels.length; ++index) {
            newDataset.data.push(randomScalingFactor());
        }

        barChartData.datasets.push(newDataset);
        window.myBar.update();
    });

    document.getElementById('addData').addEventListener('click', function() {
        if (barChartData.datasets.length > 0) {
            var month = MONTHS[barChartData.labels.length % MONTHS.length];
            barChartData.labels.push(month);

            for (var index = 0; index < barChartData.datasets.length; ++index) {
                //window.myBar.addData(randomScalingFactor(), index);
                barChartData.datasets[index].data.push(randomScalingFactor());
            }

            window.myBar.update();
        }
    });

    document.getElementById('removeDataset').addEventListener('click', function() {
        barChartData.datasets.splice(0, 1);
        window.myBar.update();
    });

    document.getElementById('removeData').addEventListener('click', function() {
        barChartData.labels.splice(-1, 1); // remove the label first

        barChartData.datasets.forEach(function(dataset, datasetIndex) {
            dataset.data.pop();
        });

        window.myBar.update();
    });
</script>
<!-- new added graphs chart js-->

<!-- Classie --><!-- for toggle left push menu script -->
<script src="{{asset('asset/js/classie.js')}}"></script>
<script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;

    showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
    };


    function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
            classie.toggle( showLeftPush, 'disabled' );
        }
    }
</script>
<!-- //Classie --><!-- //for toggle left push menu script -->

<!--scrolling js-->
<script src="{{asset('asset/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('asset/js/scripts.js')}}"></script>
<!--//scrolling js-->

<!-- side nav js -->
<script src='{{asset('asset/js/SidebarNav.min.js')}}' type='text/javascript'></script>
<script>
    $('.sidebar-menu').SidebarNav()
</script>
<!-- //side nav js -->

<!-- for index page weekly sales java script -->
<script src="{{asset('asset/js/SimpleChart.js')}}"></script>
<script>
    var graphdata1 = {
        linecolor: "#CCA300",
        title: "Monday",
        values: [
            { X: "6:00", Y: 10.00 },
            { X: "7:00", Y: 20.00 },
            { X: "8:00", Y: 40.00 },
            { X: "9:00", Y: 34.00 },
            { X: "10:00", Y: 40.25 },
            { X: "11:00", Y: 28.56 },
            { X: "12:00", Y: 18.57 },
            { X: "13:00", Y: 34.00 },
            { X: "14:00", Y: 40.89 },
            { X: "15:00", Y: 12.57 },
            { X: "16:00", Y: 28.24 },
            { X: "17:00", Y: 18.00 },
            { X: "18:00", Y: 34.24 },
            { X: "19:00", Y: 40.58 },
            { X: "20:00", Y: 12.54 },
            { X: "21:00", Y: 28.00 },
            { X: "22:00", Y: 18.00 },
            { X: "23:00", Y: 34.89 },
            { X: "0:00", Y: 40.26 },
            { X: "1:00", Y: 28.89 },
            { X: "2:00", Y: 18.87 },
            { X: "3:00", Y: 34.00 },
            { X: "4:00", Y: 40.00 }
        ]
    };
    var graphdata2 = {
        linecolor: "#00CC66",
        title: "Tuesday",
        values: [
            { X: "6:00", Y: 100.00 },
            { X: "7:00", Y: 120.00 },
            { X: "8:00", Y: 140.00 },
            { X: "9:00", Y: 134.00 },
            { X: "10:00", Y: 140.25 },
            { X: "11:00", Y: 128.56 },
            { X: "12:00", Y: 118.57 },
            { X: "13:00", Y: 134.00 },
            { X: "14:00", Y: 140.89 },
            { X: "15:00", Y: 112.57 },
            { X: "16:00", Y: 128.24 },
            { X: "17:00", Y: 118.00 },
            { X: "18:00", Y: 134.24 },
            { X: "19:00", Y: 140.58 },
            { X: "20:00", Y: 112.54 },
            { X: "21:00", Y: 128.00 },
            { X: "22:00", Y: 118.00 },
            { X: "23:00", Y: 134.89 },
            { X: "0:00", Y: 140.26 },
            { X: "1:00", Y: 128.89 },
            { X: "2:00", Y: 118.87 },
            { X: "3:00", Y: 134.00 },
            { X: "4:00", Y: 180.00 }
        ]
    };
    var graphdata3 = {
        linecolor: "#FF99CC",
        title: "Wednesday",
        values: [
            { X: "6:00", Y: 230.00 },
            { X: "7:00", Y: 210.00 },
            { X: "8:00", Y: 214.00 },
            { X: "9:00", Y: 234.00 },
            { X: "10:00", Y: 247.25 },
            { X: "11:00", Y: 218.56 },
            { X: "12:00", Y: 268.57 },
            { X: "13:00", Y: 274.00 },
            { X: "14:00", Y: 280.89 },
            { X: "15:00", Y: 242.57 },
            { X: "16:00", Y: 298.24 },
            { X: "17:00", Y: 208.00 },
            { X: "18:00", Y: 214.24 },
            { X: "19:00", Y: 214.58 },
            { X: "20:00", Y: 211.54 },
            { X: "21:00", Y: 248.00 },
            { X: "22:00", Y: 258.00 },
            { X: "23:00", Y: 234.89 },
            { X: "0:00", Y: 210.26 },
            { X: "1:00", Y: 248.89 },
            { X: "2:00", Y: 238.87 },
            { X: "3:00", Y: 264.00 },
            { X: "4:00", Y: 270.00 }
        ]
    };
    var graphdata4 = {
        linecolor: "Random",
        title: "Thursday",
        values: [
            { X: "6:00", Y: 300.00 },
            { X: "7:00", Y: 410.98 },
            { X: "8:00", Y: 310.00 },
            { X: "9:00", Y: 314.00 },
            { X: "10:00", Y: 310.25 },
            { X: "11:00", Y: 318.56 },
            { X: "12:00", Y: 318.57 },
            { X: "13:00", Y: 314.00 },
            { X: "14:00", Y: 310.89 },
            { X: "15:00", Y: 512.57 },
            { X: "16:00", Y: 318.24 },
            { X: "17:00", Y: 318.00 },
            { X: "18:00", Y: 314.24 },
            { X: "19:00", Y: 310.58 },
            { X: "20:00", Y: 312.54 },
            { X: "21:00", Y: 318.00 },
            { X: "22:00", Y: 318.00 },
            { X: "23:00", Y: 314.89 },
            { X: "0:00", Y: 310.26 },
            { X: "1:00", Y: 318.89 },
            { X: "2:00", Y: 518.87 },
            { X: "3:00", Y: 314.00 },
            { X: "4:00", Y: 310.00 }
        ]
    };
    var Piedata = {
        linecolor: "Random",
        title: "Profit",
        values: [
            { X: "Monday", Y: 50.00 },
            { X: "Tuesday", Y: 110.98 },
            { X: "Wednesday", Y: 70.00 },
            { X: "Thursday", Y: 204.00 },
            { X: "Friday", Y: 80.25 },
            { X: "Saturday", Y: 38.56 },
            { X: "Sunday", Y: 98.57 }
        ]
    };
    $(function () {
        $("#Bargraph").SimpleChart({
            ChartType: "Bar",
            toolwidth: "50",
            toolheight: "25",
            axiscolor: "#E6E6E6",
            textcolor: "#6E6E6E",
            showlegends: true,
            data: [graphdata4, graphdata3, graphdata2, graphdata1],
            legendsize: "140",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in $'
        });
        $("#sltchartype").on('change', function () {
            $("#Bargraph").SimpleChart('ChartType', $(this).val());
            $("#Bargraph").SimpleChart('reload', 'true');
        });
        $("#Hybridgraph").SimpleChart({
            ChartType: "Hybrid",
            toolwidth: "50",
            toolheight: "25",
            axiscolor: "#E6E6E6",
            textcolor: "#6E6E6E",
            showlegends: true,
            data: [graphdata4],
            legendsize: "140",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in $'
        });
        $("#Linegraph").SimpleChart({
            ChartType: "Line",
            toolwidth: "50",
            toolheight: "25",
            axiscolor: "#E6E6E6",
            textcolor: "#6E6E6E",
            showlegends: false,
            data: [graphdata4, graphdata3, graphdata2, graphdata1],
            legendsize: "140",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in $'
        });
        $("#Areagraph").SimpleChart({
            ChartType: "Area",
            toolwidth: "50",
            toolheight: "25",
            axiscolor: "#E6E6E6",
            textcolor: "#6E6E6E",
            showlegends: true,
            data: [graphdata4, graphdata3, graphdata2, graphdata1],
            legendsize: "140",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in $'
        });
        $("#Scatterredgraph").SimpleChart({
            ChartType: "Scattered",
            toolwidth: "50",
            toolheight: "25",
            axiscolor: "#E6E6E6",
            textcolor: "#6E6E6E",
            showlegends: true,
            data: [graphdata4, graphdata3, graphdata2, graphdata1],
            legendsize: "140",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in $'
        });
        $("#Piegraph").SimpleChart({
            ChartType: "Pie",
            toolwidth: "50",
            toolheight: "25",
            axiscolor: "#E6E6E6",
            textcolor: "#6E6E6E",
            showlegends: true,
            showpielables: true,
            data: [Piedata],
            legendsize: "250",
            legendposition: 'right',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in $'
        });

        $("#Stackedbargraph").SimpleChart({
            ChartType: "Stacked",
            toolwidth: "50",
            toolheight: "25",
            axiscolor: "#E6E6E6",
            textcolor: "#6E6E6E",
            showlegends: true,
            data: [graphdata3, graphdata2, graphdata1],
            legendsize: "140",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in $'
        });

        $("#StackedHybridbargraph").SimpleChart({
            ChartType: "StackedHybrid",
            toolwidth: "50",
            toolheight: "25",
            axiscolor: "#E6E6E6",
            textcolor: "#6E6E6E",
            showlegends: true,
            data: [graphdata3, graphdata2, graphdata1],
            legendsize: "140",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in $'
        });
    });

</script>
<!-- //for index page weekly sales java script -->


<!-- Bootstrap Core JavaScript -->
{{--<script src="{{asset('asset/js/bootstrap.js')}}"> </script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- //Bootstrap Core JavaScript -->

<!-- //index (js) -->
<!-- datatables Javascript -->
<script src="{{asset('asset/js/addons/datatable1.js')}}"> </script>
<script src="{{asset('asset/js/addons/datatables2.min.js')}}"> </script>

<!--alertify js -->
<script src="{{asset('assets/js/alertify.min.js')}}"></script>
<script>
    @if($errors->count()>0)
        $('#LoginModal').modal('show')
    @endif
    @if(session('status'))
        alertify.set('notifier','position','top-right')
        alertify.success({{session('status')}})
    @endif
</script>





</body>
</html>
