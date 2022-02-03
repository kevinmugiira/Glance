@extends('dashboard-header')


@section('content')



    <div>
        <div class="container" style="padding: 30px 0">
            <section style="padding-top: 70px"  class="mt-10">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Profile
                                <a href="{{ url('layouts.Seller') }}" class=" fa fa-home btn btn-primary pull-right"></a>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                @if(auth()->user()->profile->image)
                                    <img src="{{asset('uploads/profile/'. auth()->user()->profile->image)}}" width="100%" />
                                @else
                                    <img src="{{asset('asset/profile/dummy2.jpg')}}" width="100%" />
                                @endif
                            </div>


                            <div class="col-md-8">
                                <p><b>Firstname: </b>{{ auth()->user()->firstname }}</p>
                                <p> <b>Lastname: </b>{{ auth()->user()->lastname }}</p>
                                <p><b>Email: </b>{{ auth()->user()->email }}</p>
                                <p><b>Phone: </b> {{  auth()->user()->profile->mobile }}</p>
                                <hr>
                                <p><b>Line1: </b>  {{ auth()->user()->profile->line1 }}</p>
                                <p><b>Line2: </b> {{  auth()->user()->profile->line2 }}</p>
                                <p><b>City/Town: </b>  {{ auth()->user()->profile->city }}</p>
                                <p><b>County: </b>  {{ auth()->user()->profile->county }}</p>
                                <p><b>Postal code: </b> {{ auth()->user()->profile->postcode }} </p>
                                <a href=" {{url('profile/edit')}}" class="btn btn-info pull-right">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    @include('footer')
@stop
