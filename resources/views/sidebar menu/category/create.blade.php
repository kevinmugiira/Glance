

@extends('layouts.app')



@section('content')
    @include('dashboard-header')



    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page">
            <div class="forms">
                <h2 class="title1">Category</h2>
                <div class="card-header">
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                        <div class="form-title">
                            <h4>Add Category :
                                <a href="{{ url('home') }}" class="btn btn-primary pull-right">Back</a>
                            </h4>
                        </div>
                        <div class="form-body">
                            @if(Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            @if(Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif

                            <form action="/category/create" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category name</label>
                                    <input type="text"
                                           name="name"
                                           class="form-control @error('name') list-group-item-danger @enderror"
                                           id="exampleInputEmail1"
                                           placeholder="Name">
                                    @error('name')
                                    <p class="help list-group-item-danger">{{ $errors->first('name') }}</p>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category Type</label>
                                    <input type="text"
                                           name="type"
                                           class="form-control @error('type') list-group-item-danger @enderror"
                                           id="exampleInputPassword1"
                                           placeholder="Description">

                                    @error('type')
                                    <p class="help list-group-item-danger">{{ $errors->first('type') }}</p>
                                    @enderror

                                </div>


                                <button type="submit" class="btn btn-default">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>



    @include('footer')

@endsection


