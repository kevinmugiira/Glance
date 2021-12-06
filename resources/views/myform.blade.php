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
                        <h4>Product Edit :</h4>
                    </div>
                    <div class="form-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product name</label>
                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       id="exampleInputEmail1"
                                       placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Product description</label>
                                <input type="text"
                                       name="description"
                                       class="form-control"
                                       id="exampleInputPassword1"
                                       placeholder="Description">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file"
                                       name="file_path"
                                       id="exampleInputFile">
                            </div>

                            <button type="submit" class="btn btn-default">Update</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>



@include('footer')

@endsection

