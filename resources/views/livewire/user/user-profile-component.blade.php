@extends('dashboard-header')


@section('content')



<div>
    <div class="container" style="padding: 30px 0">
        <section style="padding-top: 70px"  class="mt-10">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Profile</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        @if($userss->profile->image)
                            <img src="{{asset('asset/profile') }}/{{$userss->profile->image}}" width="100%" />
                        @else
                            <img src="/asset/profile/dummy2.jpg" width="100%" />
                        @endif
                    </div>


                    <div class="col-md-8">
                        <p><b>Firstname: </b>{{ $userss->firstname }}</p>
                        <p> <b>Lastname: </b>{{ $userss->lastname }}</p>
                        <p><b>Email: </b>{{ $userss->email }}</p>
                        <p><b>Phone: </b> {{  $userss->profile->mobile }}</p>
                        <hr>
                        <p><b>Line1: </b>  {{ $userss->profile->line1 }}</p>
                        <p><b>Line2: </b> {{  $userss->profile->line2 }}</p>
                        <p><b>City/Town: </b>  {{ $userss->profile->city }}</p>
                        <p><b>County: </b>  {{ $userss->profile->county }}</p>
                        <p><b>Postal code: </b> {{ $userss->profile->postcode }} </p>
                        <a href=" {{route('user.editProfile')}}" class="btn btn-info pull-right">Update Profile</a>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>
</div>

@include('footer')
    @stop
