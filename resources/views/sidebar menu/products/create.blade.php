

@extends('layouts.app')



@section('content')
    @include('dashboard-header')



    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page">
            <div class="forms">
                <h2 class="title1">Products</h2>
                <div class="card-header">
                <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                    <div class="form-title">
                        <h4>Add your Product :
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

                        <form action="/product/add" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Product name</label>
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
                                <label for="exampleInputPassword1">Product description</label>
                                <input type="text"
                                       name="description"
                                       class="form-control @error('description') list-group-item-danger @enderror"
                                       id="exampleInputPassword1"
                                       placeholder="Description">

                                @error('description')
                                <p class="help list-group-item-danger">{{ $errors->first('description') }}</p>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file"
                                       name="file_path"
                                       id="exampleInputFile">
                            </div>

                            <button type="submit" class="btn btn-default">Add Product</button>
                        </form>
                    </div>
                </div>
                </div>


            </div>
        </div>
    </div>



    @include('footer')

@endsection

