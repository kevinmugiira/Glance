
@extends('layouts.app')



@section('content')
    @include('dashboard-header')




    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page">
            <div class="forms">
                <h2 class="title1">Products</h2>
                <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                    <div class="form-title">
                        <h4>Update Product :</h4>
                    </div>
                    <div class="form-body">
                        <form action="{{ url('/update-product/' .$prod->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            @method('PUT')

                            <div class="form-group">
                                <label for="exampleInputEmail1">Product name</label>
                                <input type="text"
                                       class="form-control"
                                       id="exampleInputEmail1"
                                       value="{{ $prod->name }}"
                                       placeholder="Update name">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Product description</label>
                                <input type="text"
                                       class="form-control"
                                       id="exampleInputEmail1"
                                       value="{{ $prod->description }}"
                                       placeholder="Update description">
                            </div>
                            <div class="form-group">
                                <label for="">Upload new image</label>
                                <input type="file"
                                       name="file_path"
                                       id="exampleInputFile">
                                <img src="{{ asset('uploads/products/' .$prod->file_path) }}" width="70px" height="70px" alt="Image">
                                <!--<p class="help-block">Example block-level help text here.</p>-->
                            </div>
                            <div class="checkbox">
                                <!--<label><input type="checkbox"> Check me out </label>-->
                            </div>
                            <!--<a href="#"><span class="label label-success">Success</span></a>-->
                            <button type="submit"  class="btn btn-default ">Update Product</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </body>

    @include('footer')

@endsection
