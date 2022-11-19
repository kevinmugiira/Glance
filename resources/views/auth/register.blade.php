


{{--<x-guest-layout>--}}
{{--    <x-jet-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-jet-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-jet-validation-errors class="mb-4" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--    <div>--}}
{{--        <x-jet-label for="name" value="{{ __('First Name') }}" />--}}
{{--                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />--}}


{{--            <x-jet-label for="name" value="{{ __('Last Name') }}" />--}}
{{--            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />--}}
{{--    </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
{{--                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
{{--    <div class="mt-4">--}}
{{--        <x-jet-label for="terms">--}}
{{--            <div class="flex items-center">--}}
{{--                <x-jet-checkbox name="terms" id="terms"/>--}}

{{--                <div class="ml-2">--}}
{{--{!! __('I agree to the :terms_of_service and :privacy_policy', [--}}
{{--                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',--}}
{{--                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',--}}
{{--                                ]) !!}--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-jet-label>--}}
{{--</div>--}}
{{--@endif--}}

{{--    <div class="flex items-center justify-end mt-4">--}}
{{--        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--    </a>--}}

{{--    <x-jet-button class="ml-4">--}}
{{--{{ __('Register') }}--}}
{{--    </x-jet-button>--}}
{{--</div>--}}
{{--</form>--}}
{{--</x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}







<!DOCTYPE HTML>
<html>
<head>
    <title> SignUp Page :: NewGreen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" /> -->
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

{{--                    <x-guest-layout>--}}
{{--                    <x-jet-authentication-card>--}}
{{--                        <x-slot name="logo">--}}
{{--                            <x-jet-authentication-card-logo />--}}
{{--                        </x-slot>--}}

{{--                        <x-jet-validation-errors class="mb-4" />--}}

                    <form action="{{ route('register-user') }}" method="post">

                        @CSRF

                        <div class="sign-u">
{{--                            <x-jet-label for="firstname" value="{{ __('First Name') }}" />--}}
                            <input type="text" name="firstname" placeholder="First Name" required="">
{{--                            <x-jet-label for="firstname" value="{{ __('First Name') }}" />--}}
{{--                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="name" />--}}
                            <div class="clearfix"> </div>
                        </div>
                        <div class="sign-u">
{{--                            <x-jet-label for="lastname" value="{{ __('Last Name') }}" />--}}
{{--                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="name" />--}}
                            <input type="text" name="lastname" placeholder="Last Name" :value="old('lastname')" required="">
                            <div class="clearfix"> </div>
                        </div>
                        <div class="sign-u">
{{--                            <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <div class="clearfix"> </div>
                        </div>


                        <h6>Login Information :</h6>
                        <div class="sign-u">
{{--                            <x-jet-label for="password" value="{{ __('Password') }}" />--}}
{{--                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
                            <input type="password" name="password" placeholder="Password" required="">
                            <div class="clearfix"> </div>
                        </div>
                        <div class="sign-u">
{{--                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
{{--                            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" required="">
                        </div>
                        <div class="clearfix"> </div>
                        <div class="sub_home">
                            <input type="submit" name="register"  value="Submit">

{{--                            <x-jet-button class="ml-4">--}}
{{--                                {{ __('Register') }}--}}
{{--                            </x-jet-button>--}}

                            <div class="clearfix"> </div>
                        </div>
                        <div class="registration">
                            Already Registered.
                            <a class="" href="{{ route('login') }}">
                                Login
                            </a>
                        </div>
                    </form>

{{--                        <form method="POST" action="{{ route('register') }}">--}}
{{--                            @csrf--}}

{{--                            <div>--}}
{{--                                <x-jet-label for="name"  />--}}
{{--                                <x-jet-input id="name" class="block mt-1 w-full" type="text" placeholder="Firstname" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />--}}



{{--                                <x-jet-label for="name"  />--}}
{{--                                <x-jet-input id="name" class="block mt-1 w-full" type="text" placeholder="Lastname" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />--}}

{{--                            </div>--}}

{{--                            <div class="mt-4">--}}
{{--                                <x-jet-label for="email" />--}}
{{--                                <x-jet-input id="email" class="block mt-1 w-full" type="email" placeholder="Email" name="email" :value="old('email')" required />--}}

{{--                            </div>--}}

{{--                            <div class="mt-4">--}}
{{--                                <x-jet-label for="password"  />--}}
{{--                                <x-jet-input id="password" class="block mt-1 w-full" type="password" placeholder="Password" name="password" required autocomplete="new-password" />--}}

{{--                            </div>--}}

{{--                            <div class="mt-4">--}}
{{--                                <x-jet-label for="password_confirmation"  />--}}
{{--                                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" />--}}

{{--                            </div>--}}

{{--                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
{{--                                <div class="mt-4">--}}
{{--                                    <x-jet-label for="terms">--}}
{{--                                        <div class="flex items-center">--}}
{{--                                            <x-jet-checkbox name="terms" id="terms"/>--}}

{{--                                            <div class="ml-2">--}}
{{--                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [--}}
{{--                                                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',--}}
{{--                                                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',--}}
{{--                                                                                ]) !!}--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </x-jet-label>--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                            <div class="flex items-center justify-end mt-4">--}}
{{--                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                                    {{ __('Already registered?') }}--}}
{{--                                </a>--}}

{{--                                <x-jet-button class="ml-4">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </x-jet-button>--}}
{{--                            </div>--}}
{{--                        </form>--}}

{{--    </x-jet-authentication-card>--}}
{{--                    </x-guest-layout>--}}
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



