

<!DOCTYPE HTML>
<html>
<head>
    <title> SignUp Page :: NewGreen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('asset/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="{{asset('asset/css/style.css')}}" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href="{{asset('asset/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons CSS -->

    <!-- side nav css file -->
    <link href='{{asset('asset/css/SidebarNav.min.css')}}' media='all' rel='stylesheet' type='text/css'/>
    <!-- side nav css file -->

    <!-- js-->
    <script src="{{asset('asset/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('asset/js/modernizr.custom.js')}}"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <!--//webfonts-->

    <!-- Metis Menu -->
    <script src="{{asset('asset/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('asset/js/custom.js')}}"></script>
    <link href="{{asset('asset/css/custom.css')}}" rel="stylesheet">
    <!--//Metis Menu -->

</head>




        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page signup-page">
                <h2 class="title1">SignUp Here</h2>
                <div class="sign-up-row widget-shadow">
                    <h5>Personal Information :</h5>
                    <form action="{{ route('register') }}" method="post">

                        @csrf

                        <div class="sign-u">
                            <input type="text" name="firstname" placeholder="First Name" required="">
                            <div class="clearfix"> </div>
                        </div>
                        <div class="sign-u">
                            <input type="text" placeholder="Last Name" required="">
                            <div class="clearfix"> </div>
                        </div>
                        <div class="sign-u">
                            <input type="email" placeholder="Email Address" required="">
                            <div class="clearfix"> </div>
                        </div>


                        <h6>Login Information :</h6>
                        <div class="sign-u">
                            <input type="password" placeholder="Password" required="">
                            <div class="clearfix"> </div>
                        </div>
                        <div class="sign-u">
                            <input type="password" placeholder="Confirm Password" required="">
                        </div>
                        <div class="clearfix"> </div>
                        <div class="sub_home">
                            <input type="submit" value="Submit">
                            <div class="clearfix"> </div>
                        </div>
                        <div class="registration">
                            Already Registered.
                            <a class="" href="{{ route('login') }}">
                                Login
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- side nav js -->
    <script src='{{asset('asset/js/SidebarNav.min.js')}}' type='text/javascript'></script>
    <script>
        $('.sidebar-menu').SidebarNav()
    </script>
    <!-- //side nav js -->

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

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('asset/js/bootstrap.js')}}"> </script>


</html>

