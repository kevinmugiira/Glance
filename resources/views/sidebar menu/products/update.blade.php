
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
                            <h4>Product update :</h4>
                        </div>
                        <div class="form-body">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Product name">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product description</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Upload new image</label>
                                    <input type="file" id="exampleInputFile">
                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                </div>
                                <div class="checkbox">
                                    <!--<label><input type="checkbox"> Check me out </label>-->
                                </div>
                                <!--<a href="#"><span class="label label-success">Success</span></a>-->
                                <button type="submit"  class="btn btn-default ">Update</button>
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
