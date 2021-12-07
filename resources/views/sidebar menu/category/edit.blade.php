

@extends('layouts.app')



@section('content')
    @include('dashboard-header')




    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page">
            <div class="forms">
                <h2 class="title1">Categories</h2>
                <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                    <div class="form-title">
                        <h4>Update Category :
                            <a href="{{ url('home') }}" class="btn btn-primary pull-right">Back</a>
                        </h4>
                    </div>
                    <div class="form-body">
                        <form action="{{ url('/edit-cat/'.$cat->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            @method('PUT')

                            <div class="form-group">
                                <label for="exampleInputEmail1">Category name</label>
                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       id="exampleInputEmail1"
                                       value="{{ $cat->name }}"
                                       placeholder="Update name">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Category type</label>
                                <input type="text"
                                       name="type"
                                       class="form-control"
                                       id="exampleInputEmail1"
                                       value="{{ $cat->type }}"
                                       placeholder="Update description">
                            </div>

                            <!--<a href="#"><span class="label label-success">Success</span></a>-->
                            <button type="submit"  class="btn btn-default ">Update category</button>
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

