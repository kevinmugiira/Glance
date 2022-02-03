@extends('dashboard-header')


@section('content')



    <div>
        <div class="container" style="padding: 30px 0">
            <section style="padding-top: 70px"  class="mt-10">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Update Profile</h3>
                        </div>
                        <div class="panel-body">

                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert"> {{Session::get('message')}}</div>
                            @endif

                            <form action="{{url('/updateProfile/' . auth()->user()->id)}}"   method="POST" enctype="multipart/form-data">

                                @csrf

                                @method('PUT')

                                <div class="col-md-4">
{{--                                    @if($newimage)--}}
{{--                                        <img src="{{$newimage->temporaryUrl()}}" width="100%" />--}}

                                    @if(auth()->user()->image)
                                        <img src="{{asset('uploads/profile/'. auth()->user()->image)}}" width="100%" />
                                    @else
                                        <img src="/asset/profile/dummy2.jpg" width="100%" />
                                    @endif
                                    <input type="file" name="image" class="fa-file form-control" wire:model="newimage">
                                </div>


                                <div class="col-md-8">
                                    <p><b>Firstname: </b>
                                    <div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user"></i></span>
                                        <input type="text"
                                               name="firstname"
                                               class="form-control1"
                                               placeholder="Firstname"
                                               value="{{ auth()->user()->firstname }}"
                                               wire:model="firstname"> @error('firstname') <span>{{$message}}</span> @enderror
                                    </div></p>
                                    <p <b>Lastname: </b>
                                    <div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user"></i></span>
                                        <input type="text"
                                               name="lastname"
                                               class="form-control1"
                                               placeholder="Lastname"
                                               value="{{ auth()->user()->lastname }}"
                                               wire:model="lastname">@error('lastname') <span>{{$message}}</span> @enderror
                                    </div></p>
                                    <p><b>Email: </b>
                                    <div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-envelope-o"></i></span>
                                        <input type="text"
                                               class="form-control1"
                                               placeholder="Email Address"
                                               value="{{auth()->user()->email}}">
                                    </div></p>
                                    <p><b>Phone: </b>
                                    <div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-mobile-phone"></i></span>
                                        <input type="text"
                                               name="phone"
                                               class="form-control1"
                                               placeholder="Phone"
                                               value="{{ auth()->user()->mobile }}"
                                               required
                                               wire:model="mobile">@error('mobile') <span>{{$message}}</span> @enderror
                                    </div></p>
                                    <hr>
                                    <p><b>Line1: </b>
                                    <div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-phone-square"></i></span>
                                        <input type="text"
                                               name="line1"
                                               class="form-control1"
                                               placeholder="Line 1"
                                               required
                                               wire:model="line1">@error('line1') <span>{{$message}}</span> @enderror
                                    </div> </p>
                                    <p><b>Line2: </b>
                                    <div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-phone-square"></i></span>
                                        <input type="text"
                                               name="line2"
                                               class="form-control1"
                                               placeholder="Line 2"
                                               wire:model="line2">
                                    </div> </p>
                                    <p><b>City/Town: </b>
                                    <div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-home"></i></span>
                                        <input type="text"
                                               name="city"
                                               class="form-control1"
                                               placeholder="City"
                                               required
                                               wire:model="city">@error('city') <span>{{$message}}</span> @enderror
                                    </div> </p>
                                    <p><b>County: </b>
                                    <div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-h-square"></i></span>
                                        <input type="text"
                                               name="county"
                                               class="form-control1"
                                               placeholder="County"
                                               required
                                               wire:model="county">@error('county') <span>{{$message}}</span> @enderror
                                    </div> </p>
                                    <p><b>Postal code: </b>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-pin"></i></span>
                                        <input type="text"
                                               name="postcode"
                                               class="form-control1"
                                               placeholder="Postal code"
                                               wire:model="postcode">@error('postcode') <span>{{$message}}</span> @enderror
                                    </div> </p>
                                    <div class="pull-right" style="padding-top: 6px">
                                        <button type="submit" class="btn btn-info btn-default">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    @include('footer')
@stop
